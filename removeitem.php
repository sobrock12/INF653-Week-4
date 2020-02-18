<?php 
require_once('database.php');

$query = "DELETE FROM `todoitems` WHERE 'todoitems, ItemNum = {$_POST['ItemNum']}";

$statement = $db->prepare($query);
$statement->execute();
$statement->closeCursor();

include('index.php');

?>