
<h4>While</h4> 
<?php
$galletas = 0;
while ($galletas < 10) {
    echo "$galletas, ";
    $galletas++;
}
?>

<h4>Do while</h4>

<?php
$galletas = 0;
do {
    echo "$galletas, ";
    $galletas++;
} while ($galletas < 10);
?>

<?php
$contador = 50;
do {
    echo "$contador, ";
    $contador--;
} while ($contador > 39);
?>

<h4>FOR</h4>

<?php
for ($galletas = 0; $galletas < 10; $galletas++) {
    echo "$galletas, ";
}
?>
<br>
<?php
for ( $i = 0; $i < 50; $i+=5 ){
echo "&nbsp;&nbsp; $i <br/> ";
}
?>