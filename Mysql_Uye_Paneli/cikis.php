<?php
session_start();
session_destroy();
echo"<center> ÇIKIŞ YAPTINIZ ANASAYFAYA GİYOSUNUZ</center>";
header("Refresh:2;url=index.php"); 
?>