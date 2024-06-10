<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odara - Contato</title>
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
                            <span>Contato</span>
                            <hr id="Indicador">
                        </div>
                        <form id="ContatoForm" onsubmit="sendEmail(event)">
                            <input type="text" name="nome" id="nome" placeholder="Nome completo" required>
                            <input type="email" name="email" id="email" placeholder="Email de contato" required>
                            <input type="text" name="Mensagem" id="Mensagem" placeholder="Mensagem" required>
                            <button type="submit" name="enviar" class="btn">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim minha conta -->
    </div>
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script type="text/javascript">
      (function(){
        emailjs.init("O1sdzO2NTzpL88Qd8");
      })();
    </script>
    <script src="js/login.js"></script>
</body>
</html>
