<?php

namespace App;

class LoggerUtil
{
    private static $pid = 0;

    private static function write_log($prefix, $msgs, bool $withTraceInfo = true)
    {
        $file = LOG_PATH . '/cwz_api_' . date('Ymd') . '.log';
        $traces = [];
        if ($withTraceInfo) {
            $traces = debug_backtrace();
            $currentFile = __FILE__;
            if (count($traces) > 2) {
                foreach ($traces as $index => $trace) {
                    if ($trace['file'] == $currentFile) {
                        unset($traces[$index]);
                        continue;
                    }
                    if (isset($trace['object']) && isset($trace['object']->swoole)) {
                        $traces[$index]['object'] = '...had been unset...';
                    }
                }
                $traces = array_slice(array_values($traces), 0, 3);
            }
        }
        if (self::$pid == 0) {
            self::$pid = posix_getpid();
        }
        $prefix = date("Y-m-d H:i:s") . "[pid:" . self::$pid . "]" . sprintf("[%s]", $prefix);
        $msg_str = $prefix . " >>> ";
        if (is_scalar($msgs)) {
            $msg_str .= $msgs;
        } else {
            if (is_array($msgs) && (count($msgs) == 1) && is_scalar($msgs[0])) {
                $msg_str .= $msgs[0];
            } else {
                $msg_str .= json_encode($msgs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            }
        }
        $msg_str .= ($traces ? json_encode($traces, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) : '') . "\n";

        return file_put_contents($file, $msg_str, FILE_APPEND | LOCK_EX);
    }

    public static function error(...$msgs)
    {
        self::write_log('ERROR', $msgs);
    }

    public static function warn(...$msgs)
    {
        self::write_log('WARN', $msgs);
    }

    public static function info(...$msgs)
    {
        self::write_log('INFO', $msgs);
    }

    public static function plantLog(...$msgs)
    {
        self::write_log('INFO', $msgs, false);
    }

    public static function apiWithheldLog($msgs, $prefix = 'INFO', $withTraceInfo = false, $file = ''){
        if (!$file) {
            $file = LOG_PATH . '/cwz_api_withheld_' . date('Ymd') . '.log';
        }
        $traces = [];
        if ($withTraceInfo) {
            $traces = debug_backtrace();
            $currentFile = __FILE__;
            if (count($traces) > 2) {
                foreach ($traces as $index => $trace) {
                    if ($trace['file'] == $currentFile) {
                        unset($traces[$index]);
                        continue;
                    }
                    if (isset($trace['object']) && isset($trace['object']->swoole)) {
                        $traces[$index]['object'] = '...had been unset...';
                    }
                }
                $traces = array_slice(array_values($traces), 0, 3);
            }
        }
        if (self::$pid == 0) {
            self::$pid = posix_getpid();
        }
        $prefix = date("Y-m-d H:i:s") . "[pid:" . self::$pid . "]" . sprintf("[%s]", $prefix);
        $msg_str = $prefix . " >>> ";
        if (is_scalar($msgs)) {
            $msg_str .= $msgs;
        } else {
            if (is_array($msgs) && (count($msgs) == 1) && is_scalar($msgs[0])) {
                $msg_str .= $msgs[0];
            } else {
                $msg_str .= json_encode($msgs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            }
        }
        $msg_str .= ($traces ? json_encode($traces, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) : '') . "\n";

        return file_put_contents($file, $msg_str, FILE_APPEND | LOCK_EX);
    }
}
