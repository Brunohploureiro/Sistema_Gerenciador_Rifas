<?php

$hostname = "sql102.epizy.com";
$database = "epiz_31454917_rifa";
$username = "epiz_31454917";
$password = "tyvw9mgQspJ3";

try {
    $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Conexão realizada com sucesso!;
} catch (PDOException $e){
    echo 'Error: '.$e->getMessage();
}