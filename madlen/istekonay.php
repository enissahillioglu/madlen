<?php


	//echo "dolu gelmsin";
	$baglanti=mysqli_connect("localhost","root","")or die("hata");
			  mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatası");
	
$sql="update istekler set durum=".@$_POST['durum']." where id=".@$_POST['istekno'];	
	
	$sorgu=mysqli_query($baglanti,$sql);
	if(mysqli_query($baglanti, $sql))
	{
	
	echo "basarili";
	
		
	}
	
	
	$baglanti=null;
	



?>