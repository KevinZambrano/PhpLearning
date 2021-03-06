<html>
<head>
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/smoke.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>
<h1 style="margin: 6px;">Registro Usuario</h1><br>
<form class="form-horizontal col-sm-8" action="controllers/agregarController.php" id="formEmpty" method="get">
  <div class="form-group">
    <label class="control-label col-sm-2" for="correo">Correo:</label>
    <div class="col-sm-5">
      <input type="email" required="" class="form-control" name="correo" id="correo" placeholder="Ejemplo@mail.com">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2"  for="nombre">Nombre:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required name="nombre" id="nombre" placeholder="Ejemplo: Juan">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="apellidos">Apellidos:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required name="apellidos" id="apellidos" placeholder="Ejemplo: Perez">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="genero">Genero:</label>
    <div class="col-sm-5">
      <select class="form-control" name="genero" id="genero" required>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" required name="password" id="password" placeholder="Ingresa password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" class="btn btn-info" id="btnEmpty">Registrar</button>
    </div>
  </div>
</form>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Smoke -->
<script src="js/smoke.min.js"></script>
<script src="js/validacion.js"></script>
<script src="lang/es.min.js"></script>
</body>
</html>
