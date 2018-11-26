<?php
class returnjson {
    const RJ_SUCCESS = 1;
    const RJ_ERR_DB = 2;
    const RJ_ERR_NOLOGIN = 3;
    const RJ_ERR_USERNAME = 4;
    const RJ_ERR_ISREG = 5;
    const RJ_ERR_TOKEN = 6;
    const RJ_ERR_NOUSER = 7;
    const RJ_ERR_CAPTCHA_TODAY5 = 8;
    const RJ_ERR_PHONE = 9;
    const RJ_ERR_MAIL = 10;
    const RJ_ERR_MAILORPHONE = 11;
    const RJ_ERR_USERNAME_EXITS = 12;
    const RJ_ERR_MAIL_EXITS = 13;
    const RJ_ERR_PHONE_EXITS = 14;
    const RJ_ERR_NAME_EXITS = 15;
    const RJ_ERR_NOTOKEN = 16;
    const RJ_ERR_NOTOPIC = 17;
    const RJ_ERR_READMIRE = 18;
    const RJ_ERR_NOIMG = 19;
    const RJ_ERR_PERMISSION = 20;
    const RJ_ERR_NOPOST = 21;
    const RJ_ERR_NOFORUM = 22;
    const RJ_ERR_USERINFO = 23;
    const RJ_ERR_FORUM_LIMIT_MANAGE_HELPER = 24;
    const RJ_ERR_TOPIC_LIMIT_MANAGE_HELPER = 25;
    const RJ_ERR_FORUM_LIMIT_MANAGE = 26;
    const RJ_ERR_TOPIC_LIMIT_MANAGE = 27;
    const RJ_ERR_FORUM_LIMIT_HELPER = 28;
    const RJ_ERR_TOPIC_LIMIT_HELPER = 29;

    const RJ_ERR_REJOIN = 30;
    const RJ_ERR_NICK = 31;
    const RJ_ERR_NOTADMIRE = 32;
    const RJ_ERR_NOSUPPORT = 33;
    const RJ_ERR_NOTREG = 34;
    const RJ_ERR_SIGN = 35;
    const RJ_ERR_NO_SINA_TOKEN = 36;
    const RJ_ERR_NO_TENCENT_TOKEN = 37;
    const RJ_ERR_CAPTCHA_1MIN = 38;
    const RJ_ERR_POST_IS_DEL = 39;
    const RJ_ERR_FORUM_LIMIT_NOJOIN = 40;
    const RJ_ERR_FORUM_JOINMAX = 41;
    const RJ_ERR_PARTITION = 42;
    const RJ_ERR_BAN = 43;
    const RJ_ERR_KEYWORD = 44;
    const RJ_ERR_FORUM_KEYWORD = 45;
    const RJ_ERR_ACTCODE = 46;
    const RJ_ERR_ACTCODE_USED = 47;
    const RJ_ERR_ACTCODE_MUST = 48;
    const RJ_ERR_FORUM_PIC_MGR = 49;
    const RJ_ERR_FORUM_NAME_REPEATATION = 50;
    const RJ_ERR_FORUM_LENGTH = 51;
    const RJ_ERR_FORUM_ADD = 52;
    const RJ_ERR_POST_LIMIT = 53;
    const RJ_ERR_TOPIC_LOCK = 54;
    const RJ_ERR_HOST_FORUM_NOJOIN = 55;
    const RJ_ERR_TOPIC_TITLE_LENGTH = 56;
    const RJ_ERR_TOPIC_EMPTY_TITLE_OR_CONTENT = 57;
    const RJ_ERR_DEVICE_REG_NUM_LIMIT = 58;
    const RJ_ERR_NO_WECHAT_TOKEN = 59;


    const RJ_ERR_OLD_PASSWORD = 60;
    const RJ_ERR_PHHONE_NOT_EXISTS = 61;
    const RJ_ERR_CAPTCHA = 62;
    const RJ_ERR_UID = 63;
    const RJ_ERR_HASBIND_PHONE = 64;
    const RJ_ERR_MEM = 65;
    const RJ_ERR_IMG = 66;
    const RJ_ERR_SOUND = 67;
    const RJ_ERR_PIN_MAX = 68;

    /**
     * 需要验证码，收到此错误码后客户端会弹出验证码输入窗口，下一次请求此接口将会带有验证码
     */
    const RJ_ERR_VERIFYCODE_REQUIRE            = 15001; //需要带有验证码
    const RJ_ERR_VERIFYCODE_INVALID            = 15002; //错误的验证码
    const RJ_ERR_VERIFYCODE_NOEXIST            = 15003; //验证码不存在
    const RJ_ERR_VERIFYCODE_PARAM              = 15004; //缺少参数
    const RJ_ERR_VERIFYCODE_TICKET             = 15005; //错误的票据

    const RJ_ERR_PARAMS = 101;
    const RJ_ERR_REBIND_CARNO = 102;
    const RJ_ERR_APP_NOT_FIND = 103;
    const RJ_ERR_CALL_TIME_EXPIRE = 104;

    const RJ_ERR_VOTE_EXPIRED = 120;
    const RJ_ERR_VOTE_VOTED = 121;
    const RJ_ERR_NOT_A_VOTE = 122;
    const RJ_ERR_VOTE_ST = 123, RJ_ERR_CAPTCHA_5TIMES = 124;

    const RJ_ERR_SUPPORT_DUPLICATE = 150;

    const RJ_ERR_APPLY_MANA_NOJOIN = 200;
    const RJ_ERR_APPLY_MANA_REGTIME = 201;
    const RJ_ERR_APPLY_MANA_JOINTIME = 202;
    const RJ_ERR_APPLY_HELP_NOJOIN = 203;
    const RJ_ERR_APPLY_HELP_REGTIME = 204;
    const RJ_ERR_APPLY_HELP_JOINTIME = 205;
    const RJ_ERR_APPLY_NO_REASON = 206;

    const RJ_ERR_APPLY_IN_PROGRESS = 207; // 前一个申请未处理
    const RJ_ERR_RESIGN_IN_PROGRESS = 208; // 前一个申请未处理
    const RJ_ERR_NOT_MANAGE = 209;
    const RJ_ERR_NOT_HELPER = 210;
    const RJ_ERR_HAS_MANAGER = 211;
    const RJ_ERR_HAS_HELPER = 212;
    const RJ_ERR_APPLY_NO_REALNAME = 213;
    const RJ_ERR_APPLY_NO_PHONE = 214;
    const RJ_ERR_APPLY_NO_WX = 215;
    const RJ_ERR_APPLY_NO_SUGGEST = 216;
    const RJ_ERR_APPLY_NO_DEFECT = 217;
    const RJ_ERR_APPLY_MANAGE_TOO_MANY = 218;
    const RJ_ERR_APPLY_HAS_MANAGER = 219;

    const RJ_ERR_FUELING_REPEAT = 220;
    const RJ_ERR_FUELING_NOT_JOIN = 221;
    const RJ_ERR_TRAFFIC_NO_QUESTION = 222; //  cw_forum.type != cw_forum_model::TYPE_status_created || cw_forum.join_limit == cw_forum_model::JOIN_limit_nojoin


    const RJ_ERR_CAR_NAME_EMPTY = 230;

    const RJ_ERR_ADMIN_TOPIC = 300; // 吧主不能删除管理员的话题，提示“该话题不能删除”
    const RJ_ERR_ADMIN_BAN = 301; // 吧主不能关管理员小黑屋


    const RJ_ERR_HAS_DO_INTEGRAL = 350;
    const RJ_ERR_HAS_NO_INTEGRAL = 351;

    const RJ_ERR_NOSHOP = 500;
    const RJ_ERR_NOGOLD = 501;
    const RJ_ERR_NOSHOPLOG = 502;
    const RJ_ERR_ONLYBUY = 503;
    const RJ_ERR_NOSTOCK = 504;
    const RJ_ERR_ONLYBUYONE = 505;
    const RJ_ERR_SHOP_BAN = 506;

    const RJ_MSG_ACTCODE = 900;
    const RJ_MSG_NO_SPPECH_HINT = 901;

    const RJ_MSG_ONLY_MANAGER = 1000;
    const RJ_MSG_ONLY_HELPER = 1001;
    const RJ_MSG_ONLY_MANAGER_HELPERE = 1002;
    const RJ_MSG_ONLY_CLOSE = 1003;
    const RJ_MSG_ONLY_MANAGE = 1004;
    const RJ_MSG_ONLY_MANAGE_JOIN = 1005;

    const RJ_ERR_NOFINDTOPIC = 1010;
    const RJ_ERR_DEL_PIC = 1011;
    const RJ_ERR_WAIT_CHECK = 1020;

