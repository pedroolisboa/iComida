<?php

include('../../settings/authdb.php');

if(!isset($_SESSION)) {
    session_start();
}
include('../../assets/protect.php');

if (isset($_POST['create_user'])) {
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, password_hash(trim($_POST['password']), PASSWORD_DEFAULT)) : '';

    $add = "INSERT INTO usuarios (nome, email, senha) VALUES ('$name', '$email', '$password')";
    $runadd = $conn->query($add) or die("[-] Erro na execução do código SQL: " . $conn->error);

    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['mensagem'] = '[+] Usuário criado com sucesso!';
        header("Location: ../dashboard.php");
        exit;
    } else {
        $_SESSION['mensagem'] = '[-] Erro ao criar usuário...';
        header("Location: ../dashboard.php");
        exit;
    }
}    

if (isset($_POST['edit_user'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']); 
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));

    $update = "UPDATE usuarios SET nome = '$name', email = '$email'";
    if (!empty($senha)) {
        $update .= ", senha = '" . password_hash($senha, PASSWORD_DEFAULT) . "'";
    }
    $update .= "WHERE id = '$user_id'";
    $runupdate = $conn->query($update) or die("[-] Erro na execução do código SQL: " . $conn->error);

    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['mensagem'] = '[+] Edições de usuário salvas com sucesso!';
        header("Location: ../dashboard.php");
        exit;
    } else {
        $_SESSION['mensagem'] = '[-] Erro ao editar usuário...';
        header("Location: ../dashboard.php");
        exit;
    }
}    

if (isset($_POST['delete_user'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['delete_user']);
    
    $del = "DELETE FROM usuarios WHERE id = '$user_id'";
    $rundel = $conn->query($del) or die("[-] Erro na execução do código SQL: " . $conn->error);

    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['mensagem'] = '[+] Usuário deletado com sucesso!';
        header('Location: ../dashboard.php');
        exit;
    } else {
        $_SESSION['mensagem'] = '[-] Falha ao deletar usuário...';
        header('Location: ../dashboard.php');
        exit;
    }
}