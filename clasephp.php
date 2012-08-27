<html>
	<head><title>
		CLASES DE PHP RECONDANDO
	</title>
	
	</head>
	<body>




<?php
echo '<h3>CLASE EXTREMA DE PHP</h3>';
echo 'variables';
$strign="heroes  de dota";
$numerico="101001";
echo 'este es un tipo de variable'.$strign.'con otro'.$numerico.'<br/>';
echo '<input type="text">';
$numero1=$_GET['numero'];
$numero2=$_GET['variable'];
$resultado=$numero1+$numero2;
echo '<hr>';
?>
<form action="" method="GET">
	<input type="text" name="numero" value=""/><br/>
	<input type="text" name="variable" value=""/><br/>
	<input type="text" name="resultado" value="<?php echo $resultado; ?>"/><br/>
	<input type="submit" name="evaluar" value="evaluar"/>
	</form>
	<?php
	if (isset($evaluar) and $resultado>10){
		echo'aprobado<br/>';
		echo '<a href="trance/index.html" target="_blank">Enlace</a>';
	}else{
		echo'desaprobado<br/>';
	}

	?>
	<form action="" method="POST">
	<input type="text" name="nombre"/>
	<input type="submit" name="ejeuta" value="ejecute" />
	<?php
	echo  $_SERVER [ 'SERVER_NAME' ];
	echo 'Hello ' . htmlspecialchars($_POST["nombre"]) . '!';
	?>
	</form>
	<h2>CLASE DEL FOR</h2>
<?php
$b=10;
for($i=1;$i<=$b;$i++){//para el mas es la scuencia si no le pones los parametros correspondientes
	echo'xhola<br/>';
}
$vector = array( 
   "uno" => 1, 
   "dos" => 2, 
   "tres" => 3, 
   "diecisiete" => 17 
); 
foreach($vector as $indice => $valor) { 
   print "$vector[$indice] => $valor.n"; 
} 
echo '<hr>';
$array = array(1, 2, 3, 4);//observar bien este ejemplo
foreach ($array as &$valor) {
    $valor = $valor * 2;
	echo $valor;
}
unset($valor);//La referencia del $valor y el último elemento del array permanecen aún después del bucle foreach. Se recomienda destruirlos con unset().
 /* tambien puede ser de esta forma*/

/*foreach (array(1, 2, 3, 4) as &$valor) {
    $valor = $valor * 2;
}*/
echo'<hr>';

$array = array("uno", "dos", "tres");
reset($array);
while (list($clave, $valor) = each($array)) {
    echo "Clave: $clave; Valor: $valor<br />\n";
}

foreach ($array as $clave => $valor) {
    echo "Clave: $clave; Valor: $valor<br />\n";
}
echo'<hr>';
$maestro=array("isaia","roandl","macuri","mamani");
foreach($maestro as $valor){
	echo $valor.'<br/>';
}
//entoces llegamos a la conclusion que el foreach me muestra todo a cambio del for
echo '<hr>';
echo'<h3>FACTORIAL</h3>';
?>
<?php
$texto=$_POST['texto'];
$fac=1;
?>
<form action="" method="POST"id="formas">
	<style type="text/css">
		input{outline:none;border:0px;}
		#formas{background:#585858;width:220px;height:25px;padding:10px;border-radius:10px;	}
		/*input{outline:none;border:0px;margin-left:5px;margin-top:px;}*/
	</style>
	<input type="text" name="texto" value="" />
	<input type="submit" name="jac" value="jac"/>
	
		</form>
<?php
for($i=1;$i<=$texto;$i++){
	$fac=$fac*$i;
}
echo $fac;
echo'<hr>';
?>
<?php
$a=0; //Inializamos la variable en 0
while($a<=10){//el bucle es mientras este sea verdad y que me aga una accion hasta que este sea falsa
$a++; //Aumentamos $i en uno
echo "i ahora equivale a ".$a."</br> "; //Mostramos texto
}
echo "Fin del bucle while. El bucle while terminó en ".$a."";
echo'<hr>';
$vino=1;

while ($vino <= 10) {
$vino++;
	echo'vale'.$vino.'aqui<br/>';	
}
echo'termino en'.$vino.'q';
echo'<hr>';
?>

<?php
$avion=$_POST['avion'];
$mano=array($_POST['avion']);
?>
<form action="" method="POST">
	<?php
	foreach($mano as $valor){
		echo $valor;
	}
	?>
	<input type="text" name="avion"/><input type="submit" name="ejecuta" value="ejecuta"/>
</form>

</body>
</html>