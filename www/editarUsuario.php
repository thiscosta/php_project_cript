<?php

session_start();
include("conexao.php");

$userId = $_SESSION['id'];

if (empty($userId)) {
	echo "ID do usuário não informado";
	echo "<meta http-equiv='refresh' content='3;url=listar.php'>";
	exit();
}

$query = "SELECT id, username, hash, name, email FROM users where id = $userId";
$result = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
$row = mysqli_num_rows($result);

$mensagem = "";
$usuario = null;

if ($row) {
	$usuario = mysqli_fetch_object($result);
} else {
	$mensagem = "Nenhum usuario encontrado";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>User Edit</title>
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
</head>

<body>

	<div class="container-login">
		<div class="container-form-login">
			<form action="editarUsuarioBD.php" method="POST">
				<span class="form-register">
					Edit User
				</span>

				<div class="mb-3">
					<label for="inputName" class="form-label">User ID</label>
					<input class="form-control" readonly type="text" name="id" placeholder="ID" value="<?php echo htmlspecialchars($usuario->id); ?>">
				</div>

				<div class="mb-3">
					<label for="nomin" class="form-label">Real Name</label>
					<input type="text" id="nomin" class="form-control" name="name" placeholder="name" value="<?php echo htmlspecialchars($usuario->name); ?>">
				</div>

				<div class="mb-3">
					<label for="emailzin" class="form-label">Email address</label>
					<input type="email" id="emailzin" class="form-control" name="email" placeholder="email" value="<?php echo htmlspecialchars($usuario->email); ?>">
				</div>

				<div class="mb-3">
					<label for="inputUsername" class="form-label">Username</label>
					<input type="text" class="form-control" id="inputUsername" name="username" value="<?php echo htmlspecialchars($usuario->username); ?>">
				</div>

				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input type="password" class="form-control" name="password" id="exampleInputPassword1" value="<?php echo htmlspecialchars($usuario->password); ?>">
				</div>
				<div class="register-button" style="display:flex; justify-content:space-between; align-items:center;">
					<a href="index.php" class="btn btn-primary"> Back </a>
					<button type="submit" class="btn btn-primary">Submit</button>
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
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>