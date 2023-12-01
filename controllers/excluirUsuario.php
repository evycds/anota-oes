<?php

include_once('conexao.php');
session_start();

if(!isset($_SESSION['logado']) && !isset($_SESSION['admin'])) {
    header('Location: login.php?erro=3');
    exit();
}

if(isset($_GET['idUsuario'])){
    $idUsuario = $_GET['idUsuario'];

    $query = "DELETE FROM usuarios WHERE idUsuario = :idUsuario";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':idUsuario', $idUsuario);
    $stmt->execute();

    header('Location: ../admin.php?sucesso=1');
    exit();
}else{
    header('Location: ../index.php?erro=2');
    exit();
}