<?php
require_once ("class/config.php");
require_once ("class/db.php");
if(isset($_GET['phone'])) {
    $db = new db();
    $query = "INSERT INTO `subscribers_joke` (`phone_number`, `date`, `service_id`, `id`) VALUES ('" . $_GET['phone'] . "', '" . date("Y-m-d") . "', '0122072000006508', '0122072000006508" . $_GET['phone'] . "');";

    $db->executeQuery($query);
    echo $query;
    header("Location: ".JOKES);

}
?>