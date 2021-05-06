<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>
	<body>
<form action="" method="post" name=""> 
<label>1.Sayı</label> <input type="text" name="sayi1" id="sayi1"  /><br /> 
<label>Daire Alan:</label> <input type="radio" value="alan" name="daire" id="alan" /><br /> 
<label>Daire Çevre:</label> <input type="radio" value="cevre" name="daire" id="cevre" /><br /> 
 
<input type="submit" name="hesapla" value="Hesapla" /> 

	<?php
		$s1=@$_POST["sayi1"];
		$secim=@$_POST["daire"];
 
       switch($secim){
case "alan":
$sonuc=3*$s1*$s1;
echo "Dairenin Alanı :".$sonuc;break;
 
case "cevre":
$sonuc=2*3*$s1;
echo "Dairenin Çevresi :".$sonuc;break;
default: echo "sayı giriniz...";}
 
?>




</body>
</html>