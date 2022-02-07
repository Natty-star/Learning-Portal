<?php
require_once ("class/config.php");
require_once ("class/db.php");
echo $_POST['phone'];
if(isset($_POST['phone']) and isset($_POST['code'])){
    $sql="SELECT * FROM `confirmation` WHERE `phone_number` = '2519".$_POST['phone']."' AND `varification` = '".$_POST['code']."'";

    $db = new db();
    if($db->exist($sql)){
		
        $query="INSERT INTO `subscribers` (`phone_number`, `date`, `service_id`, `id`) VALUES ('2519".$_POST['phone']."', '".date("Y-m-d")."', '0122072000006508', '01220720000065082519".$_POST['phone']."');";
      $db->executeQuery($query);
		
		$query2="INSERT INTO `subscription_confirmation_message` (`id`) VALUES ('01220720000065082519".$_POST['phone']."');";
            $db->executeQuery($query2);

        echo "red to index";
       header("Location: ".'success_page.php?=2519'.$_POST['phone']);
    }else
    {
       header("Location: ".CONFIRM."?err=2519".$_POST['phone']);
 echo "red to err";
    }

}
else {
   header("Location: " . SUBSCRIBE);
    echo "red to sub";
}
?>