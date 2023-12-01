<?php require_once("modules/header.php");

$stmt = $conn->prepare("SELECT * FROM notas WHERE idNota = :idNota AND idUsuario = :idUsuario");
$stmt->bindParam(":idNota", $_GET['nota']);
$stmt->bindParam(":idUsuario", $_SESSION['id']);
$stmt->execute();

$nota = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<main>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="main-header text-center">
                    <h1 class="text-center">Editar Nota</h1>
                    <form action="controllers/editar.php?idNota=<?php echo $_GET['nota']; ?>" method="post">
                        <div class="form-group"><br>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Título" value="<?php echo $nota['nome']; ?>" maxlength="45"><br>
                            <textarea class="form-control" name="conteudo" id="conteudo" rows="5" placeholder="Conteúdo" required maxlength="500"><?php echo $nota['conteudo']; ?></textarea><br>
                            <label for="cor">Escolha uma cor:</label>
                            <input type="color" id="cor" name="cor" value="<?php echo $nota['cor']; ?>">
                        </div>
                        <div class="col-auto my-1 mt-3">
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once("modules/footer.php"); ?>