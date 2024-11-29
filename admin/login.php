<?php
    include('../settings/authdb.php');

    if (isset($_POST['username']) || isset($_POST['password'])) {
        if (strlen($_POST['username'] === 0)) {
            echo "Erro: PREENCHA O SEU USUARIO!";
        } else if (strlen($_POST['password'] === 0)) {
            echo "Erro: PREENCHA A SUA SENHA!";
        } else {
            $user = $_POST['username'];
            $pass = $_POST['password'];

            $ver = "SELECT * FROM users_adm WHERE username = '$user' AND password = '$pass'";
            $runver = $conn->query($ver) or die("[-] Erro na execução do código SQL: " . $conn->error);

            $encontrou = $runver->num_rows;
            if ($encontrou == 1) {
                $usuario = $runver->fetch_assoc();

                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['user'] = $usuario['username'];

                header("Location: dashboard.php");

            } else {
                echo "Falha ao logar! Usuário ou senha incorretos."; 
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/log_admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Login ADMIN</title>
</head>
<body class="bg-light">

    <div class="container login-container">
        <div class="login-form">
            <h2 class="text-center mb-4">Admin</h2>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Digite seu usuário" >
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" >
                </div>
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
            <div class="text-center mt-3"></div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
