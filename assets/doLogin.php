<?php

include('./settings/authdb.php');

    if (isset($_POST['email']) || isset($_POST['password'])) {
        if (strlen($_POST['email'] === 0)) {
            echo "Erro: PREENCHA O SEU EMAIL!";
        } else if (strlen($_POST['password'] === 0)) {
            echo "Erro: PREENCHA A SUA SENHA!";
        } else {
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $ver = "SELECT * FROM usuarios WHERE email = '$email'";
            $runver = $conn->query($ver) or die("[-] Erro na execução do código SQL: " . $conn->error);

            $encontrou = $runver->num_rows;
            if ($encontrou == 1) {
                $usuario = $runver->fetch_assoc();
                if (password_verify($pass, $usuario['senha'])) {
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['email'] = $usuario['email'];
    
                    header("Location: ./index.php");
                } else {
                    echo "Falha ao logar! Usuário ou senha incorretos."; 
                }
            }

        }
    }

?>