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
requests::set_referer("https://www.amazon.com/gp/profile/onboard");
requests::set_header("Origin", "https://www.amazon.com");
requests::set_header("Host", "www.amazon.com");
requests::set_header("Accept", "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8");
requests::set_header("Accept-Encoding", "gzip, deflate, sdch, br");
requests::set_header("Accept-Language", "zh-CN,zh;q=0.8");
requests::set_header("Connection", "keep-alive");
requests::set_header("Upgrade-Insecure-Requests", "1");

//requests::set_cookie("session-id","162-8237491-9025155");
//requests::set_cookie("session-id-time","2082787201l");
//requests::set_cookie("session-id-token","BJxpz8ufaMksSI9u1fx4ARn3eTL7aqtGBGWgmSWBVz1BJMBC9F8Q6LL5bzk870v2NOHeHzLALSf");

$proxies = array(
    'http' => '63.149.98.170:80',
    'http' => '63.149.98.23:80',
    'http' => '63.149.98.43:80',
    'http' => '150.176.182.31:80',
);
requests::set_proxies($proxies);
$ips = array(
    '192.168.1.2',
    '192.168.1.3',
    '192.168.1.4',
);
requests::set_client_ips($ips);
$cookies = "x-wl-uid=1gyRekscuRkEP8UrfDiuQ6UDhkIQkY5IEnqZDdJ9yn9+YSanp1zg0VhPQl82K7TpfgaBF/X5WIynhknWYlmzPLWwPjA13OsA00ocCDYl6GCUEXfZ7rLOmXivrwCfB01iepojaH78wY28=; skin=noskin; JSESSIONID=4A3DF916B8EE3BE403945AE6A1E94DFF; a-ogbcbff=1; session-token=\"qiJs0MHXRyOfI9mEIZcvyYFsJc/VafJIL7pO/PfufcyHrlWIzIAmDhO/tOVhjUgsHWBOyhrdQMszvJ/0qyx5SorVYDZpFjbYTM9RBb9gf18fPUCgBvv5YsIbERald72NjZozMjLosHuYyxjqWnaY1hrmXGsx0fUrJ+qpYr3U5XPAsBrCkSsoWCReEG1eV9gyUohXKfvRvxzaBAfiRZN7UtjjjOtDqORpR+OQQvmMJnwfkaHxuOEcAdrUowObcupUcI24HM4FHwcgB0ASD1pKtA==\"; x-main=\"zPDrVmIuMdTBqmWCWmE3nq@wqbywnNH5PzB@pwhLumZbtttwKrVcvrCjlJHPMnRT\"; at-main=Atza|IwEBIN4jV0LTHhV2Y5oEugfLn8Jy2MSUPvPuXk9oQ7pZWJDtoR1PRSOjZM6ECYzGVw93GlYpi-4UfNmSa08S3J2FQAhGlXmEW2E1_77MaHJFT3CUJCkpAOAUNq4BrsO2sIvQYWLPCv2dbbryT77_cYdNwbDmBU0PQGcyiV8wLTNkUS7_LLp3yJ52UP3bXidfIQUkWXuplglYZsVovRauJ1NPb_HYO_Y6aLHzlpOHPhIuSz-wYBLKjx_2oe4XzPb89xEKtNO5teEZ1y-TE1qjNg53JREc9z-PWZaAYUFHEvIj-wDUtskusJJqpnX7y_5wr9UbUw_zDYOGUnHB7AtvmqYJPQdJ7Y9v27GlVKPAlm7la85nhss5xa2r3KkMcyAh5nHO03UPw-sU5XRPxhKeaw2JWh3U; sess-at-main=\"GFtZJkZfFuqZxZYyvXMGi3AzzyrObX0K4MiUvRJVfSI=\"; lc-main=en_US; ubid-main=168-1315087-0226709; session-id-time=2082787201l; session-id=157-9478919-0411448; csm-hit=XSVPMRXTMSNM13Y6M3MR+s-M2SJ66A93884GWE7FQ0W|1490087633182";
requests::set_cookies($cookies, 'www.amazon.com');
// 接下来我们来访问一个需要登录后才能看到的页面
$url = "https://www.amazon.com/xa/dealcontent/v2/GetDeals?nocache=1490091188616";
$params = "{\"requestMetadata\":{\"marketplaceID\":\"ATVPDKIKX0DER\",\"clientID\":\"goldbox_mobile_pc\",\"customerID\":\"A1XMZ7QJTR2K67\",\"sessionID\":\"157-9478919-0411448\"},\"dealTargets\":[{\"dealID\":\"0484eceb\"},{\"dealID\":\"0b5d5d45\"},{\"dealID\":\"10a5d997\"},{\"dealID\":\"13bdd35b\"},{\"dealID\":\"23c79194\"},{\"dealID\":\"2548e125\"},{\"dealID\":\"9e27d8da\"},{\"dealID\":\"a44c5f97\"},{\"dealID\":\"bb847237\"},{\"dealID\":\"c1501a58\"},{\"dealID\":\"d24f432b\"},{\"dealID\":\"f9c79a2a\"}],\"responseSize\":\"ALL\",\"itemResponseSize\":\"DEFAULT_WITH_PREEMPTIVE_LEAKING\",\"widgetContext\":{\"pageType\":\"GoldBox\",\"subPageType\":\"main\",\"deviceType\":\"pc\",\"refRID\":\"WTAMQWZYYAVEZB1K1Z7C\",\"widgetID\":\"af76a610-c28c-4f12-9308-ccc69eba596a\",\"slotName\":\"slot-3\"}}";

$html = requests::post($url,$params);
print_r($html);die;
$data = selector::select($html, "//*[@id='100_dealView_0']/div/div[2]/div/div[2]/div/span");
var_dump($data);die;

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