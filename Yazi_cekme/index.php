<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	// $desen="/<title>(.*)<\/title>/i";
		
	// $ceken=file_get_contents("https://www.meb.gov.tr");
	// preg_match_all($desen,$ceken,$giris);
	// echo $giris[1][0];
	// var_dump($giris);
	
	 $bul="/http_/";
	 $degis="http://";
	 $metin="okulun web sitesi http_turktelekomatl.meb.gov.tr";
	 echo $metin;
	 echo "<br/>";
	 echo preg_replace($bul,$degis,$metin);
	//metin içinde bulunan anlamsız ifadeleri bizim belirlediğiz ifadelerle değiştirir.

	?>
</body>
</html>