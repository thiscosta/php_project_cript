<?php

session_start();
include("conexao.php");

if (empty($_POST['search'])) {
	echo "Campo de busca do produto não informado";
	echo "<meta http-equiv='refresh' content='3;url=index.php'>";
	exit();
}

$search = $_POST['search'];

$select = "SELECT
id, name, quantity, DATE_FORMAT(STR_TO_DATE(convert_tz(created_at,@@session.time_zone,'-03:00'), '%Y-%m-%d'), '%d/%m/%Y') as 'data'
FROM products WHERE id = '$search' OR
    name = '$search' OR
    " . (is_numeric($f) ? "quantity = $search OR " : "") . "
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
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

	<div class="container-login">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark" width="100%" style="margin-top: -530px; border-radius: 10px;">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Navbar</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="listarProduto.php"> Products</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="listar.php">List Users</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" style="margin-left: 1300px;" href="editarUsuario.php"> <?php echo $_SESSION['usuario'] ?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="sessionDestroy.php">End Session</a>
							</li>

						</ul>
					</div>
				</div>
			</nav>
		</div>

		<div class="container">
			<h2 style="margin-bottom: 20px;">Produtos encontrados</h2>
			<table class="table table-dark">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Quantity</th>
					<th>Date</th>
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
		<a href="listarProduto.php" class="btn btn-primary"> Back </a>
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

	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>