<?php require_once("modules/header.php");

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE tipo = 1");
$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="main-header">
                    <h1 class="text-center">Usuários</h1>
                </div>
                <div class="main-body">
                    <div class="row">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Funções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($usuarios as $usuario) {
                                        echo '<tr>
                                                <th scope="row">'.$usuario['idUsuario'].'</th>
                                                <td>'.$usuario['nome'].'</td>
                                                <td>'.$usuario['email'].'</td>
                                                <td>
                                                    <span class="p-1">
                                                        <a href="verUsuario.php?idUsuario='.$usuario['idUsuario'].'">
                                                            <button class="btn btn-outline-primary">Ver
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                </svg>
                                                            </button>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="controllers/excluirUsuario.php?idUsuario='.$usuario['idUsuario'].'">
                                                            <button class="btn btn-outline-danger">Excluir
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                </svg>
                                                            </button>
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once("modules/footer.php"); ?>