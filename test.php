<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iComida - Cardápio</title>
    <style>
        /* Estilo para limitar o tamanho das imagens dos cards */
        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="imagem1.jpg" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                        <h5 class="card-title">Produto 1</h5>
                        <p class="card-text">Descrição do produto 1.</p>
                        <p class="card-text fw-bold">Preço: R$ 25,00</p>
                        <button class="btn btn-primary w-100">Adicionar ao Carrinho</button>
                    </div>  
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imagem2.jpg" class="card-img-top" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Produto 2</h5>
                        <p class="card-text">Descrição do produto 2.</p>
                        <p class="card-text fw-bold">Preço: R$ 35,00</p>
                        <button class="btn btn-primary w-100">Adicionar ao Carrinho</button>
                    </div>  
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imagem3.jpg" class="card-img-top" alt="Produto 3">
                    <div class="card-body">
                        <h5 class="card-title">Produto 3</h5>
                        <p class="card-text">Descrição do produto 3.</p>
                        <p class="card-text fw-bold">Preço: R$ 40,00</p>
                        <button class="btn btn-primary w-100">Adicionar ao Carrinho</button>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
