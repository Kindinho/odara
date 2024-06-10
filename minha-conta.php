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
            <!-- inicio minha conta -->
         <div class="minha-conta">

                <div class="linha">
                    <div class="col-2">

                        <img src="img/image (4).png" alt="">
                    </div>
                    <div class="col-2">
                        <div class="formulario">

                            <div class="btn-form">
                                <span onclick="Entrar()">Entrar</span>
                                <span onclick="Cadastro()">Cadastro</span>
                                <hr id="Indicador">
                            </div>

                            <form action="" method="post" id="EntrarPainel">
                                <input type="email" name="email" id="email-entrar" placeholder="email de acesso">
                                <input type="password" name="senha" id="senha-entrar" placeholder="digite sua senha">
                                <button type="submit" name="senEntrar" class="btn">Entrar</button>
                            </form>


                            <form action="" method="post" id="CadastroSite">
                                <input type="text" name="nome" id="nome-cadastro" placeholder="Nome completo">
                                <input type="email" name="email" id="email-cadastro" placeholder="email de acesso">
                                <input type="password" name="senha" id="senha-cadastro" placeholder="digite sua senha">
                                <button type="submit" name="senCadastrar" class="btn">Cadastrar-se</button>
                            </form>
                        </div>
                    </div>
                </div>

        
         </div>
            <!-- fim minha conta -->

            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script src="js/login.js"></script>   
        </div>
    </div>
</body>
</html>
