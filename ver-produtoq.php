<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odara</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Início banner -->
    <div class="novoMenu">
        <!-- Início container -->
        <div class="container">
            <!-- Início navbar -->
            <div class="navbar">
                <div class="logo">
                    <img src="img/logo1.png" alt="Odara" width="120px">
                </div>

                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.php" title="INICIO">INICIO</a></li>
                        <li><a href="produtos.php" title="PRODUTOS">PRODUTOS</a></li>
                        <li><a href="contato.php" title="CONTATOS">CONTATO</a></li>
                        <li><a href="minha-conta.php" title="MINHA CONTA">MINHA CONTA</a></li>
                    </ul>
                </nav>
                <!-- Fim navbar -->

                <a href="carrinho.php">
                    <img src="img/carrinho de compras.png" alt="Carrinho de Compras" width="120px" height="120px">
                </a>
                <img src="img/menu-removebg-preview.png" alt="Menu Celular" class="menu-celular" onclick="menucelular()">
            </div>
            <div class="linha-h"></div>
            <!-- Fim navbar topo -->

            <div class="corpo-categorias ver-produto">
                <div class="linha">
                    <div class="col-2">
                        <img src="img/ve1.PNG" alt="Produto Imagem">

                        <div class="img-linha">
                            <div class="img-col">
                                <img src="img/ve1.PNG" alt="Produto Miniatura">
                            </div>
                            <div class="img-col">
                                <img src="img/ve2.PNG" alt="Produto Miniatura">
                            </div>
                            <div class="img-col">
                                <img src="img/ve3.PNG" alt="Produto Miniatura">
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <p>Vela Estrela</p>
                        <h4>R$ 25</h4>
                        <form id="product-form" data-product-id="5" data-product-name="Vela Estrela" data-product-price="25" data-product-image="img/ve1.PNG">
                            <select name="modelo" id="modelo">
                                <option value="baunilha">Baunilha</option>
                                <option value="alecrim">Alecrim</option>
                                <option value="lavanda">Lavanda</option>
                                <option value="erva-doce">Erva Doce</option>
                                <option value="camomila">Camomila</option>
                            </select>
                            <input type="number" name="quantidade" id="quantidade" value="1">
                            <button type="submit" class="btn">Adicionar ao Carrinho</button>
                        </form>

                        <h3>Descrição</h3>
                        <p>A vela estrela perfumada é uma verdadeira jóia para os sentidos. Com seu design delicado em forma de estrela, ela não apenas ilumina o ambiente, mas também o perfuma com suavidade e elegância. Cada vela é cuidadosamente confeccionada com ceras naturais e essências especiais que criam uma atmosfera acolhedora e relaxante. Ao acender essa vela, você será envolvido por uma fragrância encantadora que desperta a tranquilidade e a serenidade, tornando cada momento ainda mais especial.</p>
                    </div>
                </div>
            </div>

            <!-- Início produtos destaque -->
            <div class="corpo-categorias">
                <div class="linha linha2">
                    <h2>Produtos relacionados</h2>
                    <a href="produtos.php" class="veja-mais">
                    <p>Veja mais</p>
                </a>
                </div>
                <div class="linha">
                    <div class="col-4">
                        <a href="ver-produto6.php">
                        <img src="img/incenso.webp" alt="Incenso">
                    </a>
                        <h4>Incenso</h4>
                        <p>R$13</p>
                    </div>

                    <div class="col-4">
                        <a href="ver-produto3.php">
                        <img src="img/s1.PNG" alt="sabonete argila">
                    </a>
                        <h4>sabonete argila</h4>
                        <p>R$13</p>
                    </div>

                    <div class="col-4">
                        <a href="ver-produto2.php">
                        <img src="img/s3.PNG" alt="sabonete botanico">
                    </a>
                        <h4>sabonete botanico</h4>
                        <p>R$30</p>
                    </div>
                </div>
            </div>
            <!-- Fim produtos destaque -->

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
        </div>
    </div>
</body>
</html>
