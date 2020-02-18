<?php 
    $dsn = 'mysql:host=localhost;dbname=todolist';
    $username = 'root';
    $password = '12345';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>

