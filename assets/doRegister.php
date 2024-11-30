<?php

include('./settings/authdb.php');

if (isset($_POST['do_register'])) {    
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $pass = mysqli_real_escape_string($conn, trim($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, trim($_POST['confirmpassword']));

    if (strlen($name) > 0 || strlen($email) > 0 || strlen($pass) > 0) {
        if ($pass == $cpassword) {
            $password = mysqli_real_escape_string($conn, password_hash(trim($pass), PASSWORD_DEFAULT));
            
            $add = "INSERT INTO usuarios (nome, email, senha) VALUES ('$name', '$email', '$password')";
            $runadd = $conn->query($add) or die("[-] Erro na execução do código SQL: " . $conn->error);


            if (mysqli_affected_rows($conn) > 0) {
                $ab = "SELECT * FROM usuarios WHERE email = '$email'";
                $runab = $conn->query($ab) or die("[-] Erro na execução do código SQL: " . $conn->error);

                $usuario = $runab->fetch_assoc();
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['email'] = $usuario['email'];

                $_SESSION['mensagem'] = '[+] Seja bem-vindo, ' . $name . '!';
                header("Location: ./index.php");
                exit;
            } else {
                $_SESSION['mensagem'] = '[-] Erro ao criar usuário...';
                exit;
            }
        } else {
            $_SESSION['mensagem'] = '[-] As senhas sao diferentes.';
        }
    } else {
        $_SESSION['mensagem'] = '[-] Preencha todos os campos.';
    }
}  

?>