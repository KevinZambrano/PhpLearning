<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<?php
 require_once 'core/UsuarioPrincipal.php';
 $usuarios = Usuario::recuperarTodos();
?>
<h4>Cantidad de usuarios: <?php echo count($usuarios); ?></h4>
