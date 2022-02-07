<?php
include_once ("class/config.php");
include_once ("class/db.php");
$json_result="";
$value_exist=false;
$db = new db();
$query="SELECT * FROM `varification_code_message`;";
$result=$db->fetchAll($query);
$counter=count($result);
//echo "test";
for($j=0;$j<$counter;$j++){
    
    if(strlen($result[$j]["id"])==12){
       
        //echo $result[$j]["id"].':'.$result[$j]["varification"].',';

        $json_result.='"'. $result[$j]["id"].'" : "'.$result[$j]["varification"].'",';
        $value_exist=true;
       

    }
}

$query="SELECT * FROM `subscription_confirmation_message`;";
$result=$db->fetchAll($query);
$counter=count($result);
for($j=0;$j<$counter;$j++){
  
    if(strlen($result[$j]["id"])==28){
        $json_result.='"'. $result[$j]["id"].'" : "SUB",';
        //echo $result[$j]["id"].':'.$result[$j]["id"].',';
        $value_exist=true;
       
    }
}
if($value_exist){
echo "{".rtrim($json_result, ",")."}";
}
$query2="DELETE FROM `subscription_confirmation_message`;";
$db->executeQuery($query2);
$query2="DELETE FROM `varification_code_message`;";
$db->executeQuery($query2);
?>