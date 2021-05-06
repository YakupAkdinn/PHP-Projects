<?php
$baglanti=@mysql_connect("localhost","root","");
if($baglanti){
@mysql_select_db("ptt",$baglanti) or die ("Veritabanına bağlanılamadı");
}else{
echo"bağlantı hatası";
mysql_error();
}
?>