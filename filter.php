<?php

/* Set filter */
$xssfilter  = "javascript|vbscript|expression|applet|meta|xml|blink|";
$xssfilter .= "link|style|script|embed|object|iframe|frame|frameset|";
$xssfilter .= "ilayer|layer|bgsound|title|base|form|img|body|href|div|cdata";
$ua  = "curl|wget|winhttp|HTTrack|clshttp|loader|email|harvest|extract|grab|miner|";
$ua .= "libwww-perl|acunetix|sqlmap|python|nikto|scan";
$sqlfilter  = "[\x22\x27](\s)*(or|and)(\s).*(\s)*\x3d|";
$sqlfilter .= "'|cmd=ls|cmd%3Dls|concat\(|";
$sqlfilter .= "(drop|alter|create|truncate)\\s+.*(index|table|database)|";
$sqlfilter .= "insert(\s).*(into|member.|value.)|";
$sqlfilter .= "(select|union|order)\\s+.*(select|union|order|from)|";
$sqlfilter .= "0x[0-9a-f][0-9a-f]|";
$sqlfilter .= "benchmark\([0-9]+,[a-z]+|benchmark\%28+[0-9]+%2c[a-z]+|";
$sqlfilter .= "eval\(.*\(.*|eval%28.*%28.*|";
$sqlfilter .= "update\\s+.*set.*=|delete\\s+.*from";
$traversal = "\.\.\/|\.\.\\|%2e%2e%2f|%2e%2e\/|\.\.%2f|%2e%2e%5c";
$rfifilter  = "%00|";
$rfifilter .= "(?:((?:ht|f)tp(?:s?)|file|webdav)\:\/\/|~\/|\/).*\.\w{2,3}|";
$rfifilter .= "(?:((?:ht|f)tp(?:s?)|file|webdav)%3a%2f%2f|%7e%2f%2f).*\.\w{2,3}";

function StopAttack($StrFiltKey,$StrFiltValue){
    global $xssfilter, $ua, $traversal, $sqlfilter, $rfifilter,$_SERVER;
    if(is_array($StrFiltValue))
    {
        $StrFiltValue=implode($StrFiltValue);
    }
    $is_fail = false;
    if ( preg_match( "/(<|<.)[^>]*(".$xssfilter.")[^>]*>/is", $StrFiltValue, $matched ) ) {
        $is_fail = true;
    }
    elseif ( preg_match( "/((\%3c)|(\%3c).)[^(\%3e)]*(".$xssfilter.")[^(\%3e)]*(%3e)/is", $StrFiltValue, $matched ) ) {
        $is_fail = true;
    }
    /* Query - traversal */
    elseif ( preg_match( "/^.*(".$traversal.").*/is", $StrFiltValue, $matched ) ) {
        $is_fail = true;
    }
    /* Query - Remote File Inclusion */
    elseif ( preg_match( "/^.*(".$rfifilter.").*/is", $StrFiltValue, $matched ) ) {
        $is_fail = true;
    }
    /* Query - Sql injection */
    elseif ( preg_match( "/^.*(".$sqlfilter.").*/is", $StrFiltValue, $matched ) ) {
        $is_fail = true;
    }
    if ( $is_fail ){
        $content = date('c')."\tIP:".$_SERVER["REMOTE_ADDR"]." Url:".$_SERVER["PHP_SELF"]." Method:".$_SERVER["REQUEST_METHOD"]." Param:".$StrFiltKey." Data:".$StrFiltValue." Matched：“".$matched[1]."”\n";
        if( defined("LOG_PATH") ){
            error_log($content,3,LOG_PATH."/safe_".date("Ymd").".log");
        }else{
            error_log($content);
        }
        header('Content-type:Application/Json;charset="utf-8"');
        echo json_encode(['code'=>"-40001","message"=>"Illegal operation"]);
        exit();
    }
}

foreach($_GET as $key=>$value){
    StopAttack($key,$value);
}
foreach($_POST as $key=>$value){
    StopAttack($key,$value);
}
foreach($_COOKIE as $key=>$value){
    StopAttack($key,$value);
}