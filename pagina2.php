<?php
$titulo="Pagina 02";
?>
<html>
<meta charset="utf8">
<title><?php echo $titulo;?></title>
<link rel="stylesheet" type="text/css" href="estilobase.css">
<body>
<?php
if(isset($titulo)){
if($titulo!=null){
	echo "hola mundo";
}
else{
	echo "algo sucedio";
}
}
?>
<h1>PAGINA 02</h1>
<a class="dos" href="index.php">HOME</a>
</body>
</html>