    const RJ_ERR_NO_GOLD = 1030;
    const RJ_ERR_NOT_QUESTION = 1031;
    const RJ_ERR_NOT_TOPIC_OWNER = 1032;
    const RJ_ERR_NOT_SET_SELFTOPIC = 1033;
    const RJ_ERR_HAS_GOOG_ANSW = 1034;
    const RJ_ERR_ADOPT_SELF = 1035;		//采纳自己
    const RJ_ERR_ADOPT_SAME_USER_LIMIT = 1036;	//采纳同个用户的限制


    const RJ_ERR_LOCKTOPIC = 1040;

    const RJ_ERR_NICK_KEYWORD = 1050;
    const RJ_ERR_NICK_MOD_LEVEL = 1051;

    const RJ_ERR_CHANGE_CARTYPE = 1060;
    const RJ_ERR_QUITE_CARTYPE_FORUM = 1061;
    const RJ_ERR_CHANGE_CARCARD = 1062;
    const RJ_ERR_NO_DEL_CARCARD = 1063;
    const RJ_ERR_CARCARD_DEL_NOT_SELF = 1064;
    const RJ_ERR_CHANGE_CARNO = 1065;
    const RJ_ERR_CHANGE_CARCARD_CWZ = 1066;

    const RJ_ERR_CHANGE_CAR = 1070;

    //精选话题
    const RJ_ERR_TOPIC_PERFECT_HAS = 1080;
    const RJ_ERR_TOPIC_PERFECT_NOPOWER = 1081;
    const RJ_ERR_TOPIC_PERFECT_SETNUM = 1082;

    //自己删除自己的贴子
    const RJ_ERR_DEL_NOTSELF_TOPIC = 1090;
    const RJ_ERR_DEL_MANYPOSTS_TOPIC = 1091;
    const RJ_ERR_DEL_NOTSELF_POST = 1092;
    const RJ_ERR_DEL_TIMEOUT_TOPIC = 1093;
    const RJ_ERR_DEL_TIMEOUT_POST = 1094;
    const RJ_ERR_EDIT_TIMEOUT_TOPIC = 1095;
    const RJ_ERR_EDIT_ADMIN_TOPIC = 1096;
    const RJ_ERR_ADMIRERE_POST = 1097;
    const RJ_ERR_EDIT_TIMEOUT_POST = 1098;

    const RJ_ERR_PARK_NEED_TITLE = 2001, RJ_ERR_PARK_NEED_ADDR = 2002, RJ_ERR_PARK_NEED_PRICE = 2003, RJ_ERR_PARK_NEED_FEETYPE = 2004;
    const RJ_ERR_PARK_NEED_TYPE = 2005, RJ_ERR_PARK_NEED_PARKID = 2006, RJ_ERR_PARK_NEED_DESCRIPTION = 2007, RJ_ERR_PARK_NEED_LAT_LNG = 2008;
    const RJ_ERR_RECMT = 2009, RJ_ERR_REGOOD = 2010;

    const RJ_ERR_GASSTATION_NEED_TITLE = 2011, RJ_ERR_GASSTATION_NEED_ADDR = 2012, RJ_ERR_GASSTATION_NEED_PRICE = 2013, RJ_ERR_GASSTATION_NEED_FEETYPE = 2014;
    const RJ_ERR_GASSTATION_NEED_TYPE = 2015, RJ_ERR_GASSTATION_NEED_GASSTATIONID = 2016, RJ_ERR_GASSTATION_NEED_DESCRIPTION = 2017, RJ_ERR_GASSTATION_NEED_LAT_LNG = 2018;

    const RJ_ERR_ADMIN_UNBAN = 2019;

    //任务
    const RJ_TASK_NOT_COMPLATE = 2300;
    const RJ_TASK_HAS_GET_GOLD = 2301;

    //语音
    const RJ_ERR_SOUND_LEVEL = 2500;

    //通讯录，好友
    const RJ_ERR_ADDRESS_DEVICE = 2700, RJ_ERR_ADDRESS_EMPTYDATA = 2701;
    const RJ_ERR_FRIEND_SELF = 2702, RJ_ERR_FRIEND_MAX = 2703, RJ_ERR_IGNORE_MAX = 2704, RJ_ERR_IGNORE = 2705;

    //im
    const RJ_ERR_NOT_ACCESS_IP = 2800;

    //待创建吧加油
    const RJ_ERR_FUELING_MAX_NUM = 2900;
    const RJ_ERR_NOT_WILL_FORUM = 2901;
    const RJ_ERR_CONNECT_MAX_FORUM = 2902;
    const RJ_ERR_HAS_CONNECT_FORUM = 2903;
    const RJ_ERR_NO_CONNECT_FORUM = 2904;
    const RJ_ERR_FAILED_WILL_FORUM = 2905;
    const RJ_ERR_SUCC_WILL_FORUM = 2906;
    const RJ_ERR_NO_CONECT_FORUM = 2907, RJ_ERR_TODAY_CREATE_FORUM_MAX = 2908;
    const RJ_ERR_WFORUM_NAME_REPEATATION = 2909;

    //给吧主投票
    const RJ_ERR_MANAGER_VOTE_NOT_JOIN = 3000;
    const RJ_ERR_MANAGER_VOTE_NOT_MANAGER = 3001;
    const RJ_ERR_MANAGER_WILL_VOTE_NOT_MANAGER = 3002;
    const RJ_ERR_NO_MANAGER = 3003;

    //赞帖子
    const RJ_ERR_HAS_ADMIRE_TOPIC = 3100;
    const RJ_ERR_REP_UNADMIRE_TOPIC = 3101;

    //抱，亲，赞
    const RJ_ERR_HAS_KISS = 3200;
    const RJ_ERR_HAS_hug = 3201;
    const RJ_ERR_HAS_hand = 3202;
    const RJ_ERR_SELF_ACTION = 3203;
    const RJ_ERR_NOT_JOIN_FORUM = 3204;

    //短信
    const RJ_ERR_DX_CAPTCHA = 3300;

    //吧
    const RJ_ERR_MANAGER_QUIT_FORUM = 3400;
    const RJ_ERR_HAS_APPLY = 3401;
    const RJ_ERR_FORUM_NOTIFY_ONCE = 3402;
    const RJ_MSG_FORUM_MODIFY_SUCCESS = 3403;
    const RJ_ERR_RECENT_APPLY = 3405;
    //老版本创建车轮会关闭
    const RJ_ERR_FORUM_OLD_CREATE_CLOSE = 3404;

    //副会长
    const RJ_ERR_NOT_FORUM_MEMBER = 3410;
    const RJ_ERR_MAX_FORUM_SONMEMBER = 3411;
    const RJ_ERR_HAS_FORUM_SONMEMBER = 3412;
    const RJ_ERR_NOT_FORUM_SONMEMBER = 3413;
    const RJ_ERR_SELF_MANAGER = 3414;

    //认证吧
    const RJ_ERR_NOT_AUTH_FORUM = 3430;
    const RJ_ERR_JOIN_NEED_APPLY = 3431;
    const RJ_ERR_JOIN_NOTNEED_APPLY = 3432;
    const RJ_ERR_MANAGE_FUNCTION = 3433;

    //取消会长
    const RJ_ERR_NOT_APPLY_MANAGER = 3440;

    //申请加入车轮会
    const RJ_ERR_MAX_FORUM = 3450;
    const RJ_ERR_YOU_HASMAXFORUM = 3451;

    //会长上下任
    const RJ_ERR_CHANGE_CHAIRMAN_NOT_IN_LIST = 3452;

    const RJ_ERR_MAX_MANGER_APPLY = 3460;
    const RJ_ERR_PLEASE_SET_PWD = 3461;
    const RJ_ERR_HASDO_APPLY = 3462;
    const RJ_ERR_EMPTY_NAME = 3463;
    const RJ_ERR_NO_FLOODING = 3464;
    const RJ_ERR_HAS_FLOODING = 3465;
    const RJ_ERR_HAS_NORMAL = 3466;
    const RJ_ERR_EMPTY_FORUM_LOGO = 3467;

    /**
     * 密码输入错误超过6次
     */
    const RJ_ERR_TOO_MANY_PASSWORD_FAIL = 3468;

    //话题标签
    const RJ_ERR_TAG_MAX_NUM = 3470;
    const RJ_ERR_NOTAG = 3471;
    const RJ_ERR_EMP_TAG = 3472;
    const RJ_ERR_TAG_LEN = 3473;
    const RJ_ERR_MAX_CHOSE_TAG = 3474;
    const RJ_ERR_TAG_KEYWORDS = 3475;

