<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	//Tarih İşlemleri...
echo @date("d M Y l");//Bugunun Tarihi
echo "<br/>";
echo @date("d F Y l",time()+24*60*60);//Yarının Tarihi
echo "<br/>";
echo @date("d F Y l",mktime(0,0,0,11,05,2016));//Girilen Tarihin Hangi Güne Denk Geldiğini Bulma
echo "<br/>";
echo @date("z");//Sayısal şekilde yılın gününü verir



	?>
</body>
</html>