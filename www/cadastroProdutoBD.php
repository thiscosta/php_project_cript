<?php

if(
    !isset($_POST['name']) 
    && !isset($_POST['quantity'])
){
    echo "Dados incompletos para cadastro";
    exit;
}

include("conexao.php");
include("hash.php");

$name = $_POST['name'];
$quantity = $_POST['quantity'];

//var_export($_POST);
$hash = generateUniqueHash();

$query = "INSERT INTO products (id, name, quantity) VALUES ('$hash', '$name', '$quantity')";
mysqli_query($conexao, $query) or die(mysqli_error($conexao));


header("Location: listarProduto.php");

