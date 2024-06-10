<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odara</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--inicio banner-->
    <div class="novoMenu">
        <!--inicio conteiner-->
        <div class="container">
            <!--inicio navbar-->
            <div class="navbar">
                <div class="logo">
                    <img src="img/logo1.png" alt="Odara" width="120px">
                </div>
                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.php" title="INICIO">INICIO</a></li>
                        <li><a href="produtos.php" title="PRODUTOS">PRODUTOS</a></li>
                        <li><a href="contato.php" title="">CONTATO</a></li>
                        <li><a href="minha-conta.php" title="">MINHA CONTA</a></li>
                    </ul>
                </nav>
                <!--fim navbar-->
                <a href="carrinho.php">
                    <img src="img/carrinho de compras.png" alt="Carrinho de Compras" width="120px" height="120px">
                </a>
                <img src="img/menu-removebg-preview.png" alt="" class="menu-celular" onclick="menucelular()">
            </div>
            <div class="linha-h"></div>
            <!--fim navbar topo-->
        </div>
        <!--fim conteiner-->
    </div>
    <!--fim banner-->

    <!--inicio produtos destaque-->
    <div class="container">
        <div class="corpo-categorias">
            <div class="linha linha2">
                <h2>Todos</h2>
                <select id="sortPrice">
                    <option value="asc">Menor preço</option>
                    <option value="desc">Maior preço</option>
                </select>
            </div>
            <div class="linha" id="productsContainer">
                <div class="col-4">
                    <a href="ver-produto2.php">
                        <img src="img/s3.PNG" alt="Sabonete botânico">
                    </a>
                    <h4>Sabonete botânico</h4>
                    <p>R$30</p>
                </div>
                <div class="col-4">
                    <a href="ver-produto.php">
                        <img src="img/5.PNG" alt="Pulseira">
                    </a>
                    <h4>Pulseira</h4>
                    <p>R$10</p>
                </div>
                <div class="col-4">
                    <a href="ver-produto1.php">
                        <img src="img/v1.PNG" alt="Vela Aromatizada">
                    </a>
                    <h4>Vela Aromatizada</h4>
                    <p>R$20</p>
                </div>
                <div class="col-4">
                    <a href="ver-produto3.php">
                        <img src="img/s1.PNG" alt="Sabonete Argila">
                    </a>
                    <h4>Sabonete Argila</h4>
                    <p>R$13</p>
                </div>
                <div class="col-4">
                    <a href="ver-produtoq.php">
                        <img src="img/ve1.PNG" alt="Vela Estrela Aromatizada">
                    </a>
                    <h4>Vela Estrela</h4>
                    <p>R$25</p>
                </div>
                <div class="col-4">
                    <a href="ver-produto7.php">
                        <img src="img/banho descarrego.webp" alt="Banho de Descarrego">
                    </a>
                    <h4>Banho de Descarrego</h4>
                    <p>R$30</p>
                </div>
                <div class="col-4">
                    <a href="ver-produto6.php">
                        <img src="img/incenso.webp" alt="Incenso">
                    </a>
                    <h4>Incenso</h4>
                    <p>R$13</p>
                </div>
                <div class="col-4">
                    <a href="ver-produto5.php">
                        <img src="img/sais de banho.jpg" alt="Sais de Banho">
                    </a>
                    <h4>Sais de Banho</h4>
                    <p>R$50</p>
                </div>
                <div class="col-4">
                    <a href="ver-produto8.php">
                        <img src="img/perfume.webp" alt="Perfume Artesanal">
                    </a>
                    <h4>Perfume Artesanal</h4>
                    <p>R$25</p>
                </div>
            </div>
        </div>
    </div>
    <!--fim produtos destaque-->

    <div class="redes-sociais2">
        <a href="https://www.instagram.com/odaraoba/" target="_blank">
            <ion-icon name="logo-instagram"></ion-icon>
        </a>
        <a href="https://www.facebook.com/profile.php?id=100017130998400&locale=pt_BR" target="_blank">
            <ion-icon name="logo-facebook"></ion-icon>
        </a>
        <a href="https://www.tiktok.com/@odaraoba" target="_blank">
            <ion-icon name="logo-tiktok"></ion-icon>
        </a>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
