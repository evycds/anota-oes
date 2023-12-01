<?php

include_once('conexao.php');
session_start();

if(!isset($_SESSION['logado'])) {
    header('Location: login.php?erro=3');
    exit();
}

if(isset($_POST['nome']) && isset($_POST['conteudo']) && isset($_POST['cor'])){
    $nome = $_POST['nome'];
    $conteudo = $_POST['conteudo'];
    $cor = $_POST['cor'];
    $idNota = $_GET['idNota'];
    $idUsuario = $_SESSION['id'];

    $query = "UPDATE notas SET nome = :nome, conteudo = :conteudo, cor = :cor WHERE idUsuario = :idUsuario AND idNota = :idNota";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':conteudo', $conteudo);
    $stmt->bindParam(':cor', $cor);
    $stmt->bindParam(':idUsuario', $idUsuario);
    $stmt->bindParam(':idNota', $idNota);
    $stmt->execute();

    header('Location: ../index.php?sucesso=3');
    exit();
}else{
    header('Location: ../adicionar.php?erro=1');
    exit();
}