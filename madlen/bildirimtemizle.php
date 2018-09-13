<?php


	//echo "dolu gelmsin";
	$baglanti=mysqli_connect("localhost","root","")or die("hata");
			  mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatası");
	
	$sql="update bildirimler set durum=1 where kime=".@$_POST['kim'];
	
    if(mysqli_query($baglanti, $sql))
		echo "basarili";
			
	

	
	$baglanti=null;
	



?>