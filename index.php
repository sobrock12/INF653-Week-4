<?php
require_once('database.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List</title>

</head>

<style>
<?php include 'project4.css'; ?>
</style>

<body>

    <header><h1>To Do List</h1></header>

    <main>

        <?php


            $query = 'SELECT * FROM `todoitems`';
            $statement = $db->prepare($query);
            $statement->execute();
            $todoitems = $statement->fetchAll();
            $statement->closeCursor();

        ?>

    <?php foreach ($todoitems as $todoitem) : ?>
        <tr>
            <td><?php echo $todoitem['ItemNum']; ?></td>
            <td><?php echo $todoitem['Title']; ?></td>
            <td><?php echo $todoitem['Description']; ?></td>
            <td><form action='removeitem.php?ItemNum="<?php echo $todoitem['ItemNum']; ?>"' method="post">
            <input type="hidden" name="ItemNum" value="<?php echo $todoitem['ItemNum']; ?>">
            <input type="submit" name="submit" value="Delete">
    </form>
        </tr>
    <?php endforeach; ?>
    
<br>
        <?php

            $additem = 'additemform.php';


            if (!@$todoitem['ItemNum'] > 0) { 
               
                echo "<a href='$additem'>No to do list items exist yet. Click here to add an item.</a>";
            }
            else {
                echo "<a href='$additem'>Click here to add a new item to the list.</a>";
            }



        ?>

    </main>

</body>

</html>