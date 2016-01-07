<?php
	function ReplaceUnderscoreWithSpace($girilen_deger) {
	$uzunluk = strlen($girilen_deger) - 1; // Stringin karakter uzunluğu 1 eksiltirerek a değişkenine atanmıştır.
	$liststr = "";
	for($i = 0; $i <= $uzunluk; $i++) // Döngü oluşturuluyor.
	{
		$char = substr( $girilen_deger, $i, 1 ); // Üç adet bölüme ayırır ; $fname kısmı işlem yapacağımız cümle veya karakter gurubunun bulunduğu değişkendir. 
		
		if($i == 0)
		{
			$liststr = $liststr . $char; // $liststr değişkeninin içerisine kopyalanan karakteri ekle.
		}
		else
		{
			if ($i == $uzunluk)
			{
				$liststr = $liststr . $char;
			}
			else
			{
				if($char == '_')  // $char deişkenimin içeriği '_' ise aşağıdaki kod satırı uygulanır.
				{
					$liststr = $liststr . " "; // $liststr değişkenimin içerisine boşluk ekle.
				}
				else
				{
					$liststr = $liststr . $char; 
				}
			}
		}
	}
	echo $liststr;
}

     $deger_gir = readline("yaz: ");
     ReplaceUnderscoreWithSpace("$deger_gir");

?>