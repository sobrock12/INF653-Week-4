<?php
//get data
$title = filter_input(INPUT_POST, 'title');

$description = filter_input(INPUT_POST, 'description');

require_once('database.php');

$query = 'INSERT INTO `todoitems`
(`Title`, `Description`) VALUES (:title, :description)';

$statement = $db->prepare($query);
$statement->bindValue(':title', $title);
$statement->bindValue(':description', $description);
$statement->execute();
$statement->closeCursor();

include('index.php');

?>

</body>

</html>