<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<?php
 require_once 'core/UsuarioPrincipal.php';
 $usuarios = Usuario::recuperarTodos();
?>
  <h4>Bienvenido Jaime</h4>
  <h6>Cargo: Chofer de entrega</h6>
  <ul>
     <?php foreach($usuarios as $item): ?>
     <li> <?php echo $item['correo'] . ' - ' . $item['nombre']; - $item['apellidos']; ?> </li>
     <?php endforeach; ?>
