<?php
    include('../settings/authdb.php');

    if(!isset($_SESSION)) {
        session_start();
    }
    include('../assets/protect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel administrativo</title>
</head>
<body>
    <header>
        <?php include('./includes/nav.php'); ?>
                <li class="nav-item">
                            <a class="nav-link" href="./logout.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container my-4">
        <h3>Bem-vindo ao painel, <?php echo $_SESSION['user']; ?>!</h3>
    </div>
    
    <div class="container mt-4">
        <?php include('./includes/message.php'); ?>
        <div class="row">
            <div class="col-md-12 g-4 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de usuários
                            <a href="./user-create.php" class="btn btn-primary float-end">Adicionar usuário</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Senha</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $list = "SELECT * FROM usuarios";
                                    $users = mysqli_query($conn, $list);

                                    if (mysqli_num_rows($users) > 0) {
                                        foreach ($users as $user) {
                                            
                                ?>
                                <tr>
                                    <td><?=$user['id']?></td>
                                    <td><?=$user['nome']?></td>
                                    <td><?=$user['email']?></td>
                                    <td><?=$user['senha']?></td>
                                    <td>
                                        <a href="./user-edit.php?id=<?=$user['id']?>" class="btn btn-outline-info">Editar</a>
                                        <form action="./CRUD/actions.php" method="POST" class="d-inline">
                                            <button onclick="return confirm('Tem certeza que deseja continuar? ')" type="submit" name="delete_user" value="<?=$user['id']?>" class="btn btn-outline-danger">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                                    }
                                } else {
                                    echo '<h5 style="color: red">Nenhum usuário encontrado!</h5>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>