    //编辑话题
    const RJ_ERR_NOT_FORUM_TOPIC = 3480;
    //匿名吧
    const RJ_ERR_SECRET_FORUM_ACTIVITY = 3490;
    const RJ_ERR_SECRET_FORUM_ASK = 3491;
    const RJ_ERR_SECRET_FORUM_TOPIC = 3492;

    const RJ_ERR_FILTER_FORUM = 3510;

    //会号
    const RJ_ERR_NO_LENGTH = 3520;
    const RJ_ERR_MAX_MONEY_TYPES = 3521;
    const RJ_ERR_REP_NO = 3522;
    const RJ_ERR_MAX_MAKE_NO = 3523;
    const RJ_ERR_SET_NO_MAG = 3524;
    const RJ_ERR_MAX_NO_LEN = 3525;
    const RJ_ERR_NOLEN = 3526;
    const RJ_ERR_NOT_NO = 3527;
    const RJ_ERR_NO_APPLYED = 3528;
    const RJ_ERR_NO_USED = 3529;
    const RJ_ERR_NOT_JOIN = 3530;
    const RJ_ERR_HAVE_NO = 3531;

    //群组
    const RJ_ERR_GROUP_NAME_LEN = 3600;
    const RJ_ERR_GROUP_DESCRIP_LEN = 3601;
    const RJ_ERR_GROUP_HAS_BELON = 3602;
    const RJ_ERR_GROUP_NOT_MANAGE = 3603;
    const RJ_ERR_GROUP_LV = 3604;
    const RJ_ERR_GROUP_MAX = 3605;
    const RJ_ERR_GROUP_NO = 3606;
    const RJ_ERR_GROUP_MEMBER = 3607;
    const RJ_ERR_GROUP_MAX_MEMBERS = 3608;
    const RJ_ERR_GROUP_USER_MAX_GROUP = 3609;
    const RJ_ERR_GROUP_HAS_NOT_MEMBER = 3610;
    const RJ_ERR_GROUP_NEED_APPLY = 3611;
    const RJ_ERR_GROUP_DOWN_LEVEL = 3612;
    const RJ_ERR_GROUP_LV_MAX = 3613;
    const RJ_ERR_GROUP_NO_APPLY = 3614;
    const RJ_ERR_GROUP_HAS_JOIN = 3615;
    const RJ_ERR_GROUP_APPLY_HASDO = 3616;
    const RJ_ERR_GROUP_NOT_OWNER = 3617;
    const RJ_ERR_GROUP_ATTACH_DAY = 3618;
    const RJ_ERR_GROUP_NOT_MEMBER = 3619;
    const RJ_ERR_UPTIME_ISNEW = 3620;
    const RJ_ERR_GROUP_YOU_MAX_GROUP = 3621;
    const RJ_ERR_GROUP_HAS_APPLY = 3622;
    const RJ_ERR_GROUP_ONLY_MEMBER = 3623;
    const RJ_ERR_GROUP_CANT_QUIT = 3624;
    const RJ_ERR_GROUP_MEMBER_PARAM = 3625; //查看群用户参数缺失
    const RJ_ERR_GROUP_NICK_SET_PARAM = 3626; //设置群昵称参数缺失
    const RJ_ERR_GROUP_NICK_SET = 3627; //设置群昵称失败
    const RJ_ERR_GROUP_MANAGER_SET_PARAM = 3628; //设置群管理员参数缺失
    const RJ_ERR_GROUP_MANAGER_SET = 3629; //设置群管理员失败
    const RJ_ERR_GROUP_NICK_GET_PARAM = 3630; //获取群信息参数错误
    const RJ_ERR_GROUP_POWER = 3631; //无权限进行操作
    const RJ_ERR_GROUP_INVITE_PARAM = 3632; //无权限进行操作
    const RJ_ERR_GROUP_MANAGER_NUM = 3633; //管理员人数超过限制
    const RJ_ERR_GROUP_JOIN_PARAM = 3634; //加入群组参数缺失
    const RJ_ERR_GROUP_NO_INVITE = 3635;    //没有找到邀请记录
    const RJ_ERR_GROUP_INVITE_HASDO = 3636;    //邀请记录已经处理过
    const RJ_ERR_GROUP_FORUM_RECOMMEND = 3637;  //会长推荐会内群组失败
    const RJ_ERR_GROUP_FORUM_UNRECOMMEND = 3638;  //会长取消推荐会内群组失败
    const RJ_ERR_GROUP_FORUM_RECOMMEND_LIMIT = 3639;  //会长推荐会内群组数量上限
    const RJ_ERR_GROUP_NEW_USER_JOIN = 3640;    //不允许加入自己加入新人群

    //排名
    const RJ_ERR_RANK_NONE = 4000;

    //资讯号
    const RJ_ERR_NOINFOUSER = 4100;
    const RJ_ERR_NOINFORM = 4101;

    //车主认证
    const RJ_ERR_AUTH_NOCAR = 4120;
    const RJ_ERR_AUTH_NOPAPER = 4121;
    const RJ_ERR_AUTH_NOPHONE = 4122;
    const RJ_ERR_AUTH_HASAPPLY = 4123;
    const RJ_ERR_AUTH_AUTHUSER = 4124;
    const RJ_ERR_AUTH_GROUP_ATTACH_DAY = 4125;
    const RJ_ERR_AUTH_BAN_USER = 4126;
    const RJ_ERR_AUTH_NO_APPLY = 4127;
    const RJ_ERR_AUTH_NO_ECODE = 6001;
    const RJ_ERR_AUTH_NO_VCODE = 6002;
    const RJ_ERR_AUTH_NO_REGIST_TIME = 6003;
    //申请超过2个
    const RJ_ERR_AUTH_TOO_MANY = 4128;
    //没有图片URL
    const RJ_ERR_AUTH_NO_IMAGE = 4129;
    //车型已经认证过了
    const RJ_ERR_AUTH_CARTYPE_HAS_AUTH = 4130;

    const RJ_ERR_USERCARD_HAS_APPLY = 4131;
    const RJ_ERR_USERCARD_NOT_EXIST = 4132;
    const RJ_ERR_USERCARD_HAS_OTHER_UNAUTH = 4133;
    const RJ_ERR_USERCARD_HAS_APPLY_NODEL = 4134;
    const RJ_ERR_USERCARD_CARTYPE_NO_EMPTY = 4135;

    //活动
    const RJ_ERR_ACT2_MAX_CREATE_NUM = 4140;
    const RJ_ERR_ACT2_START_TIMR = 4141;
    const RJ_ERR_ACT2_NO_ACT = 4142;
    const RJ_ERR_ACT2_STARTED = 4143;
    const RJ_ERR_ACT2_START_LONG = 4144;
    const RJ_ERR_ACT2_START_BEFORE = 4145;
    const RJ_ERR_ACT2_END_LONG = 4146;
    const RJ_ERR_ACT2_NO_DEL_STARTED = 4147;
    const RJ_ERR_ACT2_NO_JOINGROUP = 4148;
    const RJ_ERR_ACT2_NO_DISBAND = 4149;
    const RJ_ERR_ACT2_NO_UPGROUP = 4150;
    const RJ_ERR_ACT2_GROUP = 4151;
    const RJ_ERR_ACT2_OVER = 4152;
    const RJ_ERR_ACT2_MAX_MEMBER = 4153;
    const RJ_ERR_ACT2_MAX_JOINS = 4154;
    const RJ_ERR_ACT2_HAS_JOIN = 4155;
    const RJ_ERR_ACT2_NOT_OWNER = 4156;
    const RJ_ERR_ACT2_NO_ONE_HERE = 4157;
    const RJ_ERR_ACT2_NO_USER = 4158;
    const RJ_ERR_ACT2_OWNER_QUIT = 4159;
    const RJ_ERR_NO_REASON = 4160;
    const RJ_ERR_REASON_LONG = 4161;
    const RJ_ERR_ACT2_END = 4162;
    const RJ_ERR_ACT2_START = 4163;
    const RJ_ERR_ACT2_TITLE = 4164;
    const RJ_ERR_ACT2_CONTENT = 4165;
    const RJ_ERR_ACT2_UNAUTH = 4166;
    const RJ_ERR_ACT2_CITY_FORUM_ONLY = 4167;   //进城市车轮会能发布活动贴
    const RJ_ERR_ACT2_NEED_GROUP = 4168;   //发布活动需要群组
    const RJ_ERR_ACT2_CANNOT_SWITCH = 4169;   //发布活动需要群组
    const RJ_ERR_ACT2_GROUP_NO_OWNER = 4170;   //发布活动需要群组
    const RJ_ERR_ACT2_ALREADY = 4171;   //已经是活动
    const RJ_ERR_ACT2_OLD_VERSION = 4172;   //旧版提示

