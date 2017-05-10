<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=mk688';
    $username = 'mk688';
    $password = '2oi6lUDsF';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $db = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    
    function display_db_error($error_message) {
        global $app_path;
        include('../errors/database_error.php');
        exit();
    }
?>
