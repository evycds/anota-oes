<?php

    include_once('conexao.php');
    session_start();

    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
    unset($_SESSION["logado"]);
    unset($_SESSION["admin"]);

    header('Location: ../login.php?sucesso=1');

?>