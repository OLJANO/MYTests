<?php

$db = new PDO("mysql=localhost;dbname=testtest",
        "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE,
        PDO:: ERRMODE_EXCEPTION);
        try {
            $querySTR = "CREATE TABLE users (id INTEGER
                    NOT NULL AUTJ_INCREMENT PRIMARY KEY,
                    name VARCHAR(100), email VARCHAR(150))";
                    $db->query($queryStr);
        } catch (PDOException $e) {
            echo $e->getMessage();

        }