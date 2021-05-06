<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	//unlink ile dosya silme

	//aynı konumda olan dosyayı siler
	
	if(file_exists("deneme.txt")){
	unlink("deneme.txt");
	echo"dosya silindi";}
	else{
	echo "dosya mevcut değil";
	}
	
	
	?>
</body>
</html>