<?php require_once("modules/header.php");

$stmt = $conn->prepare("SELECT * FROM notas WHERE idUsuario = :id_usuario");
$stmt->bindParam(":id_usuario", $_SESSION['id']);
$stmt->execute();

$notas = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="main-header">
                    <h1 class="text-center">Notas</h1>
                    <a href="adicionar.php"><button class="btn btn-primary">Adicionar Nota</button></a>
                </div>
                <div class="main-body">
                    <div class="row">
                        <?php
                            if(count($notas) <= 0) {
                                echo '<h5 class="text-center mt-4">Nenhuma nota encontrada, adicione uma nova nota!</h5>';
                            }else{
                                foreach($notas as $nota) {
                                    echo '
                                        <div class="col-sm-3 mt-4">
                                            <div class="card">
                                                <div class="color-stripe" style="background-color: '.$nota['cor'].'"></div>
                                                <div class="card-body">
                                                    <h5 class="card-title">'.$nota['nome'].'</h5>
                                                    <p class="card-text">'.mb_strimwidth($nota['conteudo'], 0, 100, '...').'</p>
                                                    <a href="editar.php?nota='.$nota['idNota'].'"><button class="btn btn-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg>
                                                    </button></a>
                                                    <a href="controllers/remover.php?idNota='.$nota['idNota'].'"><button class="btn btn-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                        </svg>
                                                    </button></a>
                                                </div>
                                            </div>
                                        </div>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once("modules/footer.php"); ?>