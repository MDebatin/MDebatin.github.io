<?php
session_start();

// Inicializa variaveis
$username = "";
$email    = "";
$phone = "";
$name = "";
$errors = array();

// conecta com a DB
$db = mysqli_connect('localhost', 'root', '', 'teste');

// CADASTRO DE USUARIO
if (isset($_POST['reg_user'])) {
    // recebe os inputs do formulario
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $name = mysqli_real_escape_string($db, $_POST['name']);;
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);;
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // valida o formulario, se esta inserindo tudo corretamente ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Usuário é necessário!"); }
    if (empty($name)) { array_push($errors, "Nome é necessário!"); }
    if (empty($email)) { array_push($errors, "Email é necessário!"); }
    if (empty($phone)) { array_push($errors, "Telefone é necessário!"); }
    if (empty($password_1)) { array_push($errors, "Senha é necessário!"); }
    if ($password_1 != $password_2) {
        array_push($errors, "As senhas não coincidem!");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "<p class='tetx_login'>Usuário já cadastrado!</p>");
        }

        if ($user['email'] === $email) {
            array_push($errors, "<p class='tetx_login'>Email já cadastrado!</p>");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO users (username, name, email, phone, password) 
  			  VALUES('$username','$name', '$email','$phone', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['phone'] = $phone;
        $_SESSION['success'] = "Você está logado!";
        header('location: painel.php');
    }
}
// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "<p class='tetx_login'>Usuário necessário!");
    }
    if (empty($password)) {
        array_push($errors, "<p class='tetx_login'>Senha necessária!");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($db, $query);
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['success'] = "You are now logged in";
            header('location: painel.php');
        }else {
            array_push($errors, "<p class='tetx_login'>Usuário ou senha incorretos!");
        }
    }
}
?>