    //全站封印
    const RJ_ERR_BAN_ALL = 4180;


    //用户中心
    const RJ_ERR_USER_MAX_PIC = 4190;
    const RJ_ERR_USER_ADMIRE_REPEAT = 4191;
    const RJ_ERR_USER_ADMIRE_DAY_REPEAT = 4192;			//当天重复
    const RJ_ERR_USER_ADMIRE_DAY_LIMIT = 4193;			//当天达到限制
    //不能解封管理员封印的用户
    const RJ_ERR_UNBAN_MAGE_USER = 4200;
    //被封禁用户的手机号禁止解绑
    const RJ_ERR_UNBIND_PHONE_BAN_USER = 4210;

    //poi
    const RJ_ERR_POI_INOF_REQUIRE = 4300;

    const RJ_ERR_CAR_NO = 4400;

    //身份
    const RJ_IDENTITY_SET_OVER = 4500;		//用户设置身份的数量超过限制
    const RJ_IDENTITY_SET_HONOR = 4501;		//用户不能设置荣誉类型身份
    const RJ_IDENTITY_AUTHED = 4502;		//提示已经认证过了
    const RJ_IDENTITY_APPLYED = 4503;		//提示之前的申请还在审核状态
    const RJ_IDENTITY_SETED = 4504;			//提示身份已经设置过
    const RJ_IDENTITY_UNSELECTED = 4505;			//身份未选择
    const RJ_IDENTITY_CANNOT_AUTH = 4506;			//身份不可认证
    const RJ_IDENTITY_NO_AUTH_LOG = 4507;			//未找到认证申请记录
    const RJ_IDENTITY_NO_CANCEL_AUTHED = 4508;			//不能取消已经认证的申请
    const RJ_IDENTITY_NO_CANCEL_REFUSED = 4509;			//不能取消已经拒绝的申请


    const RJ_ERR_TOPIC_ALREADY_KERNEL = 4600;

    const RJ_ERR_SCAN_CARNO_EMPTY = 4700;//扫描车牌上传车牌号为空
    const RJ_ERR_SCAN_PIC_ERROR = 4701;//扫描车牌上传图片时id不存在
    const RJ_ERR_SCAN_ADD = 4702;//扫描车牌增加记录数据库错误
    const RJ_ERR_SCAN_UPDATE = 4703;//扫描车牌更新记录数据库错误
    const RJ_ERR_SCAN_ID_EMPTY = 4704;//扫描车牌上传ID为空
    const RJ_ERR_PRIZE_DETAIL_PARAM = 4705;//扫车牌中奖实物时，补充信息参数确实
    const RJ_ERR_PRIZE_DETAIL_UPDATE = 4706;//扫车牌实物中奖信息补充失败
    const RJ_ERR_OWNER_WANTED = 4707;//通缉车主失败
    const RJ_ERR_OWNER_WANTED_LIMIT = 4708;//通缉车主数量超过限制
    const RJ_ERR_OWNER_WANTED_GOLD = 4709;//通缉车主金币过少
    const RJ_ERR_RIP_WANTED_PARAM = 4710;//揭榜参数错误
    const RJ_ERR_OWNER_WANTED_NOT_ENOUGH = 4711;//车主车轮币不够或者扣减失败

    const RJ_ERR_UPDATE_CARD = 4800;//更新汽车名片（数据库）失败
    const RJ_ERR_ADD_CARD = 4801;//增加汽车名片（数据库）失败
    const RJ_ERR_ADMIRE_CARD = 4802;//汽车名片点赞失败
    const RJ_ERR_ADMIRE_CARD_REPEAT = 4803;//汽车名片点赞失败
    const RJ_ERR_UPDATE_CARD_POWER = 4804;//没有权限更新汽车名片
    const RJ_ERR_CARD_GREET = 4805;//搭讪失败参数缺失
    const RJ_ERR_UPDATE_CARD_PARAM = 4806;//更新汽车名片参数缺失
    const RJ_ERR_HAS_CARD = 4807;//用户已有汽车名片不再引导
    const RJ_ERR_ONCE_CARD = 4808;//一周只引导一次
    const RJ_ERR_CARNO_EXIST = 4809;//补充汽车名片资料冲突，已经存在
    const RJ_ERR_UPDATE_CARD_STATUS = 4810;//汽车名片不是未申请审核状态，无法修改信息
    const RJ_ERR_FILL_CARD_INFO = 4811;//有多张汽车名片，无法完善汽车资料
    const RJ_ERR_APPEAL_CARD_CARNO = 4812;//申诉的汽车名片填写的车牌号不匹配

    const RJ_ERR_MOVE_CAR = 4900;//挪车记录添加失败
    const RJ_ERR_MOVE_CAR_PARAM = 4901;//挪车记录参数错误
    const RJ_ERR_MOVE_CAR_LIMIT = 4902;//挪车次数超限
    const RJ_ERR_MOVE_CAR_SET_START = 4903;//设置挪车牌失败
    const RJ_ERR_MOVE_CAR_SET_VOER = 4904;//取消挪车牌失败
    const RJ_ERR_MOVE_CAR_GOLD = 4905;//车轮币扣减失败
    const RJ_ERR_MOVE_CAR_PHONE_EMPTY = 4906;//为找到车主手机号

    //第三方绑定
    const RJ_ERR_HAS_BINDED  = 5000;//已经绑定
    const RJ_ERR_WEIXIN_USED = 5001;//微信已经被其他用户绑定
    const RJ_ERR_ACCOUNT_BINDED_OTHER  = 5002;//已经绑定了其他微信账号

    //3D汽车空间
    const RJ_ERR_ADD_CARZONE = 5100;//购车失败
    const RJ_ERR_SAVE_EMPTY = 5101;//保存未购买
    const RJ_ERR_SAVE_MATCH = 5102;//保存不匹配
    const RJ_ERR_SAVE = 5103;//保存失败
    const RJ_ERR_CARZONE_GIFT = 5104;//无效的兑换码
    const RJ_ERR_CARZONE_GIFT_FAILD = 5105;//兑换失败
    const RJ_ERR_CARZONE_IMG = 5106;//上传分享图片失败
    const RJ_ERR_CARZONE_VERSION = 5107;//不需要升级

    //达人榜
    const RJ_ERR_DAREN_APPLY_REPEAT = 5200;//已经申请过
    const RJ_ERR_DAREN_APPLY_ING = 5201;//正在申请中
    const RJ_ERR_DAREN_APPLY_ALREADY = 5202;//已在榜上
    const RJ_ERR_DAREN_APPLY_AUTH_EMPTY = 5203;//没有已认证的汽车名片
    const RJ_ERR_DAREN_APPLAY_AUTH_NUM = 5204;//爱车照片少于3张不能申请上榜
    const RJ_ERR_DAREN_APPLAY_AUTH_ERR = 5205;//申请豪车的用户不符合要求

    //汽车名片留言
    const RJ_ERR_CARD_TOP_NUM = 5300; //超出留言置顶限制

    const RJ_ERR_ELSE_PHONE = 5400; //170号码不能注册

    const RJ_ERR_CHETIE_HAS_BINDED = 5500; //车贴已经被绑定过了.
    const RJ_ERR_USER_HAS_BINDED_CHETIE = 5501; //用户已经绑定过车贴
    const RJ_ERR_USER_NO_CHETIE = 5502; //没有绑定车贴的情况下进行解绑操作
    const RJ_ERR_INVALIDE_CHETIE = 5503; //无效的车贴
    const RJ_ERR_HONGBAO_NO_ENOUGH_ICONS = 5505; //车轮币不足，请减少面值或份数
    const RJ_ERR_HONGBAO_MAX_NUM = 5506; //会长兑换红包,每次最多兑换的分数
    const RJ_ERR_HONGBAO_MAX_NUM_PER_DAY = 5507; //会长兑换红包,每次最多兑换的分数
    const RJ_ERR_WEB_AUTHORIZE_NO_ACTID = 5508; //web授权-actid没有注册

    const  RJ_ERR_TOPIC_MAX_PIN_MAX = 5504; //您的车轮会置顶帖数量超出限制，取消一些旧帖的置顶后才能继续进行置顶操作

