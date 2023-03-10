 <!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corripio</title>
    <link href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="javascript.js"></script>
  </head>
  <body>
    
 
  <div class="container">
    <div class="row">
   
    </div>
    <div class="row">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >
      <!-- parte de facturacion-->
  <div class="mb-3">
    
  <h1> Datos  de Facturacion </h1>
</br> 
    <label for="cliente" class="form-label"><h3>Cliente:</h3></label>
   
    <input type="text" class="form-control" id="cliente" name="nombre" placeholder="Nombre y apellido del cliente"> 
  
  

    <label for="documento" class="form-label"><h3>Documentos:</h3></label>

    <input type="text" class="form-control" name="documentacion" id="documentacion" placeholder="Cedula">

    <select name="select" class="form-select" aria-label="Default select example">
  <option selected>Pais</option>
  <option value="1">Republica Dominicana</option>
  <option value="2">Mexico</option>
  <option value="3">Estados Unidos</option>
</select>
    <input name="postal" type="text" class="form-control" id="documentacion8" placeholder="Codigo Postal">
   
  
    <label for="cliente" class="form-label"><h3>Telefono: </h3></label>
    <input type="text" class="form-control" name="telefono" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Numero de telefono">
    
 
  
    <label class="form-check-label" for="exampleCheck1"><h4>¿Factura con CNF? </h4> </label>
    <input name="check1" type="checkbox" class="form-check-input" id="exampleCheck1" value="true">
    <label class="form-check-label" for="exampleCheck1"><h4>Si, facturar a nombre de una empresa </h4></label>

</br>
</br>
  <input name="check2" type="checkbox" class="form-check-input" id="check" value="true">
  <label class="form-check-label" for="check"><h4>Estoy de acuerdo con los Terminos y Condiciones </h4></label>
     
 
  <button type="submit" class="btn2 btn-primary"> <a class= "link" href="envio.php">Siguiente </a></button>
    
    <?php if (!empty($errores)): ?>
							<div class="alert error">
                                <?php echo $errores; ?>
                        </div>
							<?php elseif(!empty($enviado)): ?>
								<div class="alert success">
									<p>Enviado correctamente</p>
								</div>
							<?php endif ?>
    </div>
  <!--partede detalle de pedido-->  
  <div class="mb-4" aling="right">
    
    <h1> Detalle del pedido </h1>
  </br> 
  <label for="cliente" class="form-label"><h3>Cliente:</h3></label>
  <label for="cliente" class="form-label"><h3>nombre del cliente</h3></label>
  <br/>

  <label for="importe" class="form-label"><h3>Importe total:</h3></label>
  <br/>

      <label for="documento" class="form-label"><h3>Observaciones </h3></label>
    <input type="text" class="form-control" id="documentacion" placeholder="Mesaje de observacion">

</form> 
</div>
</div>
    <script src="js/jquery-3.6.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


