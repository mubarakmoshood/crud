<?php
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
    }
    catch (PDOException $error)
    {
        echo 'Unable to connect to the database server.';
        exit();
    }
?>