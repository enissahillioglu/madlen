<?php


	//echo "dolu gelmsin";
	$baglanti=mysqli_connect("localhost","root","")or die("hata");
			  mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatası");
	$sql="delete from referanslar where referans_no=".$_POST['referans_no']."";
	
	if(mysqli_query($baglanti, $sql))
			echo "basarili";
	else 
	{
	
	echo "hata2";
	//$sea= json_decode($json_a,true);
	//echo $sea['isim'];
		
	}
	$baglanti=null;
	



?>