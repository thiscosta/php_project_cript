<?php

session_start();
include("conexao.php");
include("hash.php");

if(empty($_POST['username']) || empty($_POST['password'])){
    echo "Usuário ou senha não informado";
    echo "<meta http-equiv='refresh' content='3;url=index.php'>";
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];

$select = "SELECT * FROM users WHERE username = '{$username}'";

$query = mysqli_query($conexao, $select);
$row = mysqli_num_rows($query);


if($row){
    $usuario = mysqli_fetch_object($query);
    if(checkPassword($password, $usuario->password, $usuario->hash)){
        $_SESSION['usuario'] = $username;
        $_SESSION['autorizacao'] = true;
        header("Location: index.php");
        exit();
    }
}

$_SESSION['autorizacao'] = false;
header("Location: login.php");
exit();


