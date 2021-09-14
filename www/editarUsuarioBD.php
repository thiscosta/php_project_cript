<?php

if(
    !isset($_POST['name']) 
    && !isset($_POST['email']) 
    && !isset($_POST['username']) 
    && !isset($_POST['password'])
    && (!isset($_POST['id']) || !isset($_POST['hash']))
){
    echo "Dados incompletos para atualização";
    exit;
}

include("conexao.php");
include("hash.php");

$id = $_POST['id'];
$hash = $_POST['hash'];
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

//var_export($_POST);
$hash = generateUniqueHash();
$hashedPassword = generatePassword($password, $hash);

$query = "UPDATE users SET 
    username = '$username',
    password = '$hashedPassword',
    name = '$name',
    email = '$email'
WHERE id = $id";

mysqli_query($conexao, $query) or die(mysqli_error($conexao));


header("Location: listar.php");

