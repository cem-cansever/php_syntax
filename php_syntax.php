<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<?php

$axc=6;
$axw=5;
echo $axc."-".$axw;
$nm=(double)10;
echo"<br><br>";
echo $nm;

echo"<br><br>";
echo var_dump($axc);
echo "<h2>".$axc."</h2>";
echo "<h2>" .$axc."-".$axw. "</h2>";

echo"<br><br>";

$metin = "İİBF";
echo "<h2>" ,"abc"," ".$metin. "</h2>";
echo "<h2>" ."abc"." ".$metin. "</h2>";

?> 


<?php
echo"<br><br>";
 echo "<h2>Selam!</h2>";
 echo "Merhaba Dünya!<br>";
 echo "Bu benim ilk PHP kodum!<br>";
 echo "Buradaki ", "metin ", "birden ", "çok ", "parametreyle 
oluşturuldu.";

?>

<?php
echo"<br><br>";
 $metin1 = "PHP öğren";
 $metin2 = "hergün";
 $x = 5;
 $y = 4;
 echo "<h2>" . $metin1 . "</h2>";
 echo "PHP çalış " . $metin2 . "<br>";
 echo $x + $y;
?>


<?php
echo"<br><br>";
 $x = 5985;
 var_dump($x);
 echo"<br><br>";
 $x = 10.365;
 var_dump($x);
?>


<?php
echo"<br><br>";
$msj="abc";
echo $msj."<br>";
echo $msj."<br>";
?> 

<?php
echo"<br><br>";
$ax="konu-1";
$st="php de stringler {$ax}";
echo $st[0]."<br>";
echo $st[4]."<br>";
echo $st."<br>";
echo "Karakter Sayısı : ".strlen($st)."<br>";
echo "Kelime Sayısı : ".str_word_count($st);
?>


<?php
echo"<br><br>";
$degisken = 'beyaznet';
$sonhali = substr($degisken,2,5); 
echo $sonhali;
?>


<?php
echo"<br><br>";
echo substr("Test Ediyoruz",5);
echo"<br><br>";
echo substr("Test Ediyoruz",-4);
echo"<br><br>";
echo substr("Test Ediyoruz",-4,3);
echo"<br><br>";
echo substr("Test Ediyoruz",-4,-3);
echo"<br><br>";
echo substr("Test Ediyoruz",5,2);
echo"<br><br>";
echo substr("Test Ediyoruz",5,-2);
?>








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>  
</body>
</html>









