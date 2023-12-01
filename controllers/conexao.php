<?php
    try {
        $username = 'id21479697_evelin';
        $password = 'Abcde34@';
        $conn = new PDO('mysql:host=localhost;dbname=id21479697_projeto', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>