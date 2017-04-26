<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=mk688';
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
