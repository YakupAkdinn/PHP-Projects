<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body><form action="" method="post">
<input type="text" placeholder="DERECE GİR" name="t"/><br/>
<input type="radio"  name="a" value="c" id="a1"/>°C'dan
<input type="radio"  name="a" value="f"id="a2"/>F'dan
<input type="radio"  name="a" value="k" id="a3"/>K'dan<br/>
<input type="radio"  name="b" value="c1" id="b1"/>°C'a
<input type="radio"  name="b"value="c2"id="b2"/>F'a
<input type="radio"  name="b" value="c3"id="b3"/>K'a<br/>
<input type="submit" value="Gönder"/>
</form>
	<?php
	if($_POST){
	$top=0;
	$tp=0;
	$sayi=$_POST["t"];
	
	$i=$_POST["a"];
	$s=$_POST["b"];
	if(($i=="c")&&($s=="c1")){
	echo $sayi."Celsius Eder";
	} 
	else if(($i=="c")&&($s=="c2")){
	$top=$sayi*1.8+32;
	echo $top."Fahrenheit Eder.";}
	
	else if(($i=="c")&&($s=="c3")){
	$top=273+$sayi;
	echo $top."Kelvin Eder.";}
	
	
	
	else if(($i=="f")&&($s=="c1")){
	$top=($sayi1-32)/1.8;
	echo $top."Celsius Eder.";}
	
	else if(($i=="f")&&($s=="c2")){
	echo $sayi."Fahrenheit Eder.";}
	
	else if(($i=="f")&&($s=="c3")){
	$tp=($sayi-32)/1.8;
	$top=$tp+273;
	echo $top."Kelvin Eder.";}
		
	
	else if(($i=="k")&&($s=="c1")){
		$top=$sayi-273;
		echo $top."Celsius Eder.";}
	
	else if(($i=="k")&&($s=="c2")){
		$tp=$sayi-273;
		$top=$tp*1.8+32;
		echo $top."Fahrenheit Eder.";}
		
	else if(($i=="k")&&($s=="c3")){
		
		echo $sayi."Kelvin Eder.";}
	
	}
	
	?>
</body>
</html>