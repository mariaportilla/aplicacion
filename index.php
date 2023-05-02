<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primera Aplicacion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script> src="js/bootstrap.min.js"</script>
</head>
<body>
    <section>
        
        <form method="POST" action="registrar.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">identificador</label>
    <input type="text" class="form-control" id="identificador" name="identificador " aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Detalle</label>
    <input type="text" class="form-control" id="detalle" name="detalle">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
    </section>
</body>
</html>