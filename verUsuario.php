<?php require_once("modules/header.php");

$stmt = $conn->prepare("SELECT * FROM notas WHERE idUsuario = :idUsuario");
$stmt->bindParam(':idUsuario', $_GET['idUsuario']);
$stmt->execute();
$notas = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="main-header">
                    <h1 class="text-center">Notas</h1>
                </div>
                <div class="main-body">
                    <div class="row">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Conteúdo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($notas as $nota) {
                                        echo '<tr>
                                                <th scope="row">'.$nota['idNota'].'</th>
                                                <th scope="row">'.$nota['nome'].'</th>
                                                <td>'.$nota['conteudo'].'</td>
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