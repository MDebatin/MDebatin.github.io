<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="logar.css">
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
<form class="box_totalogin" method="post" action="logon.php">
    <?php include('errors.php'); ?>
    <div class="tetx_login">
        <p> Usuário: </p>
        <input type="text" name="username" >
    </div>
    <div class="tetx_login">
        <p> Senha: </p>
        <input type="password" name="password">
    </div>
    <div class="tetx_login">
        <button type="submit" class="entrar" name="login_user">Login</button>
    </div>
    <p class="tetx_login">
        <a class="tetx_login" href="enter_email.php">Esqueceu sua senha?</a>
    </p>
    <p class="tetx_login">
       Ainda não está cadastrado? <a class="tetx_login" href="register.php">Cadastre-se!</a>
    </p>
</form>
<footer>
    <div class="fim">
        <h1>Contato: conselho@fcbrusque.sc.gov.br</h1>
        <p>Página criada pelos alunos da segunda fase de Sistemas de Informação - Unifebe - Brusque - SC</p>
    </div>
</footer>
</body>
</html>