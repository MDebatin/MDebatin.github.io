<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="upload_down.css" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
    <title>Files Upload and Download</title>
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
                        <li> <a style="color: white; text-decoration: none;" href="user.php">PERFIL</a></li>
                        <li> <a style="color: white; text-decoration: none;" href="logout.php">SAIR</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="box_totalogin">
    <div class="row">
        <form class="tetx_login" method="post" enctype="multipart/form-data" >
            <h3>Enviar Arquivo</h3>
            <input type="file" class="tetx_login3" name="myfile"> <br>
            <button class="entrar" type="submit" name="save">ENVIAR</button>
        </form>
    </div>
    <div class="row">
        <form method="post" enctype="multipart/form-data" >
            <br><br>
            <a class="tetx_login2" href="downloads.php" >Página de Downloads</a>
            <br><br>
        </form>
    </div>
</div>

<footer>
    <div class="fim">
        <h1>Contato: conselho@fcbrusque.sc.gov.br</h1>
        <p>Página criada pelos alunos da segunda fase de Sistemas de Informação - Unifebe - Brusque - SC</p>
    </div>
</footer>
</body>
</html>