<html xmlns="http://www.w3.org/1999/xhtml" lang="tr">
<head>
	<meta charset="utf-8">
</head>
<body>

<?php

$tetikle = $_POST['tetikle'];
$dil = $_POST['dil'];

if ($tetikle == "1"){

	if ($dil == "tr"){
		$sifatlar = array("Kırmızı", "Uzun", "Büyük", "Dar", "Sarı", "Tatlı", "Yuvarlak", "Şişman","Renkli");
		$isimler = array("Dolap", "Çay", "Kutu", "Penguen", "Araba", "Sopa", "Kedi", "Masa","Balina");
	}

	if ($dil == "en"){
		$sifatlar = array("Red", "Long", "Big", "Tight", "Yellow", "Sweet", "Round", "Fat","Color");
		$isimler  = array("Closet", "Tea", "Box", "Penguin", "Car", "Bat", "Cat", "Table","Whale");
	}
	
$tp_sifat = count($sifatlar);
$tp_isim  = count($isimler);
$i = 0;

echo " ";
					
	while ( $i < $tp_sifat) {
		$sifat = array_rand($sifatlar, 1);
		$isim  = array_rand($isimler, 1);
							
		echo "".$sifatlar[$sifat]."_".$isimler[$isim];
		echo " ";
		unset($isimler[$isim]);
		unset($sifatlar[$sifat]);
		echo "<br>";

		$i += 1;
	}
	
	if(empty($sifatlar) && empty($isimler)){
		echo "_";
	}
		
	echo " ";
}

else {
	echo "<center>Dil Seçiniz ...</center><br>";
}		

?>

<br><br>
<form action="index.php" method="POST">
<input type="hidden" name="tetikle" value="1">
<input type="hidden" name="dil" value="tr">
<center><button>Türkçe</button></center>
</form>

<form action="index.php" method="POST">
<input type="hidden" name="tetikle" value="1">
<input type="hidden" name="dil" value="en">
<center><button>English</button></center>
</form>
</body>
</html>
