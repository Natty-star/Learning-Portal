<?php
include_once "./class/config.php";
include_once "./class/db.php";
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
 //$mobile="251911930202";

$sql="SELECT * FROM `subscribers` WHERE `phone_number` LIKE '$mobile'";
//echo $sql;
$self_server=$_SERVER['PHP_SELF'];

$db = new db();

if($mobile!="" and $db->exist($sql)){
    if(basename($_SERVER['PHP_SELF'])=="confirm.php" or basename($_SERVER['PHP_SELF'])=="subscribe.php")
        header("Location: ".MAINURL);
}else if(basename($_SERVER['PHP_SELF'])=="subscribe.php" and $mobile!=""){
    //normal subscribe


}else if(basename($_SERVER['PHP_SELF'])=="subscribe.php" and $mobile=="" and $device=="Mobile"){
    $turnwifioff=true;
}
else if(basename($_SERVER['PHP_SELF'])=="subscribe.php" and $mobile=="" and $device==""){
    $onDesktop=true;
}
else if(basename($_SERVER['PHP_SELF'])=="confirm.php" and $mobile==""){
    $onDesktop=true;
}
else if(basename($_SERVER['PHP_SELF'])=="confirm.php" and $mobile!=""){

}else
{
    header("Location: ".SUBSCRIBE);
   
}
$da=date('Y-m-d H:i:s');
$sql2="INSERT INTO `visit` (`device_type`, `date`) VALUES ('$mobile', '$da')";
//"INSERT INTO `visit`( `device_type`, `date`) VALUES ('$mobile',$da)";
   if($db->executeQuery($sql2))

?>