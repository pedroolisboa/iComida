<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if(isset($_SESSION['id'])) {
        header("Location: index.php");
    }

    include('./assets/doLogin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/log_form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Login ADMIN</title>
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    
    <header>
        <?= include './includes/notnav.php'; ?>
    </header>
    
    <main class="flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="container login-container">
            <div class="login-form bg-white p-4 rounded shadow" style="max-width: 400px;">
                <h2 class="text-center mb-4">Entrar</h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu usuário" >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" >
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Entrar</button>
                </form>
                <div class="text-center mt-3">
                    <p>Não possui conta? <a href="./cadastro.php">Clique aqui.</a> </p>
                </div>
            </div>
        </div>
    </main>

    <?php include './includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
