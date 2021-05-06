<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    /*
$a=array();
$b=array();
$c=array();
for($i=0;$i<10;$i++){
$a[]=rand(0,10);
$b[]=rand(0,15);}
for($j=0;$j<10;$j++) {
    $c[]=$a[$j]*$b[$j];
}
for($d=0;$d<10;$d++){
    echo $a[$d]."x".$b[$d]."=".$c[$d]."<br>";
}

$a=array();
for($i=0;$i<10;$i++){
    $a[]=rand(0,50);
}
$eb=$a[0];
$ek=$a[0];
for($j=0;$j<10;$j++){
    echo $a[$j]."<br>";

if($eb<$a[$j])
{
    $eb=$a[$j];
}
if($ek>$a[$j])
{
    $ek=$a[$j];
}}
echo "En Büyük Sayı".$eb;
echo "En Küçük Sayı".$ek;

function ikilik($sayi){
$dizi=array();
while($sayi>1)
{
    $dizi[]=$sayi%2;
    $sayi=floor($sayi/2);
    if($sayi==1) $dizi[]=1;
}

krsort($dizi);
    foreach($dizi as $sonuc)
    {
        echo $sonuc;
    }


}
ikilik(56)



$simdi=time();
echo "Şimdi:".$simdi;
echo "<br/>";
$yarin=$simdi+24*60*60;
echo "Yarın:".$yarin;*/
$sincik=time();
$dogum=@mktime(0,0,0,07,16,2001);
$fark=$sincik-$dogum;
$gun=floor($fark/(24*60*60));
echo $gun."gündür yaşıyosun.";




?>
</body>
</html>