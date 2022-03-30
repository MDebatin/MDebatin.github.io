<?php require('app_logic.php');
if(isset($_GET['token']))
{
    $token = $_GET['token'];
    $_SESSION['token'] = $token;
    $session_token = $_SESSION['token'];
}else {
    header('enter_email.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Reset PHP</title>
    <link rel="stylesheet" href="emailsend.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
</head>
<body>
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
<form class="box_totalogin" action="new_pass.php" method="post">
    <h2 class="tetx_login">Restauração de Senha</h2>
    <!-- form validation messages -->
    <?php //include('messages.php'); ?>
    <div class="tetx_login">
        <p>Nova Senha:</p>
        <input type="password" name="new_pass">
    </div>
    <div class="tetx_login">
        <p>Confirmar nova senha: </p>
        <input type="password" name="new_pass_c">
    </div>
    <div class="tetx_login">
        <button type="submit" name="new_password" class="entrar">Enviar</button>
    </div>
</form>
<footer>
    <div class="fim">
        <h1>Contato: conselho@fcbrusque.sc.gov.br</h1>
        <p>Página criada pelos alunos da segunda fase de Sistemas de Informação - Unifebe - Brusque - SC</p>
    </div>
</footer>
</body>
</html>