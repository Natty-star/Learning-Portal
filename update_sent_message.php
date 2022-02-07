<?php
include_once "class/db.php";
$db = new db();

$query=file_get_contents('php://input');
if($db->executeQuery($query))
echo "Updated";
else
echo "Not Updated";

?>