<! DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta name="viewport"
    	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="login">
    <h1 style="margin: 6px;">Login</h1><br>
    <form name="loginform" id="loginform" class="form-horizontal col-sm-8" action="loginController.php" method="post">
      <div class="form-group">
        <label class="control-label col-sm-2" for="correo">Correo:</label>
        <div class="col-sm-5">
          <input type="email" class="form-control" name="correo" id="correo" placeholder="Ejemplo@mail.com">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="password">Password:</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" name="password" id="password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-5">
          <input type="submit" class="btn btn-success" name="btn" id="btn" value="Ingresar">
        </div>
      </div>
    </form>
  </div>
  </body>
</html>
