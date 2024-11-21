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
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">iComida</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Cardápio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Conta</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./minha-conta/settings.php">Minha conta</a></li>
                                <li><a class="dropdown-item" href="./minha-conta/pedidos.php">Meus pedidos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="./minha-conta/logout.php">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Procurar por produtos" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Procurar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    
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


    <?php include './includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
