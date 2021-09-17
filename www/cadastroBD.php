<?php

if (
    !isset($_POST['name'])
    && !isset($_POST['username'])
    && !isset($_POST['email'])
    && !isset($_POST['password'])
) {
    echo "Dados incompletos para cadastro";
    exit;
}

include("conexao.php");
include("hash.php");

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//var_export($_POST);
$hash = generateUniqueHash();
$hashedPassword = generatePassword($password, $hash);

$query = "INSERT INTO users (username, password, hash, name, email) VALUES ('$username', '$hashedPassword', '$hash', '$name', '$email')";
mysqli_query($conexao, $query) or die(mysqli_error($conexao));

echo $hash;
header("Location: login.php");
