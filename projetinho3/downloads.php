<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
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
<br>
<div class="box_totalogin2">
    <table>
        <thead class="tetx_login">
        <th>  Nome do arquivo  </th>
        <th>  Tamanho (em MB)  </th>
        <th>  Downloads  </th>
        <th></th>
        <th>Exclusão </th>
        </thead>
        <tbody>
        <?php

        foreach ($files as $file): ?>
            <tr class="tetx_login">
                <td><?php echo $file['name']; ?></td>
                <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                <td><?php echo $file['downloads']; ?></td>
                <td><a class="download" href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                <td><a class="download" href="downloads.php?delete=<?php echo $file['id'] ?>">Excluir</a></td>
                </td>
            </tr>
        <?php endforeach;?>

        </tbody>
    </table>
</div>

<footer>
    <div class="fim">
        <h1>Contato: conselho@fcbrusque.sc.gov.br</h1>
        <p>Página criada pelos alunos da segunda fase de Sistemas de Informação - Unifebe - Brusque - SC</p>
    </div>
</footer>
</body>
</html>