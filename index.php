<?php
$titulo="Mi Web App";
$a=0;
$b=5;
?>
<html>
<meta charset="utf8">
<title><?php echo $titulo;?></title>
<link rel="stylesheet" type="text/css" href="estilobase.css">
<body>
<?php
/*
primer codigo de prueba
*/
if(isset($titulo)){
if($titulo!=null){
	echo "hola mundo";
}
else{
	echo "algo sucedio";
}
}

$a=$b;
$b++;

echo"el valor de la variable a=$a y el de b=$b";
?>
<ul>
<?php
for($i=0;$i<$b;$i++){
	echo "<li>Hola mundo $i</li>\n";
}
?>
<h1>VINCULOS</h1>
<h2>TAG "a"</h2>
<a class="uno" href="pagina1.php">Link a mi pagina 01</a>
<a class="dos" href="pagina2.php">Link a mi pagina 02</a>
</ul>
</body>
</html>
