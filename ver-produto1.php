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
                        <img src="img/v1.PNG" alt="Produto Imagem">

                        <div class="img-linha">
                            <div class="img-col">
                                <img src="img/v2.PNG" alt="Produto Miniatura">
                            </div>

                            <div class="img-col">
                                <img src="img/v3.PNG" alt="Produto Miniatura">
                            </div>

                            <div class="img-col">
                                <img src="img/vquatro.PNG" alt="Produto Miniatura">
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <p>Vela Aromatizada</p>
                        <h4>R$ 20</h4>
                        <form id="product-form" data-product-id="2" data-product-name="Vela Aromatizada" data-product-price="20" data-product-image="img/v2.PNG">
                            <select name="modelo" id="modelo">
                                <option value="lavanda">Lavanda</option>
                                <option value="jasmin">Jasmim</option>
                                <option value="pinho-silvestre">Pinho Silvestre</option>
                                <option value="baunilha">Baunilha</option>
                                <option value="brisa-marinha">Brisa Marinha</option>
                            </select>
                            <input type="number" name="quantidade" id="quantidade" value="1">
                            <button type="submit" class="btn">Adicionar ao Carrinho</button>
                        </form>

                        <h3>Descrição</h3>
                        <p>As velas perfumadas têm o encanto de transformar o ambiente com suas fragrâncias envolventes. Combinando arte e ciência, essas velas são cuidadosamente elaboradas para proporcionar não apenas iluminação suave, mas também aromas que despertam os sentidos. Desde aromas refrescantes que lembram a natureza até fragrâncias sofisticadas que trazem notas de baunilha, jasmim ou âmbar, as velas perfumadas oferecem uma experiência sensorial única, tornando cada momento ainda mais especial e acolhedor.</p>
                    </div>
                </div>
            </div>

            <!-- Início produtos destaque -->
            <div class="corpo-categorias">
                <h2>Produtos relacionados</h2>
                <a href="produtos.php" class="veja-mais">
                <p>Veja mais</p>
            </a>
                </div>
                <div class="linha">
                    <div class="col-4">
                        <a href="ver-produto.php">
                        <img src="img/2.PNG" alt="Pulseira">
                    </a>
                        <h4>Pulseira</h4>
                        <p>R$10</p>
                    </div>

                    <div class="col-4">
                        <a href="ver-produto5.php">
                        <img src="img/sais1.PNG" alt="Sais de banho">
                    </a>
                        <h4>Sais de banho</h4>
                        <p>R$50</p>
                    </div>

                    <div class="col-4">
                        <a href="ver-produto2.php">
                        <img src="img/s5.PNG" alt="Sabonete botanico">
                    </a>
                        <h4>Sabonete botanico</h4>
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
