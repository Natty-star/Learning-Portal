<?php
require_once ("class/config.php");
require_once ("class/db.php");
echo $_POST['phone'];
if(isset($_POST['phone']) and isset($_POST['code'])){
    $sql="SELECT * FROM `confirmation` WHERE `phone_number` LIKE '".$_POST['phone']."' AND `varification` LIKE '".$_POST['code']."'";
    $db = new db();
    if($db->exist($sql)){
        $query="INSERT INTO `subscribers_joke` (`phone_number`, `date`, `service_id`, `id`) VALUES ('".$_POST['phone']."', '".date("Y-m-d")."', '0122072000006508', '0122072000006508".$_POST['phone']."');";
        echo $query;
        if($db->executeQuery($query))
            echo "data inserted".date("YYYY-MM-DD");
        else
            echo "data not inserted";

        echo "red to index";
       header("Location: ".JOKES);
    }else
    {
       header("Location: ".CONFIRM."?err=".$_POST['phone']);
 echo "red to err";
    }

}
else {
   header("Location: " . SUBSCRIBE);
    echo "red to sub";
}
?>