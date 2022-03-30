<?php
require ('server.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Conselho Muncipal de Cultura de Brusque - SC</title>
    <meta charsert='UTF-8' />
    <meta name="viewport" content="width=device-width,user-scalable=0" />
    <link rel="stylesheet" type="text/css" href="user2.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
<header>
    <div class="box_header">
        <div class="info_header">
            <span class="namepag">Conselho Municipal de Cultura - Brusque - SC</span>
            <img class="logobq" src="image/logo_bq.png" />
            <span class="contato">conselho@fcbrusque.sc.gov.br</span>
        </div>
        <div class="faixa_menu">
            <div class="logo">
                <img class="logo_name" src="image/logo.png" />
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li> <a style="color: white; text-decoration: none;" href="painel.php">HOME</a></li>
                        <li> <a style="color: white; text-decoration: none;" href="upload.php">PERFIL</a></li>
                        <li> <a style="color: white; text-decoration: none;" href="logout.php">SAIR</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="alinhas">
    <div class="row">
        <div class="alinhas">
            <div class="tetx_login5">
                <span class="usuario1"><strong> Usuário: </strong><?php echo $_SESSION['name']; ?></span>
                <span class="usuario1"><strong> Email: </strong><?php echo $_SESSION['email']; ?></span><span> </span></div>
                <span  class="usuario1"><strong> Telefone: </strong><?php echo $_SESSION['phone']; ?></span><span> </span></div>

    </div>
        <div class="tituloPDF">
            <div class="tetx_login">
                <h2>Upload de Arquivo PDF</h2>
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <form method="POST" enctype="multipart/form-data">
                    <a href="upload.php" class="tetx_login2">Realizar Upload</a>

                    <a href="downloads.php" class="tetx_login2">Visualizar e baixar Arquivos</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<footer>
    <div class="fim">
        <h1>Contato: conselho@fcbrusque.sc.gov.br</h1>
        <p>Página criada pelos alunos da segunda fase de Sistemas de Informação - Unifebe - Brusque - SC</p>
    </div>
</footer>
<script type="text/javascript" src="curri.js"></script>
</body>

</html>

