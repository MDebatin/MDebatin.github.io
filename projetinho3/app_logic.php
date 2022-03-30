<?php
session_start();
$errors = [];
$user_id = "";
// conecta com a BD
$db = mysqli_connect('localhost', 'root', '', 'teste');

/*
  pega o email do usuario que quer resetar a senha
  envia um email para o usuario
*/
if (isset($_POST['reset-password'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    // ve se o usuario esta no sistema
    $query = "SELECT email FROM users WHERE email='$email'";
    $results = mysqli_query($db, $query);

    if (empty($email)) {
        array_push($errors, "Your email is required");
    }else if(mysqli_num_rows($results) <= 0) {
        array_push($errors, "Sorry, no user exists on our system with that email");
    }
    // gera um token pra uso de recuperação
    $token = bin2hex(random_bytes(50));

    if (count($errors) == 0) {
        // salva o token na base de dados ao lado do email
        $sql = "INSERT INTO password_reset(email, token) VALUES ('$email', '$token')";
        $results = mysqli_query($db, $sql);

        // Envia um email com o link pra redefinir
        $to = $email;
        $subject = "Reset your password on examplesite.com";
        $msg = "Hi there, click on this <a href=\"new_pass.php?token=" . $token . "\">link</a> to reset your password on our site";
        $msg = wordwrap($msg,70);
        $headers = "From: info@examplesite.com";
        mail($to, $subject, $msg, $headers);
        header('location: pending.php?email=' . $email);
    }
}
if (isset($_GET['token'])) {
    $_SESSION['token']=mysqli_real_escape_string($db,$_GET['token']);
}
// DIGITE UMA NOVA SENHA
if (isset($_POST['new_password'])) {
    $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
    $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);

    // Pega o token que veio do link do email
    $token = $_SESSION['token'];
    if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "<p class='tetx_login'>Senha necessária!");
    if ($new_pass !== $new_pass_c) array_push($errors, "<p class='tetx_login'>Senhas não coincidem!");
    if (count($errors) == 0) {
        // seleciona o email da base de dados.
        $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
        $results = mysqli_query($db, $sql);
        $email = mysqli_fetch_assoc($results)['email'];

        if ($email) {
            $new_pass = md5($new_pass);
            $sql = "UPDATE users SET password='$new_pass' WHERE email='$email'";
            $results = mysqli_query($db, $sql);
            header('location: painel.php');
        }
    }
}
?>