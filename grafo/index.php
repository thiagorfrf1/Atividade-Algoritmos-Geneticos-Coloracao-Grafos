<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<center>
<form method="post" action="index.php">
	Hall da Fama: <br>
	<input type="text" name="valor"> <br>
	<input type="submit" name="Desenhar Grafos" value="Desenhar Grafos">
</form>


<?php
	$valor = $_POST["valor"];

		$espaco0 = $valor[1];
		$espaco1 = $valor[4];
		$espaco2 = $valor[7];
		$espaco3 = $valor[10];
		$espaco4 = $valor[13];
		$espaco5 = $valor[16];
		$espaco6 = $valor[19];
		$espaco7 = $valor[22];
		$espaco8 = $valor[25];
		$espaco9 = $valor[28];


?>
<div id="imagem">
	<img src="i.png">
</div>
<div id="circulo0" 
<?php 
	if($espaco0 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco0 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco0 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
0
</div>
<div id="circulo1"
<?php 
	if($espaco1 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco1 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco1 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
	1
</div>
<div id="circulo2"
<?php 
	if($espaco2 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco2 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco2 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
	2
</div>
<div id="circulo3"
<?php 
	if($espaco3 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco3 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco3 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
	3
</div>
<div id="circulo4"
<?php 
	if($espaco4 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco4 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco4 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
	4
</div>
<div id="circulo5"
<?php 
	if($espaco5 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco5 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco5 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
5
</div>
<div id="circulo6"
<?php 
	if($espaco6 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco6 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco6 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
6
</div>
<div id="circulo7"
<?php 
	if($espaco7 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco7 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco7 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
	7
</div>
<div id="circulo8"
<?php 
	if($espaco8 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco8 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco8 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
	8
</div>
<div id="circulo9"
<?php 
	if($espaco9 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco9 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco9 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
	9
</div>
</center>



<center>

<?php
	$valor = $_POST["valor"];

		$espaco0 = $valor[33];
		$espaco1 = $valor[36];
		$espaco2 = $valor[39];
		$espaco3 = $valor[42];
		$espaco4 = $valor[45];
		$espaco5 = $valor[48];
		$espaco6 = $valor[51];
		$espaco7 = $valor[54];
		$espaco8 = $valor[57];
		$espaco9 = $valor[60];


?>
<div id="imagem">
	<img src="i.png">
</div>
<div id="circulo0" 
<?php 
	if($espaco0 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco0 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco0 == "2"){
		echo "class=\"amarelo\"\>";
	} else {
		echo "class=\"branco\"\>";
	}
	?>

</div>
<div id="circulo1"
<?php 
	if($espaco1 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco1 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco1 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
</div>
<div id="circulo2"
<?php 
	if($espaco2 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco2 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco2 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
</div>
<div id="circulo3"
<?php 
	if($espaco3 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco3 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco3 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
</div>
<div id="circulo4"
<?php 
	if($espaco4 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco4 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco4 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
</div>
<div id="circulo5"
<?php 
	if($espaco5 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco5 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco5 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>

</div>
<div id="circulo6"
<?php 
	if($espaco6 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco6 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco6 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>

</div>
<div id="circulo7"
<?php 
	if($espaco7 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco7 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco7 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
</div>
<div id="circulo8"
<?php 
	if($espaco8 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco8 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco8 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
</div>
<div id="circulo9"
<?php 
	if($espaco9 == "0"){
		echo "class=\"azul\"\>";
	}
	else if($espaco9 == "1"){
		echo "class=\"vermelho\"\>";
	}
	else if($espaco9 == "2"){
		echo "class=\"amarelo\"\>";
	}else {
		echo "class=\"branco\"\>";
	}
	?>
</div>
</center>


</html>