    const RJ_ERR_WECHAT_AUTHORIZE = 5509;//微信授权失败,请重新授权(web)
    const RJ_ERR_GO_HOME_PHONE_USED = 5510;//过年回家
    const RJ_ERR_GO_HOME_HAS_CREATED = 5511;//过年回家
    const RJ_ERR_GO_HOME_NOT_BIND_PHONE = 5512;//没有绑定手机号
    const RJ_ERR_GO_HOME_NO_ACTIVITY_INFO = 5513;//找不到发布的路线信息

    const RJ_ERR_GO_HOME_LOTTERY_REPEAT = 5530;//已经抽过奖
    const RJ_ERR_GO_HOME_LOTTERY_NO_PHONE = 5531;//没有手机号
    const RJ_ERR_GO_HOME_LOTTERY_NO_PRIZE = 5532;//奖品不充足，需要调整

    const RJ_ERR_GO_HOME_LOTTERY_NEED_SHARE = 5533;//成都车展，抽奖过一次，提示分享才可抽第二次


    //passport相关
    const RJ_ERR_PASSPROT_SERVICE = 5600;

    //彩蛋
    const RJ_ERR_GET_GIFT = 5700; //获取奖品失败
    const RJ_ERR_SHARE_GIFT = 5701; //分享彩蛋重复领取
    const RJ_ERR_USER_GIFT = 5702; //奖品不匹配

    //service调用失败
    const RJ_SERVICE_COMPLETE_INFO = 5800; //完善资料service调用失败
    //上下班路上
    const RJ_ERR_ROAD_NO_BEGIN = 5950;
    const RJ_ERR_ROAD_HAS_BEGIN = 5951;
    const RJ_ERR_ROAD_HAS_END = 5952;

    //车型库
    const RJ_ERR_CK_FINANCE_LIST = 5900; //获取金融结构列表失败
    const RJ_ERR_CK_ORDER = 5901; //提交贷款订单失败
    const RJ_ERR_CK_CAR_USER = 5902; //同步用户关注失败
    const RJ_ERR_CK_CAR_APPLY_LIMIT = 5903; //您今天提交了太多申请，请明天再试
    const RJ_ERR_CK_CAR_ORDER_LIMIT = 5904; //您今天提交了太多订单，请明天再试
    const RJ_ERR_CK_CAR_ORDER_REPEAT = 5905; //您已提交订单，请耐心等候处理
    const RJ_ERR_CK_CAR_USER_ATTENTION = 5906; //关注失败
    const RJ_ERR_CK_CAR_USER_CAN_ATTENTION = 5907; //取消关注失败
    const RJ_ERR_CK_CAR_USER_ATTENTION_RE = 5908; //已关注
    const RJ_ERR_CK_PRICE_NAME = 5909; //请输入合法的姓名,中文或者字母
    const RJ_ERR_CK_PRICE_MOBILE = 5910; //手机号码格式错误
    //文字投票
    const RJ_ERR_VOTE_LIMIT = 6000; //最多10个选项
    const RJ_ERR_HAD_AUTH_CAR_NO=6004;//车牌号已经认证
    const RJ_ERR_VIDEO_NOEDIT=6005;//视频贴不允许编辑
    const RJ_ERR_CHANGE_TYPE=6006;//禁止改变类型
    const RJ_ERR_QUERY_NEW_ASK=6007;//禁止改变类型

    const RJ_STOP_DUI_HUAN=6008;//停止兑换

