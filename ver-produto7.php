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
                        <img src="img/banho descarrego.webp" alt="Produto Imagem">

                        <div class="img-linha">
                            <div class="img-col">
                                <img src="img/banho descarrego.webp" alt="Produto Miniatura">
                            </div>
                            <div class="img-col">
                                <img src="img/banho descarrego2.PNG" alt="Produto Miniatura">
                            </div>
                            <div class="img-col">
                                <img src="img/banho descarrego3.PNG" alt="Produto Miniatura">
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <p>Banho descarrego</p>
                        <h4>R$ 30</h4>
                        <form id="product-form" data-product-id="7" data-product-name="Banho descarrego" data-product-price="30" data-product-image="img/banho descarrego3.PNG">
                            <select name="modelo" id="modelo">
                                <option value="Purificação de Sal Grosso">Purificação de Sal Grosso</option>
                                <option value="Renovação de Ervas">Renovação de Ervas</option>
                                <option value="Harmonia Espiritual">Harmonia Espiritual</option>
                                <option value="Descarrego de Energias">Descarrego de Energias</option>
                                <option value="Ritual de Limpeza">Ritual de Limpeza</option>
                            </select>
                            <input type="number" name="quantidade" id="quantidade" value="1">
                            <button type="submit" class="btn">Adicionar ao Carrinho</button>
                        </form>

                        <h3>Descrição</h3>
                        <p>O banho de descarrego é uma prática espiritual usada para eliminar energias negativas e promover a renovação do corpo e da mente. Feito com ervas, sal grosso e essências naturais, ele ajuda a limpar o campo energético, trazendo sensação de leveza e proteção. Ideal para momentos de estresse e cansaço, o banho de descarrego é um ritual de purificação que revigora e fortalece, proporcionando equilíbrio e paz interior.</p>
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
                        <a href="ver-produto.php">
                        <img src="img/2.PNG" alt="pulseira">
                    </a>
                        <h4>pulseira</h4>
                        <p>R$30</p>
                    </div>

                    <div class="col-4">
                        <a href="ver-produto3.php">
                        <img src="img/s1.PNG" alt="sabonete argila">
                    </a>
                        <h4>sabonete argila</h4>
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
