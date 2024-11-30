<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    
    if(isset($_SESSION['id'])) {
        header("Location: index.php");
    }

    include('./assets/doRegister.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/log_form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Cadastro</title>
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    
    <header>
        <?= include './includes/notnav.php'; ?>
    </header>
    
    <main class="flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="container login-container">
            
            <?php include('./includes/message.php'); ?>
            
            <div class="login-form bg-white p-4 rounded shadow" style="max-width: 400px;">
                <h2 class="text-center mb-4">Cadastrar</h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu usuário" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmpassword" class="form-label">Confirmar Senha</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirme sua senha" required>
                    </div>
                    <button type="submit" name="do_register" class="btn btn-primary w-100">Cadastrar-se</button>
                </form>
                <div class="text-center mt-3">
                    <p>Possui conta? <a href="./entrar.php">Clique aqui.</a> </p>
                </div>
            </div>
        </div>
    </main>

    <?php include './includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
