<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
function sayi($taban,$üs){
$s=1;
for($i=1;$i<=$üs;$i++){
$s*=$taban;
}
return $s;

}
echo sayi(2,6);





	?>
</body>
</html>