    static $errMsg = array (
        1 => '成功',
        2 => '网络繁忙，请稍后再试',
        3 => '请先登录',
        4 => '手机号或密码错误',
        5 => '已经注册过了',
        6 => '你的登录信息已经过期了',
        7 => '无效的用户id',
        8 => '每台手机每天最多可以获取5次验证码',
        9 => '手机号码格式错误，请输入11位数字',
        10 => '错误的邮箱格式',
        11 => '请输入正确的邮箱或手机号',
        12 => '用户名 %s 已被注册',
        13 => '邮箱 %s 已被注册',
        14 => '手机号已%s被注册，请使用找回密码功能，或联系客服',
        15 => '%s 已被注册',
        16 => '你没有登录',
        17 => '此话题已被删除',
        18 => '你已经赞过这张图片了',
        19 => '没有找到这张图片',
        20 => '你没有权限进行本项操作',
        21 => '没有找到这个回复',
        22 => '没有找到这个车轮会',
        23 => '请先补全个人资料',
        24 => '本车轮会限制仅会长或帮主可以加入',
        25 => '本车轮会限制仅会长或帮主可以发言',
        26 => '本车轮会限制仅会长可以加入',
        27 => '本车轮会限制仅会长可以发言',
        28 => '本车轮会限制仅帮主可以加入',
        29 => '本车轮会限制仅帮主可以发言',
        30 => '你已是本车轮会成员',
        31 => '请输入1~10个字的昵称',
        32 => '你没有赞过这张图片',
        33 => '你没有支持过这个车轮会',
        34 => '用户未注册',
        35 => 'sign错误',
        36 => '新浪token错误',
        37 => '腾讯token错误',
        38 => '一分钟内只能获得1个手机短信验证码',
        39 => '这个回复已经被删除了',
        40 => '本车轮会限制任何人不可加入',
        41 => '加入的车轮会不能超过%d个',
        42 => '%s 分区信息错误',
        43 => '你已被禁言',
        44 => '你的发言中包含敏感关键字',
        45 => '敏感字被屏蔽',
        46 => '请输入正确的邀请码',
        47 => '邀请码已被使用',
        48 => '纯车主社区，内测阶段请输入您的邀请码，暂未获得邀请码的朋友请留意本App首页大图，如果您喜欢车轮，请同样介绍给您的车主朋友！',
        49 => '对不起，您无权修改',
        50 => '名称重复',
        51 => '字符长度不在范围内',
        52 => '添加失败',
        53 => "发帖太快了，休息一下吧",
        54 => "此主题已被锁定，不可以回复",
        55 => "加入不成功，请升级最新版本车轮体验车轮会功能",
        56 => "标题不能少于4个字",
        57 => '标题和内容不允许全部为空，请至少输入一项后发布',
        58 => '您的设备注册的账号已经达到上限',
        59 => '微信token错误',

        // 60 ~80 用户中心功能
        60 => '原密码错误',
        61 => '此号码未注册',
        62 => '验证码错误',
        63 => 'uid不能小于1',
        64 => '此手机已被他人绑定,请联系客服',
        65 => '楼层号错误',
        66 => '图片地址错误',
        67 => '语音地址错误',
        68 => '置顶数量已经超过限制',
        self::RJ_ERR_VERIFYCODE_REQUIRE => '当前请求量过大，请输入验证码',
        self::RJ_ERR_VERIFYCODE_INVALID => '验证码无效，请重新输入',
        self::RJ_ERR_VERIFYCODE_NOEXIST => '验证码不存在',
        self::RJ_ERR_VERIFYCODE_PARAM => '缺少必要的参数',
        self::RJ_ERR_VERIFYCODE_TICKET => '票据验证失败',
        101 => '参数错误',
        102 => '您绑定过这个车牌了',
        103 => '未定义的app',
        104 => '接口调用超时',
        //投票
        120 => '投票已过期',
        121 => '已经投过',
        122 => '不是投票',
        123 => '投票状态错误',
        124 => '每台手机每天最多可以获取5次验证码',
        150 => '不能重复支持',
        //吧申请条件提示
        200 => '请先加入此车轮会',
        201 => '注册时间少于%s天,不符合会长竞选条件',
        202 => '入车轮会时间少于%s天,不符合会长竞选条件',
        203 => '申请帮主,必须是本车轮会成员',
        204 => '注册时间少于%s天,不符合帮主申请条件',
        205 => '入车轮会时间少于%s天,不符合帮主申请条件',
        206 => '请填写申请理由',
        207 => '每位车友只可以竞选一个会长',
        208 => '你的申请已提交',
        209 => '你不是本车轮会会长',
        210 => '你不是本车轮会帮主',
        211 => '每位车友只可以竞选一个会长',
        212 => '你已经是本车轮会帮主',
        213 => '请填写真实姓名',
        214 => '请填写手机号',
        215 => '请填写微信号',
        216 => '请填写车轮会现状或者不足之处',
        217 => '请填写建议或者改善方案',
        218 => '每位车友只可以竞选一个会长',
        219 => '该车轮会已有会长',

        //加油
        220 => '今日油量已加满，明日再来',
        221 => '请先加入此车轮会,再加油',
        222 => '本车轮会不可以加油',
        230 => '请填写车型名称',
        300 => '该话题不能删除',
        301 => '该用户不能关小黑屋',

        //加分
        350 => '已加过分,不要进行重复加分',
        351 => '未执行过加分操作,无法撤销加分',

        //商城
        500 => '抱歉，商品刚刚下架',
        501 => '您的车轮币余额不足',
        502 => '订单不存在或已发货，请刷新再试',
        503 => '此商品只能购买一次',
        504 => '抱歉，库存不足',
        505 => '只能购买一个',
        506 => '你已被禁言，无法在兑换商场购买',

        //纯提示，非错误
        900 => '你有10个邀请码，还不快邀请有车的朋友们',
        901 => '升到%d级就可以发送语音了，赶快升级吧',

        //吧限制
        1000 => '仅会长可查看',
        1001 => '仅帮主可查看',
        1002 => '仅帮主和帮主可查看',
        1003 => '任何人不能查看',
        1004 => '仅管理员可以操作',
        1005 => '仅管理员可以加入',

        1010 => '找不到该话题',
        1011 => '此图片已被删除',
        1020 => '申请已提交,审核中',

        //急问
        1030 => '车轮币不足',
        1031 => '不是急问淘金贴，不能设置最佳答案',
        1032 => '不是楼主，不能设置最佳答案',
        1033 => '不能采纳自己的回复为最佳答案',
        1034 => '已有最佳答案',
        1035 => '和提问用户的设备号相同，不能采纳此答案',
        1036 => '小提示：连续采纳相同用户的回答会进入防刷币监控，请注意哦！',

        1040 => '话题被锁定，不能回复',

        //昵称包含关键字
        1050 => '昵称包含敏感字',
        self::RJ_ERR_NICK_MOD_LEVEL => '为了防止恶意广告，5级以上用户开放昵称修改。',

        //车型吧和品牌吧
        1060 => '距上次修改车型小于30天，目前不能修改车型',
        1061 => '不能退出自己的车型车轮会和车型品牌车轮会',
        self::RJ_ERR_CHANGE_CARCARD => '该汽车名片已认证，如需修改车型，请删除该汽车名片后，重新提交申请',
        self::RJ_ERR_NO_DEL_CARCARD => '您没有多个汽车名片，不能删除',
        self::RJ_ERR_CARCARD_DEL_NOT_SELF => '只能操作自己的汽车名片！',
        1065 => '该汽车名片已认证，如需修改车型，请删除该汽车名片后，重新提交申请',
        1066 => '该汽车名片已认证，无法修改车型',

        1070 => '修改失败，请升级到1.3及以上版本',

        //精选话题
        1080 => '此话题已被推荐',
        1081 => '无权操作',
        1082 => '每天最多加精10次，明天再设置吧',

        //删除自己的贴子
        1090 => '不能删除他人的话题',
        1091 => '不能删除回复数很多的话题',
        1092 => '不能删除他人的回复',
        1093 => '发布30分钟后的话题不能删除',
        1094 => '发布30分钟后的回复不能删除',
        1095 => '发布30分钟后的话题不能编辑',
        1096 => '该话题不能编辑', //不能编辑管理员的话题
        1097 => '你已经赞过该回复',
        1098 => '发布30分钟后的回复不能编辑',

        2001 => '必须填写标题',
        2002 => '必须填写地址',
        2003 => '必须填写价钱',
        2004 => '必须填写收费类型',
        2005 => '必须填写场地类型',
        2006 => '必须填写停车场ID',
        2007 => '必须填写说明',
        2008 => '必须填写经纬度',
        2009 => '每个人只能针对一个停车位发表一次评论',
        2010 => '每个人只能对同一条评论点击一次有用',

        2011 => '必须填写标题',
        2012 => '必须填写地址',
        2013 => '必须填写价钱',
        2014 => '必须填写收费类型',
        2015 => '必须填写场地类型',
        2016 => '必须填写加油站ID',
        2017 => '必须填写说明',
        2018 => '必须填写经纬度',
        2019 => '该用户被管理员全局封印，不能解封',

        //任务
        2300 => '未完成任务，不能领取奖励',
        2301 => '不能重复领取任务奖励',

        //语音
        2500 => '升到%d级就可以发送语音了，赶快升级吧',

        //通讯录，好友
        2700 => '设备号（device）必须存在',
        2701 => '无有效的DATA数据',
        2702 => '你不能添加自己为好友',
        2703 => '你最多可以添加500名好友',
        2704 => '你最多可以拉黑500名用户',
        2705 => '你已被对方列入黑名单，无法回复或引用对方的话题',

        //im
        2800 => '不允许被访问的IP',

        //待创建吧 加油
        2900 => '每日只能为10个创建中的车轮会支持',
        2901 => '此车轮会不是待创建车轮会，不能支持',
        2902 => '最多可添加5个友情车轮会',
        2903 => '此车轮会已设置为友情车轮会',
        2904 => '没有关联此车轮会，不用取消关联',
        2905 => '此车轮会创建失败',
        2906 => '此车轮会已经创建成功',
        2907 => '请先选择一个友情车轮会',
        2908 => '24小时内只允许创建一个车轮会',
        2909 => '名称重复',	//与待创建车轮会名称重复

        //给吧主投票
        3000 => '只有本会成员才能投票，是否加入',
        3001 => '只能给会长投票',
        3002 => '只能给候选会长投票',
        3003 => '此车轮会没有会长',

        //赞帖子
        3100 => '已经赞过此话题',
        3101 => '没有赞过此话题，不能取消赞',

        //亲 抱 握手
        3200 => '已经喜欢过，不要重复操作',
        3201 => '已经微笑过，不要重复操作',
        3202 => '已经握手过，不要重复操作',
        3203 => '不能对自己操作',
        3204 => '未加入此车轮会，不能操作',

        //短信
        3300 => '验证码失效，请重新获取',

        //吧
        3400 => '会长不能退出车轮会，如要退出，请先申请卸任会长',
        3401 => '你已提交申请，请勿重复提交',
        3402 => '每个车轮会每天仅可以发一条车轮会消息',
        3403 => '修改成功',
        3404 => '请使用2.9.6新版本创建车轮会，安卓版本可以在各大应用商店升级，iOS版本正在审核中。',
        3405 => '您在7日内提交的会长申请未通过审核，请一周后再提交',

        //副会长
        3410 => '副会长必须是车轮会会员',
        3411 => '最多设置5个副会长',
        3412 => '已经是此车轮会的副会长',
        3413 => '不是副会长',
        3414 => '你已经是会长，不能把自己设为副会长',

        //认证吧
        3430 => '非认证车轮会不能执行此操作',
        3431 => '加入此车轮会请先去申请',
        3432 => '不需要申请',
        3433 => '您没有权限操作',

        //取消会长申请
        3440 => '未申请会长',

        //申请加入车轮会
        3450 => '此车友加入车轮会数量已达上限',
        3451 => '你加入的车轮会数量已达上限',

        //会长上下任
        3452 => '您不在参与竞选名单内',

        3460 => '副会长人数达到上限',
        3461 => '请设置密码',
        3462 => '此消息已处理',
        3463 => '名称不能为空',
        3464 => '此车轮会未开启闲聊区',
        3465 => '已经移动到闲聊区,请不要重复操作',
        3466 => '已经移出闲聊区,请不要重复操作',
        3467 => '车轮会头像不能为空',

        self::RJ_ERR_TOO_MANY_PASSWORD_FAIL => '密码错误超过6次,请30分钟后再登录',

        //话题标签
        3470 => '最多添加50个标签',
        3471 => '不存在这个标签',
        3472 => '标签不能为空',
        3473 => '标签长度不能超过4个字',
        3474 => '最多勾选20个标签',
        3475 => '标签包含敏感关键字',

        3480 => '不是当前车轮会的话题',

        3490 => '匿名车轮会不能发起活动哦~',
        3491 => '匿名车轮会不能发问答哦~',
        3492 => '新用户还不能在这里发言哦~',
        //
        3510 => '含有敏感词汇，不允许创建',

        //会号
        3520 => '会号长度不允许减小',
        3521 => '会号金额不能超过20种',
        3522 => '此会号已发放或已添加',
        3523 => '单次最多可添加%d个会号',
        3524 => '请先设置会号长度和前缀',
        3525 => '不允许超过设置的会号长度',
        3526 => '会号长度不能大于6位',
        3527 => '此会号已被会长删除',
        3528 => '有车友刚刚申请了此号码，请重新选择',
        3529 => '此会号已分配给其他车友',
        3530 => '你不是此车轮会成员',
        3531 => '已有会号，如要修改会号请联系会长',

        //群组
        3600 => '群名称长度限定在2~10个字之间',
        3601 => '群简介长度限定在4~150个字之间',
        3602 => '此车轮会已经存在专属群',
        3603 => '你不是车轮会会长，无权创建专属群',
        3604 => '等级不足，无权创建群组',
        3605 => '当前条件能创建%d个群组',
        3606 => '不存在此群组',
        3607 => '已经是此群组成员',
        3608 => '群成员已达到上限',
        3609 => '车友已达到加入群组上限',
        3610 => '包含非群组成员',
        3611 => '加入请先申请',
        3612 => '群组等级只能升级',
        3613 => '此等级的群数量已达到上限',
        3614 => '没有找到申请记录',
        3615 => '已经加入此群',
        3616 => '此申请已经处理过',
        3617 => '你不是这个群的群主',
        3618 => '每个群组每天只能选择一个车轮会招募',
        3619 => '不是此车轮会成员',
        3620 => '已是最新信息',
        3621 => '你已达到加入群组上限',
        3622 => '你已经提交加入申请，请等待群主审核',
        3623 => '此列表只有群内成员可见',
        3624 => '群主不能退群',
        3625 => '查看群成员信息失败',
        3626 => '设置群昵称失败',
        3627 => '设置群昵称失败',
        3628 => '设置群管理员失败',
        3629 => '设置群管理员失败',
        3630 => '获取群成员信息失败',
        3631 => '您无权限进行此操作',
        3632 => '邀请失败',
        3633 => '管理员数量超过限制',
        3634 => '加入群组失败',
        3635 => '没有找到邀请记录',
        3636 => '此邀请已经处理过',
        3637 => '推荐失败',
        3638 => '操作失败',
        3639 => '推荐群组数量超过上限',
        3640 => '社区新人交流群禁止申请加入',

        //排名
        4000 => '你目前没有排名，赶紧去和车友讨论话题吧!',

        //资讯号
        4100 => '没有此资讯号',
        4101 => '没有找到资讯',

        //车主认证
        4120 => '准车主不支持认证，请选择车型',
        4121 => '请先上传行驶证后再提交',
        4122 => '请先绑定手机后再提交',
        self::RJ_ERR_AUTH_HASAPPLY => '已经申请，请不要重复申请',
        4124 => '已经是认证用户',
        4125 => '认证用户每个群组每天只能选择二个车轮会招募',
        4126 => '你暂时不能申请认证',
        4127 => '认证车主才能申请会长',
        self::RJ_ERR_AUTH_TOO_MANY => '第一辆车认证审核中，请审核通过后再添加新车',
        self::RJ_ERR_AUTH_NO_IMAGE => '图片URL不能为空',
        self::RJ_ERR_AUTH_CARTYPE_HAS_AUTH => '您申请的车型已经认证过了！',
        self::RJ_ERR_USERCARD_HAS_APPLY => '你已有一辆车在申请认证，暂不能修改车型！',
        self::RJ_ERR_USERCARD_HAS_APPLY_NODEL => '正在申请认证，不能删除车型！',
        self::RJ_ERR_USERCARD_NOT_EXIST => '汽车名片不存在！',
        self::RJ_ERR_USERCARD_HAS_OTHER_UNAUTH => '存在其他未认证车型，不能修改车型！',
        self::RJ_ERR_USERCARD_CARTYPE_NO_EMPTY => '汽车名片不能设置为准车主！',

        //活动
        4140 => '只能创建三个未过期活动',
        4141 => '开始时间不能大于结束时间',
        4142 => '没有找到指定的活动',
        4143 => '只能修改未开始的活动',
        4144 => '活动开始时间太久',
        4145 => '请先设置开始时间',
        4146 => '结束时间太久了',
        4147 => '只能删除未开始的活动',
        4148 => '不能加入活动群',
        4149 => '不能解散活动群',
        4150 => '活动群不能升级',
        4151 => '活动群不能进行此项操作',
        4152 => '活动已经结束',
        4153 => '活动人数已满',
        4154 => '加入的活动已达上限',
        4155 => '已经加入此活动',
        4156 => '你不是活动发起人',
        4157 => '你的附近没有车友',
        4158 => '没有加入此活动',
        4159 => '创建人不能退出',
        4160 => '请填写操作原因',
        4161 => '操作原因不要超过30个字',
        4162 => '活动已经结束',
        4163 => '活动开始时间不能小于当前时间',
        4164 => '活动标题不能超过20个字',
        4165 => '活动内容不能少于20个字',
        4166 => '你还不是认证车主，发动此大招需花费100车轮币(认证车主免费)，是否继续?',
        self::RJ_ERR_ACT2_CITY_FORUM_ONLY => '只有城市车轮会才能发布活动',
        self::RJ_ERR_ACT2_NEED_GROUP => '发布活动需要选择群组',
        self::RJ_ERR_ACT2_CANNOT_SWITCH => '该帖子不能转为活动帖',
        self::RJ_ERR_ACT2_GROUP_NO_OWNER => '用户不是群主',
        self::RJ_ERR_ACT2_ALREADY => '已经是活动贴',
        self::RJ_ERR_ACT2_OLD_VERSION => '版本过老，请更新到最新版本',

        //
        4180 => '你的账号已被冻结，不能登录车轮',

        4190 => '活动最多不能超过8张',
        4191 => '您已经点赞过，不能重新点赞了！',
        4192 => '今天已经点赞过了，请明天再来！',
        self::RJ_ERR_USER_ADMIRE_DAY_LIMIT => '今天已经达到上限，请明天再来！',

        4200 => '不能解除管理员封印的用户',
        4210 => '该手机号已被封禁的用户占用了',
        4300 => 'poi信息不完整',

        4400 => '不存在此车型',

        //身份
        4500 => '设置的身份数量超过限制',
        4501 => '不能设置荣誉身份',
        4502 => '该身份已经通过认证',
        4503 => '之前的申请还在审核状态,请不要重复申请',
        4504 => '身份已经设置过了',
        4505 => '请选择身份',
        4506 => '该身份不可认证',
        4507 => '没有该身份的认证申请',
        4508 => '不能取消已经认证的申请',
        4509 => '不能取消已经拒绝的申请',

        //
        4600 => '该话题已经被设置为精华，请不要重复设置',

        4700 => '车牌号为空，请重新尝试',
        4701 => '图片上传错误，车牌扫描记录不存在',
        4702 => '车牌扫描记录增加失败',
        4703 => '车牌扫描记录更新失败',
        4704 => '车牌扫描记录ID为空',
        4705 => '提交失败，请确认信息填写完整',
        4706 => '实物中奖信息补充失败',
        4707 => '通缉车主失败',
        4708 => '通缉数量已经达到上限',
        4709 => '通缉悬赏必须高于当前悬赏',
        4710 => '揭榜错误',
        4711 => '您当前车轮币不足',

        4800 => '汽车名片设置失败',
        4801 => '汽车名片设置失败',
        4802 => '提交失败',
        4803 => '您已经表达过咯',
        4804 => '您没有权限修改已认证名片车型',
        4805 => '搭讪失败',
        4806 => '汽车名片设置失败',
        4807 => '用户已有汽车名片不再引导',
        4808 => '一周只引导一次',
        4809 => '该车牌已被他人绑定，如需找回，请继续完成该车牌认证。',
        4810 => '当前汽车名片状态无法修改',
        4811 => '当前已经有汽车名片，无需完善',
        4812 => '该车牌号与申诉的车牌号不符，请重新确认车牌号后，再申请认证',

        4900 => '挪车失败',
        4901 => '挪车失败',
        4902 => '一天最多发送3次挪车信息哦！',
        4903 => '操作失败',
        4904 => '操作失败',
        4905 => '挪车车轮币扣减失败',
        4906 => '未查找到车主手机号',



        5000 => '您已经绑定过了！',
        5001 => '微信已经被其他用户绑定，请联系客服',
        5002 => '您已经绑定了其他微信账号，请联系客服',

        5100 => '购买失败，请稍后再试',
        5101 => '装配的配件未购买',
        5102 => '装配的汽车与配件不匹配',
        5103 => '装配失败',
        5104 => '无效的兑换码',
        5105 => '兑换失败',
        5106 => '上传分享图片失败',
        5107 => '不需要升级',

        5200 => '你本周申请次数已用完，请下周再来！',
        5201 => '你提交的申请正在审核中。',
        5202 => '你已在榜上，再接再厉哦！',
        5203 => '只有认证用户才能申请上榜',
        5204 => '爱车照片少于3张不能申请上榜',
        5205 => '申请豪车的用户不符合要求',

        5300 => '超出留言置顶上线',

        5400 => '170号码不能注册',

        5500 => '该车贴已经被绑定过了',
        5501 => '你已经绑定过其他车贴了,请解绑后再重新绑定!',
        5502 => '你的账号目前没有绑定车贴,请绑定后再进行解绑操作',
        5503 => '无效的车贴',
        5505 => '车轮币不足，请减少面值或份数',
        5506 => '每次最多生成100份红包',
        5507 => '每天最多生成1000份红包',
        5508 => '出错了,act_id没有注册',

        5504 => '您的车轮会置顶帖数量超出限制，取消一些旧帖的置顶后才能继续进行置顶操作',

        5509 => '你还没有进行微信授权,或者授权已经过期,请重新授权',
        5510 => '手机号码已经被使用',
        5511 => '你已经发布过回家路线了,请不要重复发布',
        5512 => '请绑定手机号后,再来参加该活动!',
        5513 => '你还没点亮过回家路线',

        5530 => '已经参加过抽奖啦',
        5531 => '抽奖需要填写手机号',
        5532 => '奖品不够拉，请稍后再抽！',
        5533 => '已经抽奖过一次，分享可增加一次！',


        5600 => '网络繁忙，请稍后再试',

        5700 => '获取奖品失败',
        5701 => '分享不能重复领取',
        5702 => '不能分享他人奖品',

        5800 => '网络繁忙，请稍后再试',

        5900 => '获取金融结构列表失败',
        5901 => '提交贷款订单失败',
        5902 => '同步用户关注失败',
        5903 => '您今天提交了太多申请，请明天再试',
        5904 => '您今天提交了太多订单，请明天再试',
        5905 => '您已提交订单，请耐心等候处理',
        5906 => '关注失败',
        5907 => '取消关注失败',
        5908 => '已经关注，请勿重复关注',
        5909 => '请输入合法的姓名,中文或者字母',
        5910 => '手机号码格式错误',

        5950 => '你今天还没开始路线',
        5951 => '你今天已经开始路线了,请不要重复操作',
        5952 => '你已经结束过路线了,请不要重复操作',

        6000 => '选项超过10个,请重新设置',

        6001 => '发动机号不能为空',
        6002 => '车架号不能为空',
        6003 => '注册时间不能为空',
        6004 => '您申请的车牌号已经被认证过了!',
        6005 => '对不起,此类型的帖子不允许编辑!',
        6006 => '尊敬的用户,您不能改变帖子类型!',
        6007 => '尊敬的用户,您已经达到上限!',
        6008 => '尊敬的用户,兑换码系统正在维护,请耐心等待...',

    );

