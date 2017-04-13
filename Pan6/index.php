<! DOCTYPE html>
<html>
<head>
  <title>Pan 6</title>
  <meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<section>
<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Cuentas</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<style>
 /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
 .row.content {height: 550px}

 /* Set gray background color and 100% height */
 .sidenav {
   background-color: #f1f1f1;
   height: 100%;
 }

 /* On small screens, set height to 'auto' for the grid */
 @media screen and (max-width: 767px) {
   .row.content {height: auto;}
 }
</style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
<div class="container-fluid">
 <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="#">Pan 6</a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
   <ul class="nav navbar-nav">
     <li class="active"><a href="#">Dashboard</a></li>
     <li><a href="agregarUsuario.php">Agregar Usuario</a></li>
     <li><a href="#">Gender</a></li>
     <li><a href="#">Geo</a></li>
   </ul>
 </div>
</div>
</nav>

<div class="container-fluid">
<div class="row content">
 <div class="col-sm-3 sidenav hidden-xs">
   <h2>Pan 6</h2>
   <ul class="nav nav-pills nav-stacked">
     <li class="active"><a href="?op=inicio">Dashboard</a></li>
      <li><a href="?op=agregarUsuario">Agregar Usuario</a></li>
     <li><a href="#section3">Gender</a></li>
     <li><a href="#section3">Geo</a></li>
   </ul><br>
 </div>
 <br>
 <?php require_once 'redireccionador.php';?>
<div class="col-sm-9">
   <iframe src="<?php echo $contenido; ?>" style="width: 100%; height: 100%" name="formularios"></iframe>
 </div>
</div>
</div>
</section>
</body>
</html>
