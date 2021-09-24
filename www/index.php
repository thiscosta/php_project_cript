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

		#image2 {
			position: fixed;
		}

		#image3 {
			position: fixed;
		}

		#image4 {
			position: fixed;
		}
	</style>
	<script>
		function Init() {

			picture = document.getElementById('image');
			picture3 = document.getElementById('image3');
			picture4 = document.getElementById('image4');


			spaceW = screen.height - picture.height;
			spaceW3 = screen.height - picture3.height;
			spaceW4 = screen.height - picture4.height;


			spaceH = screen.width - picture.width;
			spaceH3 = screen.width - picture3.width;
			spaceH4 = screen.width - picture4.width;

			setInterval(moveIt, 500);
		}

		function moveIt() {


			picture.style.top = Math.round(Math.random() * spaceW) + "px";
			picture.style.left = Math.round(Math.random() * spaceH) + "px";

			picture3.style.top = Math.round(Math.random() * spaceW3) + "px";
			picture3.style.left = Math.round(Math.random() * spaceH3) + "px";

			picture4.style.top = Math.round(Math.random() * spaceW4) + "px";
			picture4.style.left = Math.round(Math.random() * spaceH4) + "px";

		}
	</script>
</head>

<body onload="Init()">
	<div class="container-login">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark" width="100%" style="margin-top: -490px; border-radius: 10px;">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">cripto</a>
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

				<img id="image3" width="300" height="300" src="images/gregory-carinha.jpeg" alt="">
				<img id="image4" width="300" height="300" src="images/gregory-linguinha.jpeg" alt="">
				<img id="image" width="300" height="300" src="images/gregory-gritinho.jpeg" alt="">
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