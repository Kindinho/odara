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
                        <img src="img/s1.PNG" alt="Produto Imagem">

                        <div class="img-linha">
                            <div class="img-col">
                                <img src="img/s2.PNG" alt="Produto Miniatura">
                            </div>
                            <div class="img-col">
                                <img src="img/s1.PNG" alt="Produto Miniatura">
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <p>Sabonete Argila</p>
                        <h4>R$ 13</h4>
                        <form id="product-form" data-product-id="4" data-product-name="Sabonete Argila" data-product-price="13" data-product-image="img/s1.PNG">
                            <select name="modelo" id="modelo">
                                <option value="argila-branca-lavanda">Argila Branca com Lavanda</option>
                                <option value="argila-verde-alecrim">Argila Verde com Alecrim</option>
                                <option value="argila-rosa-geranio">Argila Rosa com Gerânio</option>
                                <option value="argila-vermelha-cedro">Argila Vermelha com Cedro</option>
                                <option value="argila-preta-patchouli">Argila Preta com Patchouli</option>
                            </select>
                            <input type="number" name="quantidade" id="quantidade" value="1">
                            <button type="submit" class="btn">Adicionar ao Carrinho</button>
                        </form>

                        <h3>Descrição</h3>
                        <p>Os sabonetes de argila são uma escolha popular para cuidados com a pele devido aos seus benefícios únicos. A argila, rica em minerais e nutrientes essenciais, como sílica, magnésio e cálcio, é conhecida por suas propriedades purificantes e revitalizantes. Ao ser incorporada em sabonetes, a argila ajuda a remover impurezas da pele, controlar a oleosidade, e promover uma sensação de limpeza profunda. Além disso, a argila é suave e não resseca a pele, tornando os sabonetes de argila ideais para diversos tipos de pele, desde peles oleosas até peles sensíveis. Experimentar um sabonete de argila é desfrutar de uma limpeza suave e eficaz, deixando a pele renovada, macia e radiante.</p>
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
                        <a href="ver-produto8.php">
                        <img src="img/perfume.webp" alt="perfume Artesanal">
                    </a>
                        <h4>Perfume Artesanal</h4>
                        <p>R$25</p>
                    </div>

                    <div class="col-4">
                        <a href="ver-produtoq.php">
                        <img src="img/ve1.PNG" alt="vela estrela">
                    </a>
                        <h4>Vela Estrela</h4>
                        <p>R$25</p>
                    </div>

                    <div class="col-4">
                        <a href="ver-produto.php">
                        <img src="img/2.PNG" alt="Pulseira">
                    </a>
                        <h4>Pulseira</h4>
                        <p>R$10</p>
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