    var $data = array ();

    public $success = true;
    public $errCode = 1;

    function set_data($name, $info) {
        $this->data [$name] = $info;
    }

    function success($ar = array()) {
        $ci = get_instance ();

        if (!is_array($ar)) {
            tool::debugError((string)$ar);
            return ;
        }

        $ar = array (
                'code' => 1
            ) + $ar;

        if (isset ( $ar ['data'] )) {
            if (is_array ( $ar ['data'] )) {
                $ar ['data'] += $this->data;
            }
        } else
            $ar ['data'] = $this->data;

        #$this->getDB(self::Table)_log ();
        $this->success = true;
        echo json_encode_nostring($this->convert_to_https($this->del_empty_array($ar)));
        if (is_callable(array($ci, '__afterRequest')))
        {
            $ci->__afterRequest();
        }
        exit();
    }

    function output($error_code, $data = array()) {
        $ci = get_instance ();

        $params = func_get_args ();
        #_fb ( $params, '$params' );
        $params [0] = self::$errMsg [$error_code];
        $msg = call_user_func_array ( 'sprintf', $params );
        #$this->getDB(self::Table)_log ();
        $r = array (
            'code' => $error_code,
            'msg' => $msg
        );
        $data && is_array ( $data ) && $r ['data'] = $data;
        $this->success = false;
        $this->errCode = $error_code;
        echo json_encode_nostring($this->convert_to_https($this->del_empty_array($r)));
        if (is_callable(array($ci, '__afterRequest')))
        {
            $ci->__afterRequest();
        }
        exit();
    }

