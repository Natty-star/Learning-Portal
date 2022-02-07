<?php
/* */
require_once ("class/config.php");
require_once ("class/db.php");
$headers = apache_request_headers();
$mobile="";
$turnwifioff=false;
$onDesktop=false;

$device="";

foreach ($headers as $header => $value) {
    //echo "$header: $value <br />\n";
    if($header=="Msisdn"){
        $mobile=$value;
    }
    if($header=="User-Agent" and strpos($value, 'Mobile')){
        $device="Mobile";
    }

}
     if(isset($_GET["phone"]))
   $mobile=$_GET["phone"];

$db = new db();
//$sql = "INSERT INTO `varification_code_message`(`id`, `varification`) VALUES ( '".$mobile."', '0000');";
$sql2 =  "INSERT INTO `unsubscribers` (`phone_number`, `date`, `service_id`, `id`) VALUES ('" .$mobile. "', '" . date("Y-m-d") . "', '0122072000006508', '0122072000006508" . $mobile . "'); ";
$sql3 = "DELETE FROM `subscribers` WHERE id='0122072000006508" .$mobile. "'";
//$db->executeQuery($sql);
$db->executeQuery($sql2);
$db->executeQuery($sql3);

 //header("Location: ".MAINURL);

header("Location: sms:6414?&body=STOP");
?>
