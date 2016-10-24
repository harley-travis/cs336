<?php
    $dsn = 'mysql:host=mysql.rentercafe.com;dbname=rentercafe_database';
    $username = 'travistest';
    $password = 'welcome1234';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>