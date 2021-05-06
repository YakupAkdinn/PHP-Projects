<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
//1 ile 100 arasında rastgele 2 sayının çarpımını bulan program

	
	$a=array();
	$b=array();
	$c=array();


	//rastgele sayı döngüsü
	for($i=0;$i<10;$i++){
	$a[]=rand(0,100);
	$b[]=rand(0,100);
	}


	//çarpma yapmak için döngü
	for($k=0;$k<10;$k++){
	$c[]=$a[$k]*$b[$k];
	}


	//ekrana yazdırma kısmı
	for($j=0;$j<10;$j++){
	echo $a[$j]."x".$b[$j]."=".$c[$j]."<br />";
	
	}
	
	
	
	
	
	
	
	?>
</body>
</html>