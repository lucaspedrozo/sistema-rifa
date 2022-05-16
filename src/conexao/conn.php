<?php

    $hostname = "sql102.epizy.com";
    $dbname = "epiz_31454632_rifa";
    $username = "epiz_31454632";
    $password = "0wDpvJ3s9MJ";

    try {
        $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Conecao';
    } catch (PDOException $e) {
        echo 'Error: '.$e->getMessage();
    }