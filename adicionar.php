<?php require_once("modules/header.php");?>

<main>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="main-header text-center">
                    <h1 class="text-center">Adicionar Nota</h1>
                    <form action="controllers/adicionar.php" method="post">
                        <div class="form-group"><br>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Título" maxlength="45"><br>
                            <textarea class="form-control" name="conteudo" id="conteudo" rows="5" placeholder="Conteúdo" required maxlength="500"></textarea><br>
                            <label for="cor">Escolha uma cor:</label>
                            <input type="color" id="cor" name="cor" value="#ff0000">
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