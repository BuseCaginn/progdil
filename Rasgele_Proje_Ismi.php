<html xmlns="http://www.w3.org/1999/xhtml" lang="tr">
<head>
  <meta charset="utf-8">
</head>
<body>
<table border="1" bordercolor="#ff0000" align="center">

<?php
$tetikle = $_POST['tetikle'];
$dil = $_POST['dil'];

if ($tetikle == "1") {
	if ($dil == "tr") {
$sifatdizi = $sifatlar = array("Kırmızı", "Uzun", "Büyük", "Dar", "Sarı", "Tatlı", "Yuvarlak", "Şişman","Renkli");

$isimdizi = $isimler = array("Dolap", "Çay", "Kutu", "Penguen", "Araba", "Sopa", "Kedi", "Masa","Balina");
	}
	if ($dil == "en") {
$sifatdizi = $sifatlar = array("Red", "Long", "Big", "Tight", "Yellow", "Sweet", "Round", "Fat","Color");

$isimdizi = $isimler = array("Closet", "Tea", "Box", "Penguin", "Car", "Bat", "Cat", "Table","Whale");
	}
	
$tp_sifat = count($sifatlar);
$tp_isim  = count($isimler);

echo "<tr>";
		for ($i=0; $i < $tp_sifat; $i++)

				{
				  if (empty($sifatlar) )
					$sifatlar = $sifatdizi;
							$sifat = array_rand($sifatlar, 1);
								$sifatyaz = $sifatlar[$sifat];
							unset ($sifatlar[$sifat]);
					echo "<td>".$sifatyaz."</td>". PHP_EOL;
				}
echo "</tr><tr>";		
		for ($i=0; $i < $tp_isim; $i++)

				{
				  if (empty($isimler))
					$isimler  = $isimdizi;
						$isim  = array_rand($isimler, 1);
							$isimyaz  = $isimler[$isim];
						unset ($isimler[$isim]);
					echo "<td>".$isimyaz."</td>". PHP_EOL;
				}
echo "</tr>";
}else{
	echo "<center>Dil Seçiniz ...</center><br>";
}		
?>

</table>
<br><br>
<form action="sifatlar.php" method="POST">
<input type="hidden" name="tetikle" value="1">
<input type="hidden" name="dil" value="tr">
<center><button>Türkçe</button></center>
</form>

<form action="sifatlar.php" method="POST">
<input type="hidden" name="tetikle" value="1">
<input type="hidden" name="dil" value="en">
<center><button>English</button></center>
</form>
</body>
</html>