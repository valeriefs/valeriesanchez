<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corripio</title>
    <link href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>


  <div class="container">
    
    
    </div>
    <div class="row">
    <form>

    <div class="mb-3">
      <h1>Datos de Envio</h1>
    <label class="form-check-label" for="exampleCheck1"><h3>Envio a domicilio</h3></label>
    <input type="checkbox" class="form-check-input" id="exampleCheck1">

    <label class="form-check-label" for="exampleCheck1"><h3>Retirar en la Sucursal </h3></label>
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
</br>
</br>
 
    <label for="cliente" class="form-label"><h3>Destinatario </h3></label>
    <input type="email" class="form-control" id="cliente" aria-describedby="emailHelp" placeholder="Nombre del cliente">
 
   
  
  
    <label for="documento" class="form-label"><h3>Dirrecion </h3></label>
    <input type="text" class="form-control" id="documentacion" placeholder="Dirrecion">
   
  
  
    <button type="submit" name="submi" class="btn1" aling ="left" onclick="alert('Enviado correctamente');"> Enviar </button>
    <button type="submit" class="btn btn-primary"> <a class= "link" href="princi.php">Atras </a></button>
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