<?php
include_once './class/config.php';
include_once 'class/db.php';

  $db = new db();
  $results = $db->fetchAll("SELECT * FROM `subscribers` ORDER BY `date` DESC");
    for($j=0;$j<sizeof($results);$j++)
    {   
        echo $results[$j]["phone_number"]."<br>";
    }
  ?>
