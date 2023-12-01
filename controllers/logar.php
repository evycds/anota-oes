<?php

include_once('conexao.php');
session_start();

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: ../login.php?erro=1');
    exit();
}
else{
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(count($usuarios) <= 0) {
        header('Location: ../login.php?erro=2');
        exit();
    }else{
        if($usuarios[0]['tipo'] == 2){
            $_SESSION['admin'] = true;
        }

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['id'] = $usuarios[0]['idUsuario'];
        $_SESSION['logado'] = true;
        header('Location: ../index.php?sucesso=1');
    }
}

?>