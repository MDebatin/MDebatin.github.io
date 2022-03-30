<?php include('app_logic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurar Senha</title>
    <link rel="stylesheet" href="emailsend.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
</head>
<body>
<header>
    <div class="box_header">
        <div class="info_header">
            <span class="namepag">Conselho Municipal de Cultura - Brusque - SC</span>
            <img class="logobq" src="image/logo_bq.png"/>
            <span class="contato">conselho@fcbrusque.sc.gov.br</span>
        </div>
        <div class="faixa_menu">
            <div class="logo">
                <img class="logo_name" src="image/logo.png"/>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li> <a style="color: white; text-decoration: none;" href="index.html">HOME</a></li>
                        <li> <a style="color: white; text-decoration: none;" href="logon.php">LOGIN</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<form class="box_totalogin" action="login.php" method="post" style="text-align: center;">
    <p class="tetx_login">
        Enviamos um email para  <b><?php echo $_GET['email'] ?></b> para lhe ajudar a recuperar sua conta.
    </p>
    <p class="tetx_login">Por favor entre em seu email e clique no link para ser redirecionado a tela de restauração de senha!</p>
</form>
<footer>
    <div class="fim">
        <h1>Contato: conselho@fcbrusque.sc.gov.br</h1>
        <p>Página criada pelos alunos de Sistemas de Informação - Unifebe - Brusque - SC</p>
    </div>
</footer>
</body>
</html>