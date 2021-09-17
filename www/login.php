<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/main.css">
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

	<!--===============================================================================================-->
</head>

<body>

	<div class="container-login">
		<div class="container-form-login">
			<form class="form-login validate-form" action="seguranca.php" method="POST">
				<span class="form-title">
					Member Login
				</span>

				<div class="form-login-input" data-validate="Valid email is required: ex@abc.xyz">
					<input class="form-login-email-password" type="text" name="username" placeholder="Usuario">
					<span class="focus-form-login-email-password"></span>
					</span>

					<input class="form-login-email-password" type="password" name="password" placeholder="Senha">
					<span class="form-login-email-password"></span>
				</div>

				<div class="form-login-div-button">
					<button class="form-login-button" type="submit">
						Login
					</button>
				</div>

				<div class="text-center p-t-12">
					<span class="txt1">
						Forgot
					</span>
					<a class="form-login-links" href="#">
						Username / Password?
					</a>
				</div>

				<div class="text-center p-t-136">
					<a class="form-login-create-account" href="cadastro.php">
						Create your Account
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>
			</form>

		</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>

	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>