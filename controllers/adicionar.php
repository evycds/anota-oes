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
    $idUsuario = $_SESSION['id'];

    $query = "INSERT INTO notas (idUsuario, nome, conteudo, cor) VALUES (:idUsuario, :nome, :conteudo, :cor)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':idUsuario', $idUsuario);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':conteudo', $conteudo);
    $stmt->bindParam(':cor', $cor);
    $stmt->execute();

    header('Location: ../index.php?sucesso=2');
    exit();
}else{
    header('Location: ../adicionar.php?erro=1');
    exit();
}