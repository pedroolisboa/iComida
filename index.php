<?php
    if(!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        
    <?php

    if (isset($_SESSION['id'])) {
        include('./includes/innav.php'); 
    } else {
        include('./includes/notnav.php'); 
    }

    ?>

    </header>
    
    <main class="flex-grow-1">
        <div class="container my-4">
            <h3>Pizzas</h3><br>
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                <div class="col">
                    <div class="card h-100">
                        <img src="./imgs/pizza.jpeg" class="card-img-top" alt="Produto 1">
                        <div class="card-body">
                            <h5 class="card-title">Pizza calabresa</h5>
                            <p class="card-text">Descrição do produto 1.</p>
                            <p class="card-text fw-bold">Preço: R$ 25,00</p>
                            <button class="btn btn-primary w-100">Adicionar ao Carrinho</button>
                        </div>  
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./imgs/frangoecatupiry.jpeg" class="card-img-top" alt="Produto 2">
                        <div class="card-body">
                            <h5 class="card-title">Pizza frango com catupiry</h5>
                            <p class="card-text">Descrição do produto 2.</p>
                            <p class="card-text fw-bold">Preço: R$ 35,00</p>
                            <button class="btn btn-primary w-100">Adicionar ao Carrinho</button>
                        </div>  
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">    
                        <img src="./imgs/portuguesa.jpeg" class="card-img-top" alt="Produto 3">
                        <div class="card-body">
                            <h5 class="card-title">Pizza portuguesa</h5>
                            <p class="card-text">Descrição do produto 3.</p>
                            <p class="card-text fw-bold">Preço: R$ 40,00</p>
                            <button class="btn btn-primary w-100">Adicionar ao Carrinho</button>
                        </div>  
                    </div>
                </div>
            </div>

            <h3>Hamburgueres</h3><br>
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                <div class="col">
                    <div class="card h-100">
                        <img src="./imgs/hamburguer.jpg" class="card-img-top" alt="Produto 1">
                        <div class="card-body">
                            <h5 class="card-title">Hamburguer artesanal</h5>
                            <p class="card-text">Descrição do produto 1.</p>
                            <p class="card-text fw-bold">Preço: R$ 25,00</p>
                            <button class="btn btn-primary w-100">Adicionar ao Carrinho</button>
                        </div>  
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./imgs/xbacon.jpeg" class="card-img-top" alt="Produto 2">
                        <div class="card-body">
                            <h5 class="card-title">X-Bacon-</h5>
                            <p class="card-text">Descrição do produto 2.</p>
                            <p class="card-text fw-bold">Preço: R$ 35,00</p>
                            <button class="btn btn-primary w-100">Adicionar ao Carrinho</button>
                        </div>  
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./imgs/xtudo.jpeg" class="card-img-top" alt="Produto 3">
                        <div class="card-body">
                            <h5 class="card-title">X-Tudo</h5>
                            <p class="card-text">Descrição do produto 3.</p>
                            <p class="card-text fw-bold">Preço: R$ 40,00</p>
                            <button class="btn btn-primary w-100">Adicionar ao Carrinho</button>
                        </div>  
                    </div>
                </div>
            </div>

            <h3>Espetinhos</h3><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="./imgs/ebovina.jpeg" class="card-img-top" alt="Produto 1">
                        <div class="card-body">
                            <h5 class="card-title">Carne bovina</h5>
                            <p class="card-text">Descrição do produto 1.</p>
                            <p class="card-text fw-bold">Preço: R$ 6,00</p>
                            <button class="btn btn-primary w-100">Adicionar ao Carrinho</button>
                        </div>  
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./imgs/emedalhao.jpeg" class="card-img-top" alt="Produto 2">
                        <div class="card-body">
                            <h5 class="card-title">Medalhão</h5>
                            <p class="card-text">Descrição do produto 2.</p>
                            <p class="card-text fw-bold">Preço: R$ 6,00</p>
                            <button class="btn btn-primary w-100">Adicionar ao Carrinho</button>
                        </div>  
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./imgs/ecoracao.jpg" class="card-img-top" alt="Produto 3">
                        <div class="card-body">
                            <h5 class="card-title">Coração de galinha</h5>
                            <p class="card-text">Descrição do produto 3.</p>
                            <p class="card-text fw-bold">Preço: R$ 8,00</p>
                            <button class="btn btn-primary w-100">Adicionar ao Carrinho</button>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php include './includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
