<?php
include_once ("class/config.php");
include_once ("class/db.php");

$json_array;
$i=0;
$db = new db();
$query="SELECT * FROM `varification_code_message`;";
$result=$db->fetchAll($query);
$counter=count($result);

for($j=0;$j<$counter;$j++){
    
    if(strlen($result[$j]["id"])==12){
       
        echo $result[$j]["id"].':'.$result[$j]["varification"].',';
      
        $i++;

    }
}

$query="SELECT * FROM `subscription_confirmation_message`;";
$result=$db->fetchAll($query);
$counter=count($result);
for($j=0;$j<$counter;$j++){
  
    if(strlen($result[$j]["id"])==28){
       
        echo $result[$j]["id"].':'.$result[$j]["id"].',';
        $i++;
    }
}

?>