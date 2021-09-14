<?php

session_start();
include("conexao.php");

if(empty($_POST['search'])){
    echo "Campo de busca do produto não informado";
    echo "<meta http-equiv='refresh' content='3;url=index.php'>";
    exit();
}

$search = $_POST['search'];

$select = "SELECT
id, name, quantity, DATE_FORMAT(STR_TO_DATE(convert_tz(created_at,@@session.time_zone,'-03:00'), '%Y-%m-%d'), '%d/%m/%Y') as 'data'
FROM products WHERE id = '$search' OR
    name = '$search' OR
    ". (is_numeric($f) ? "quantity = $search OR " : "" ). "
    created_at = '$search'";

$produto = mysqli_fetch_object(mysqli_query($conexao, $select));

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Buscar produto</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <h2 style="margin-bottom: 20px;">Produtos encontrados</h2>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Data de cadastro</th>
                    </thead>
                    <tbody>
                        <?php
                            $fuso = new DateTimeZone('America/Sao_Paulo');
                            echo "<tr>
                                    <td>" . $produto->id .      "</td>
                                    <td>" . $produto->name . "</td>
                                    <td>" . $produto->quantity .   "</td>
                                    <td>" . $produto->data .   "</td>
                                </tr>";
                            
                        ?>
                    </tbody>
                </table>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

