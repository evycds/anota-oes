<?php

include_once('conexao.php');
session_start();

if(!isset($_SESSION['logado'])) {
    header('Location: login.php?erro=3');
    exit();
}

if(isset($_GET['idNota'])){

    $idNota = $_GET['idNota'];
    $idUsuario = $_SESSION['id'];

    $query = "DELETE FROM notas WHERE idUsuario = :idUsuario AND idNota = :idNota";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':idUsuario', $idUsuario);
    $stmt->bindParam(':idNota', $idNota);
    $stmt->execute();


    header('Location: ../index.php?sucesso=4');
    exit();
}else{
    header('Location: ../index.php?erro=2');
    exit();
}