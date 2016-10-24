<?php
// not real login information. nice try suckas
    $dsn = 'mysql:host=mysql.DOMAINNAME.com;dbname=NAME_OF_DATABASE';
    $username = 'username';
    $password = 'password';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
