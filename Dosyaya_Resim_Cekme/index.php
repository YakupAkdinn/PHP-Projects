<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>



	<?php
	if(isset($_FILES["dosya"])){
	$hata =$_FILES["dosya"]["error"];
	if($hata !=0){echo "Yüklenirken Hata Oluştu;";}
	else{
	$boyut=$_FILES["dosya"]["size"];
	if($boyut >(1024*1024*3)){echo "Dosya 3Mb den büyük olamaz kardiiiş";}
	else{
	$tip=$_FILES["dosya"]["type"];
	$isim=$_FILES["dosya"]["name"];
	$uzanti=explode(".",$isim);
	$uzanti=$uzanti[count($uzanti)-1];
	if($tip !="image/jpeg" || $uzanti !="jpg"){echo "Yalnızca JPG dosyaları gönderilebilir";}
	else{
	$dosya=$_FILES["dosya"]["tmp_name"];
	@copy($dosya,"resim/".$_FILES["dosya"]["name"]);
	echo "Dosya Upload EDildi";
	}
	}
	}
	}
	else{
	echo '<form action=""method="post" enctype="multipart/form-data">
RESİM:
<input type="file" name="dosya"/>
<input type="submit" value="Gönder"/></form>';
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
</body>
</html>