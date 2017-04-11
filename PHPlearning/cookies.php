<?php
$color = '';

if(empty($_COOKIE['color'])){

}
//"isset" verifica si una variable o atributo esta definido
if(isset($_POST['miradio'])){
	if($_POST['miradio']==1){
			setcookie('color','red',time() + (60*60),'/');
			header('location: cookies.php');
	}else if($_POST['miradio']==2){
			setcookie('color','blue',time() + (60*60),'/');
			header('location: cookies.php');
	}
}
?>

<html>
	<head>
	<title>Mis cookies</title>
	</head>
	<body style="background-color:<?php echo $color; ?>;">
	<form action="cookies.php" method="POST">
		<label><input type="radio" name="miradio" value="1">Elegir color rojo</label><br>
		<label><input type="radio" name="miradio" value="2">Elegir color azul</label><br>
		<input type="submit" value="Elegir color de fondo	">
	</form>
</body>
</html>
