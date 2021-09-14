<?php

session_start();
include("conexao.php");

$userId = $_GET['userId'];

if(empty($userId)){
    echo "ID do usuário não informado";
    echo "<meta http-equiv='refresh' content='3;url=listar.php'>";
    exit();
}

$query = "SELECT id, username, hash, name, email FROM users where id = $userId";
$result = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
$row = mysqli_num_rows($result);

$mensagem = "";
$usuario = null;

if($row) {
	$usuario = mysqli_fetch_object($result);
}
else {
	$mensagem = "Nenhum usuario encontrado";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Editar usuário</title>
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
                <h2 style="margin-bottom: 20px;">Editando usuário: <?php echo "$usuario->name (ID: $usuario->id)" ?></h2>
                <form class="login100-form validate-form" action="editarUsuarioBD.php" method="POST">


					<div class="wrap-input100">
						<input class="input100" readonly type="text" name="id" placeholder="ID" value="<?php echo htmlspecialchars($usuario->id); ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" readonly type="text" name="hash" placeholder="Hash" value="<?php echo htmlspecialchars($usuario->hash); ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="name" placeholder="Nome" value="<?php echo htmlspecialchars($usuario->name); ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" value="<?php echo htmlspecialchars($usuario->email); ?>">
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="username" placeholder="Usuario" value="<?php echo htmlspecialchars($usuario->username); ?>">
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Alterar
						</button>
					</div>

				</form>
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