    /**
     * 自定义错误信息
     */
    public function outputMsg($error_code, $msg)
    {
        $ci = get_instance ();
        $r = array (
            'code' => $error_code,
            'msg' => $msg
        );
        $this->success = false;
        $this->errCode = $error_code;
        echo json_encode_nostring($this->del_empty_array($r));
        if (is_callable(array($ci, '__afterRequest')))
        {
            $ci->__afterRequest();
        }
        exit();
    }
    /**
     * 自定义错误信息
     */
    public function quit()
    {
        $ci = get_instance ();

        if (is_callable(array($ci, '__afterRequest')))
        {
            $ci->__afterRequest();
        }
        exit();
    }

    /**
     *
     * @return returnjson
     */
    static function getInstance()
    {
        $ci = get_instance();
        $var = __CLASS__;
        return $ci->$var;
    }

    private function del_empty_array($ar) {
        $is_array = - 1;
        $is_del = false;
        foreach ( $ar as $k => $v ) {
            if ($is_array !== false) {
                if ($k !== $is_array + 1) {
                    $is_array = false;
                } else {
                    $is_array = $k;
                }
            }
            if ($v === array () || $v === null) {
                unset ( $ar [$k] );
                $is_del = true;
            } elseif (is_array ( $v )) {
                $r = $this->del_empty_array ( $v );
                if ($r) {
                    $ar [$k] = $r;
                } else {
                    unset ( $ar [$k] );
                    $is_del = true;
                }
            }
        }
        if ($is_array && $is_del) {
            $ar = array_values ( $ar );
        }
        return $ar;
    }

    private function db_log() {
        $ci = get_instance ();
        $queries = array ();
        if (! $ci->db || ! $ci->config->config ['log_threshold'])
            return;
        foreach ( $ci->db->queries as $query ) {
            if (preg_match ( "#^\s*(select)#is", $query )) {
                $explain = $ci->db->query ( "explain $query" )->row_array ();
                if (! $explain ['key'] && $explain ['rows'] !== null) {
                    $str = '';
                    foreach ( $explain as $k => $v )
                        concat ( $str, " $k=$v " );
                    $query .= "(" . ($explain ['possible_keys'] ? "NO USE KEY" : "NO KEY") . ": $str)";
                }
            }
            $queries [] = str_replace ( array (
                "\r",
                "\n"
            ), " ", $query );
        }
        log_message ( 'error', 'All query(URL:' . $_SERVER ['REQUEST_URI'] . ',POST:' . print_r ( $_POST, true ) . '): ' . print_r ( $queries, true ) );
    }

    static function get_code_string($code, $msg = '') {
        return sprintf ( self::$errMsg [$code], $msg );
    }

    static function checkCodeExists($code)
    {
        return isset(self::$errMsg [$code])?1:0;
    }

    private function convert_to_https($ar) {
        $verList = array(
            'chelun' => '3.4.5',
            'queryviolations' => '6.2.0',
        );
        if(!$this->checkVersion($verList)){
            $new_ar = $this->http_to_https($ar);
        }else{
            $new_ar = $ar;
        }
        return $new_ar;
    }

    private function http_to_https($ar, $last_key = '') {
        $new_ar = array();
        foreach ( $ar as $k => $v ) {
            $new_key = $this->replace_to_https($k);
            if (!empty($v) && !($k == 'content_url' && $last_key == 'info')){
                if (is_array ( $v ) ) {
                    $r = $this->http_to_https ( $v , $k);
                    $new_ar [$new_key] = $r;
                }else{
                    $new_ar [$new_key] = $this->replace_to_https($v);
                }
            }else{
                $new_ar [$new_key] = $v;
            }
        }
        return $new_ar;
    }

    private function replace_to_https($str){
        if ($this->contain_http($str) && !$this->in_white_list($str)) {
            return str_replace('http://','https://',$str);
        }
        return $str;
    }

    private function contain_http($str){
        if(strpos($str,'http://') !== false){
            return true;
        }
        return false;
    }

    private function in_white_list($str){
        $white_lists = CloudConfig::get('chelun/http_white_list');
        foreach($white_lists as $white_list){
            if(strpos($str,$white_list) !== false){
                return true;
            }
        }
        return false;
    }

    /**
     * 检查根据限制条件检查版本
     * 限制返回true 不限制返回false
     *
     * @param $list
     * @return bool
     */
    function checkVersion($list)
    {
        $input = new CI_Input();
        $cApp = strtolower($input->get_post('app'));
        $appVersion = trim ( $input->get_post ( 'appVersion' ) );
        foreach ($list as $app => $version) {
            if (tool::ifNewApv($appVersion, $version) && $app == $cApp) {
                return false;
            } else {
                continue;
            }
        }
        return true;
    }
}
 

