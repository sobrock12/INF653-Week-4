<?php
require_once('database.php');

if(!isset($title)) {
    $title = '';
}

if(!isset($description)) {
    $description = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List - Add an Item</title>

</head>

<body>

<h1>Add an item to the to do list</h1>

    <div id = 'addForm'>

        <form method="POST" action="additem.php">

            
            <div>
                <label>Title: </label><br>

                <input type="text" name="title">

            </div>

            <div>

                <label>Description: </label><br>

                <textarea name="description"></textarea>

            </div>

            <input type="submit" value="Submit">

        </form>

    </div>

<?php

    if(isset($_POST['title'])) {
        $title = htmlentities($_POST['title']);
    }

    if(isset($_POST['description'])) {
        $description = htmlentities($_POST['description']);
    }

?>

</body>

</html>