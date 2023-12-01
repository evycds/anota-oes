<?php

include_once('conexao.php');
session_start();

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: ../cadastro.php?erro=1');
    exit();
}
else{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo = "1";

    $query = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES (:nome, :email, :senha, :tipo)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':tipo', $tipo);
    $stmt->execute();

    //$_SESSION['email'] = $email;
    //$_SESSION['senha'] = $senha;
    //$_SESSION['id'] = $usuarios[0]['idUsuario'];
    //$_SESSION['logado'] = true;
    header('Location: ../login.php?sucesso=4');
}

?>