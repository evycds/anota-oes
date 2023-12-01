<?php

require_once("controllers/conexao.php");
session_start();

if(!isset($_SESSION['logado'])) {
    header('Location: login.php?erro=3');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notas - Seu aplicativo de anotações!</title>
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body>
        <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="/">Notas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-sair" href="controllers/deslogar.php">Sair</a>
                        </li>
                        <?php
                            if(isset($_SESSION['admin'])) {
                                echo '<li class="nav-item">
                                    <a class="nav-link" href="admin.php">Admin</a>
                                </li>';
                            }
                        ?>
                    </ul>
                    <span class="navbar-text">
                        Seu aplicativo de anotações!

                    </span>
                </div>
            </div>
        </nav>
        </header>