<?php
include("verificaLogin.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pagina Inicial</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
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

	<style>
		#image {
			position: fixed;
		}
	</style>
	<script>
		function Init() {
			picture = document.getElementById('image');

			spaceW = screen.height - picture.height;
			spaceH = screen.width - picture.width;

			setInterval(moveIt, 500);
		}

		function moveIt() {
			picture.style.top = Math.round(Math.random() * spaceW) + "px";
			picture.style.left = Math.round(Math.random() * spaceH) + "px";
		}
	</script>
</head>

<body onload="Init()">
	<div class="container-login">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark" width="100%" style="margin-top: -490px; border-radius: 10px;">
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
			<p style="font-size: 3em;" align="center">
				Welcome, <?php echo $_SESSION['usuario'] ?>!
			</p>
			<p align="center">
				<img id="image" width="500" height="500" src="https://c.tenor.com/JdqOAJYXiRsAAAAM/bom-dia-que-o-nosso.gif" alt="">
				</>
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

	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>