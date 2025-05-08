<?php

$serverName         ='localhost';
$userName           ='root';
$passWd             ='';
$dbname             ='meu_primeiro_banco';

try {
    $conn = new pdd("mysql:host=$serveName;dbname=$dbname",$userName,$passWd)
$conn->setAtribute(PDO::attr_errmode,PDO::errmode_exception);
} catch(PDOxception $erro) {
    echo 'Conexão falhou: ' .$erro->getMessage()
}

?>