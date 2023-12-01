<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notas - Entrar</title>
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/login.css">
    </head>

    <body>
        <main class="form-signin w-100 m-auto flex-align">
            <form action="controllers/logar.php" method="post">
                <h1 class="h3 mb-3 fw-normal">Logue-se</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="nome@exemplo.com" required>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
                    <label for="senha">Senha</label>
                </div>
                <br>
                <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
            </form>
            <br>
            <a href="/cadastro.php"><button class="btn btn-outline-primary w-100 py-2">Crie uma nova conta</button></a>
        </main>
    </body>
</html>