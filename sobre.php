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
                    <h1 class="">Notas</h1>
                </div>
                <div class="main-body">
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum consectetur molestiae modi amet delectus ratione consequatur itaque. Sunt, architecto! Aperiam fuga minima error laboriosam asperiores vitae eligendi quia optio reiciendis! Lorem ipsum dolor sit amet consectetur adipisicing elit. In aliquid explicabo ratione porro animi rerum totam accusamus, eius voluptates rem amet unde illo nobis, quia dolor eaque iusto autem sit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ab a velit modi architecto aspernatur dolorum maiores vitae quibusdam veritatis culpa, recusandae doloribus officia deleniti minus impedit magnam nulla laboriosam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once("modules/footer.php"); ?>