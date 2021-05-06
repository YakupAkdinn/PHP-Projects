<?php
include("ayarlar.php");
if($_POST){
$kadi=$_POST["kadi"];
$sifre=$_POST["sifre"];
$sifre_tekrar=$_POST["sifre_tekrar"];
if(empty($kadi) or empty($sifre) or empty($sifre_tekrar)){
		echo"Lütfen kadi ve şifre doldur";
		header("refresh:2;url=kayit_form.html");
}else{
if($sifre_tekrar==$sifre){
$sifre_yeni=md5($sifre);
$sonuc=mysql_query("insert into uye(kadi,sifre) values ('$kadi','$sifre_yeni')");
if($sonuc){
echo "kayıt başarılı";
header("refresh:2;url=index.php");
}else{
echo"kayıt başarısız";
}
}else{
echo"Şifreler uyuşmuyor";
header("refresh:2;url=kayit_form.html");
}
}
}else{	
echo"hatalı giriş";
}	


?>