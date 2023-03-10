<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>login</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="estilos1.css">
</head>
<body>
	

		<br>

		<br>

		<form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<br>
			<br>
            <div class="wrap">
			<h1 align="center">Inicio de sesion:</h1>
			<br>
			<br>
			<br>
			<input type="text" class="form-control" name="nombre" placeholder="Nombre:" value="">

			<input type="text" class="form-control" name="correo" placeholder="Correo:" value="">

			<input type="password" class="form-control" name="telefono" placeholder="Contraseña:" value="">

            <button style="text-align: center;" type="submit" name="submit" class="btn btn-primary"> <a href="princi.php">Entrar</a></button>
			<br>

			<br>

			
		</div>
		</form>

		<br>

		<br>

	</div>
</body>
</html>