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
    <title>Usuário - Adicionar</title>
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar usuário
                        <a href="./dashboard.php" class="btn btn-outline-warning float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $user_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $get = "SELECT * FROM usuarios WHERE id='$user_id'";
                            $list = mysqli_query($conn, $get);

                            if (mysqli_num_rows($list) > 0) {
                                $user = mysqli_fetch_array($list);
                            }
                        ?>
                        <form action="./CRUD/actions.php" method="POST">
                            <input type="hidden" name="user_id" value="<?=$user['id']?>">
                            <div class="mb-3">
                                <label for="nome">Nome</label>
                                <input type="text" name="name" value="<?=$user['nome']?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" value="<?=$user['email']?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="nome">Senha</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="edit_user" class="btn btn-outline-success">Salvar</button>
                            </div>
                        </form>
                        <?php
                        } else {
                            echo '<h5 style="color: red">Erro</h5>';
                        }    
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>