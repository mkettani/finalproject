<?php
    $dsn = 'mysql:host=localhost;dbname=tech_support';
    $username = 'mk688';
    $password = '2oi6lUDsF';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
