<?php
/**
 * Created by PhpStorm.
 * User: MinSongtao
 * Date: 2017/3/20
 * Time: 17:37
 */
error_reporting(E_ALL);
ini_set("memory_limit", "1024M");
require dirname(__FILE__).'/../core/init.php';

/* Do NOT delete this comment */
/* 不要删除这段注释 */
requests::set_useragent("Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.98 Safari/537.36");
requests::set_referer("https://www.amazon.com/ap/signin?_encoding=UTF8&openid.assoc_handle=usflex&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.mode=checkid_setup&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.ns.pape=http%3A%2F%2Fspecs.openid.net%2Fextensions%2Fpape%2F1.0&openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fgp%2Fyourstore%2Fcard%3Fie%3DUTF8%26ref_%3Dcust_rec_intestitial_signin");
requests::set_header("Origin", "https://www.amazon.com");
requests::set_header("Host", "www.amazon.com");
requests::set_header("Accept", "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8");
requests::set_header("Connection", "keep-alive");
requests::set_header("Upgrade-Insecure-Requests", "1");

requests::set_cookie("session-id","162-8237491-9025155");
requests::set_cookie("session-id-time","2082787201l");
requests::set_cookie("session-id-token","BJxpz8ufaMksSI9u1fx4ARn3eTL7aqtGBGWgmSWBVz1BJMBC9F8Q6LL5bzk870v2NOHeHzLALSf");

$proxies = array(
    'http' => '63.149.98.170:80',
    'http' => ' 63.149.98.23:80',
);
requests::set_proxies($proxies);
$ips = array(
    '192.168.1.2',
    '192.168.1.3',
    '192.168.1.4',
);
requests::set_client_ips($ips);
$cookies = "lc-main=en_US;x-wl-uid=1wz9SFgAimuHB2DZrNMl9xlptj0RxeMsSnnGcg/7lgNlloNxtyZwdRXEnZPuIPV3kBnog1Sc2+713y5su10sHM7zpUQW4uqxjHVbpDLPhhh4KQH4esWrwmA7ZKsT1WJ3/6237/EReIFg=; session-token=\"ei69+S53wJnVC8R0mxsPTqelDbLxxJIDU3ZUkC7WebDx6iTE2ostAUi8swKGri4AUM86GfEMZxSUc7VPNusOhLkJSFJTUhx+pjxJGKNL7fLUhIXHVsYSBz/iJ76MNGd+n5qQdt6sPTqDJStvUH1vtQPajO32TwlK1OyhwLmXH4o1iJdF6xyqVWSSGXOmHFR9p2DlTR4Cq/KwkzIY8lTb3xcFUc8A6aw6PZmdjP4fM5Y=\"; x-main=\"1WC7EvGcK?8MKNsE04YoqPefy?mt8C@wdSKNr40PIfCmtNVgBzuZk?H8q4mpv0tN\"; at-main=Atza|IwEBIFfTa6G5uEhqwaHYOvtiTetC6G7b-FWIWRI6iX_VROvrCskgzRs2tkK_gXrVtdhtmAQRd6h-OVr69pYdrSLaGyzAC_ki_NTAptu6OSjzrXZji2SjeuIX5cT6u5qYBRXWdKWarUteEZz8dL2MxmnrGfjy5OqVdefOdIvF2KqwxBUui8zPOqAxeKMMAohA3R_pTyN_f8c2jcqEQ7CF5Szc2AvliSNejZTGtaG20Deel_XdQKEoyn-PcNFK2LfWK4gJFF0gx2mvhekd_1EnYc6RQlYS-Tbw2C76nTqabSvqoHvx-dg6ZmjIZhzePIxXoa9Glo8LyN_Z0TdvipLxUYm2DB_vjXc9Sjd6U0U3LiRs2FRes7G2zxbaf-ZTdfLZfuB9ZEmhW6I4T0o9GDU8jrhhFhVS; sess-at-main=\"n/GncYvoNhYMBZRQAFFiOLnXBknONTtADKIWFkrpx4E=\"; ubid-main=159-4268398-1744220; session-id-time=2082787201l; session-id=165-8225912-5169055; csm-hit=CWEKE7PBPS9RHDCHY2JW+s-CWEKE7PBPS9RHDCHY2JW|1490017409160";
requests::set_cookies($cookies, 'www.amazon.com');
// 接下来我们来访问一个需要登录后才能看到的页面
$url = "https://www.amazon.com/gp/yourstore/home/ref=nav_cs_ys";
$html = requests::get($url);
echo $html;     // 可以看到登录后的页面，非常棒👍
die;

$login_url = "https://www.amazon.com/ap/signin";
// 提交的参数
$params = array(
    "email" => "936908163@qq.com",
    "password" => "200410min",
    "appActionToken" => "VOk5H6If1nEEMPmj2FxwRaqqWFlhMj3D",
    "appAction" => "SIGNIN",
    "pageId" => "ape:dXNmbGV4",
);
requests::set_useragent("Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.98 Safari/537.36");
requests::set_referer("https://www.amazon.com/ap/signin?_encoding=UTF8&openid.assoc_handle=usflex&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.mode=checkid_setup&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.ns.pape=http%3A%2F%2Fspecs.openid.net%2Fextensions%2Fpape%2F1.0&openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fgp%2Fyourstore%2Fcard%3Fie%3DUTF8%26ref_%3Dcust_rec_intestitial_signin");
requests::set_header("Origin", "https://www.amazon.com");
//requests::set_header("pageId", "ape:dXNmbGV4");
// 发送登录请求
requests::post($login_url, $params);
// 登录成功后本框架会把Cookie保存到www.waduanzi.com域名下，我们可以看看是否是已经收集到Cookie了
$cookies = requests::get_cookies("https://www.amazon.com");
print_r($cookies);  // 可以看到已经输出Cookie数组结构
die;
// requests对象自动收集Cookie，访问这个域名下的URL会自动带上
// 接下来我们来访问一个需要登录后才能看到的页面
$url = "http://www.waduanzi.com/member";
$html = requests::get($url);
echo $html;     // 可以看到登录后的页面，非常棒👍