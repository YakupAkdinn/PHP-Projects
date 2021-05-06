<?php
session_start();
if(!isset($_SESSION["giris"])){
header("Location:index.php");
}
else{
echo"<center>UYE SAYFASINA WELCOME<b>".$_SESSION["kadi"]."</b>";
echo"</br><a href=cikis.php>Güvenli çıkış</a></center>";
}
?>