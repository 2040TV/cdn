<?php
define('SYSTEM_ROOT', dirname(preg_replace('@\\(.*\\(.*$@', '', preg_replace('@\\(.*\\(.*$@', '', __FILE__))) . '/');
session_start();
date_default_timezone_set('Asia/Shanghai');
header('Content-Type: text/html; charset=UTF-8');
function getspider($useragent=''){
	if(CC_Defender==2)return false;
	if(!$useragent){$useragent = $_SERVER['HTTP_USER_AGENT'];}
$useragent=strtolower($useragent);
	if (strpos($useragent, 'baiduspider') !== false){return 'baiduspider';}
	if (strpos($useragent, 'googlebot') !== false){return 'googlebot';}
	if (strpos($useragent, 'soso') !== false){return 'soso';}
	if (strpos($useragent, 'bing') !== false){return 'bing';}
	if (strpos($useragent, 'yahoo') !== false){return 'yahoo';}
	if (strpos($useragent, 'sohu-search') !== false){return 'Sohubot';}
	if (strpos($useragent, 'sogou') !== false){return 'sogou';}
	if (strpos($useragent, 'youdaobot') !== false){return 'YoudaoBot';}
	if (strpos($useragent, 'yodaobot') !== false){return 'YodaoBot';}
	if (strpos($useragent, 'robozilla') !== false){return 'Robozilla';}
	if (strpos($useragent, 'msnbot') !== false){return 'msnbot';}
	if (strpos($useragent, 'lycos') !== false){return 'Lycos';}
	if (strpos($useragent, 'ia_archiver') !== false || strpos($useragent, 'iaarchiver') !== false){return 'alexa';}
	if (strpos($useragent, 'archive.org_bot') !== false){return 'Archive';} 
	if (strpos($useragent, 'robozilla') !== false){return 'Robozilla';} 
	if (strpos($useragent, 'sitebot') !== false){return 'SiteBot';} 
	if (strpos($useragent, 'mj12bot') !== false){return 'MJ12bot';} 
	if (strpos($useragent, 'gosospider') !== false){return 'gosospider';} 
	if (strpos($useragent, 'gigabot') !== false){return 'Gigabot';} 
	if (strpos($useragent, 'yrspider') !== false){return 'YRSpider';} 
	if (strpos($useragent, 'gigabot') !== false){return 'Gigabot';} 
	if (strpos($useragent, 'jikespider') !== false){return 'jikespider';} 
	if (strpos($useragent, 'addsugarspiderbot') !== false){return 'AddSugarSpiderBot';/*非常少*/} 
	if (strpos($useragent, 'testspider') !== false){return 'TestSpider';} 
	if (strpos($useragent, 'etaospider') !== false){return 'EtaoSpider';} 
	if (strpos($useragent, 'wangidspider') !== false){return 'WangIDSpider';} 
	if (strpos($useragent, 'foxspider') !== false){return 'FoxSpider';} 
	if (strpos($useragent, 'docomo') !== false){return 'DoCoMo';} 
	if (strpos($useragent, 'yandexbot') !== false){return 'YandexBot';} 
	if (strpos($useragent, 'ezooms') !== false){return 'Ezooms';/*个人*/} 
	if (strpos($useragent, 'sinaweibobot') !== false){return 'SinaWeiboBot';} 
	if (strpos($useragent, 'catchbot') !== false){return 'CatchBot';} 
	if (strpos($useragent, 'surveybot') !== false){return 'SurveyBot';} 
	if (strpos($useragent, 'dotbot') !== false){return 'DotBot';} 
	if (strpos($useragent, 'purebot') !== false){return 'Purebot';} 
	if (strpos($useragent, 'ccbot') !== false){return 'CCBot';} <?php
error_reporting(0); 
$pass= $_POST;
$sj = rand(100,999);
if (empty($_COOKIE["pass"])) {
	setcookie("pass",$sj, time()+7200);
	echo "<script language='JavaScript'> 
function myrefresh() 
{ 
window.location.reload(); 
} 
setTimeout('myrefresh()',10); //指定1秒刷新壹次 
</script>";
}
if($_COOKIE["zt"]!=="ok"){
      if($pass[pass]=="" || $pass[pass]!=$_COOKIE["pass"]) {
echo '
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>欢迎光临验证页</title>
   <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
   <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
   <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="/n.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="/n.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-4 center-block " style="float: none;">
  <br /><br /><br />
    <div class="widget">
<p></p>
    </div>

    <div class="block">
        <div class="block-title">
            <div class="block-options pull-right">
            <a href="../" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip">返回上页</a>
            </div>
            <h2><b>输入验证码继续访问</b></h2>
        </div>
          <form action="" method="post" role="form">
            <div class="input-group"><div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
              <input type="password" name="pass" class="form-control" required="required" placeholder="请输入验证码"/>
            </div><br/>
            <div class="form-group">
              <input type="submit" value="OK" class="btn btn-primary btn-block"/>
            </div>
<br><center><h2>验证码: '.$_COOKIE["pass"].'</h2></center>
</form>
    </div>
  </div>';
    die();
}else{
    setcookie("zt", "ok", time()+86400);
}
}else{
  	
}


?>
	if (strpos($useragent, 'mlbot') !== false){return 'MLBot';} 
	if (strpos($useragent, 'adsbot-google') !== false){return 'AdsBot-Google';}
	if (strpos($useragent, 'ahrefsbot') !== false){return 'AhrefsBot';}
	if (strpos($useragent, 'spbot') !== false){return 'spbot';}
	if (strpos($useragent, 'augustbot') !== false){return 'AugustBot';}
	return false;
}

if($_GET['rand'] && $_SESSION['rand_session']!=$_GET['rand']){
	@header('Content-Type: text/html; charset=UTF-8');
exit('<b>浏览器不支持COOKIE或者不正常访问！</b>');
}
if(!$_SESSION['rand_session'] && $nosecu!=true){
	if(!getspider()){
		$rand_session=md5(uniqid().rand(1,1000));
	$_SESSION['rand_session']=$rand_session;
		exit("<!DOCTYPE HTML>
		<html>
		<head>
		<meta charset=\"UTF-8\"/>
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />

		<title>安全检查中...</title>
	 <script> var i = 5; 
  var intervalid; 
  intervalid = setInterval(\"fun()\", 1000); 
function fun() { 
if (i == 0) { 
window.location.href = \"?{$_SERVER['QUERY_STRING']}&rand={$rand_session}\"; 
clearInterval(intervalid); 
} 
document.getElementById(\"mes\").innerHTML = i; 
i--; 
} 
</script> 
<style>
	html, body {width: 100%; height: 100%; margin: 0; padding: 0;}
    body {background-color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-size: 100%;}
    h1 {font-size: 1.5em; color: #404040; text-align: center;}
    p {font-size: 1em; color: #404040; text-align: center; margin: 10px 0 0 0;}
    #spinner {margin: 0 auto 30px auto; display: block;}
    .attribution {margin-top: 20px;}
  </style>
  </head>
<body>
  <table width=\"100%\" height=\"100%\" cellpadding=\"20\">
    <tr>
      <td align=\"center\" valign=\"middle\">
    <noscript><h2>请打开浏览器的javascript，然后刷新浏览器</h2></noscript>
  <h1><span data-translate=\"checking_browser\">浏览器安全检查中...</span></h1>
    <p data-translate=\"process_is_automatic\"></p>
    <p data-translate=\"allow_5_secs\">还剩 <span id=\"mes\">5</span> 秒</p>
  </div>
</div>
  </td>
    </tr>
</table></body></html>");}}
