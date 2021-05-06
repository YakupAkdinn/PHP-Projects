<?php
session_start();
include("ayarlar.php");
if($_POST){
$kadi=$_POST["kadi"];
$sifre=md5($_POST["sifre"]);
$sonuc=mysql_query("select * from uye where kadi='$kadi' and sifre='$sifre'");
if(mysql_num_rows($sonuc)){
	$_SESSION["giris"]="true";
	$_SESSION["kadi"]=$kadi;
	header("Location:uye_sayfasi.php");
	}else{
		if($kadi=="" or $sifre==""){
		echo"KADİ VE ŞİFRE BOŞ BİRAKMA";
		header("refresh:2;url=index.php");
		}
		else{
		echo"kullanıcı adı/sifreyanlis";
		header("refresh:2;url=index.php");
		}
	}
}else{
echo'<form action"" method="POST">
<table border="0">
<th colspan="2">KULLANICI GİRİŞİ</th>
<tr>
<td>KULLANICI ADI:</td>
<td><input type="text" name="kadi"></td>
</tr>
<tr>
<td>ŞİFRE:</td>
<td><input type="password" name="sifre"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="GÖNDER"></td>
</tr>
</table>
</form>';
echo'<a href="kayit_form.html">YENİ KAYIT</a>';
}

?>