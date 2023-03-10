<?php 

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];

	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

	} else {
		$errores .= 'Por favor ingresa un nombre <br>';
	}

	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingresa un correo valido <br>';
		}
	} else {
		$errores .= 'Por favor ingresa un correo <br>';
	}


	if (!empty($telefono)) {
		$telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_FLOAT);
		
		if (!filter_var($telefono, FILTER_SANITIZE_NUMBER_FLOAT)){
			$errores .= 'Por favor ingresa un número de telefono valido <br>';
		}

	} else {
		$errores .= 'Por favor ingresa un número de telefono <br>';
	}

	if (!$errores) {
		$enviar_a = 'parrabrian394@gmail.com';
		$asunto = 'Correo enviado desde Formulario de contacto';
		$mensaje_preparado = "De: $nombre \n";
		$mensaje_preparado .= "correo: $correo \n";

		
		//mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = 'true';
	}

}


require 'index.view.php'

?>