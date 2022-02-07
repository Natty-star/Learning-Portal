<?php
require_once ("class/config.php");
require_once ("class/db.php");
if(isset($_GET['phone'])) {
    $db = new db();
    //$query = "INSERT INTO `subscribers` (`phone_number`, `date`, `service_id`, `id`) VALUES ('" . $_GET['phone'] . "', now(), '0122072000006508', '0122072000006508" . $_GET['phone'] . "');";

    //$db->executeQuery($query);
	
	$query2="INSERT INTO `subscription_confirmation_message` (`id`) VALUES ('0122072000006508".$_GET['phone']."');";
            $db->executeQuery($query2);
   // echo $query;
    header("Location: ".CONFIRM);

}
?>