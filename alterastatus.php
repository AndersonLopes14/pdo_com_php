<?php 

include_once('conexao.php');

$id = $_GET['id'];

$querySQL = "UPDATE usuario_anderson SET status = :cod WHERE cod_usuario LIKE $id";

$exec = $conn->prepare($querySQL);

$exec->execute(['0']);

header('Location: http://192.168.1.25/TRILHAS4/Anderson/pdo_com_php/usuarios.php')

?>