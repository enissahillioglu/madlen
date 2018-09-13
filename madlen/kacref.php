<?php

	$baglanti=mysqli_connect("localhost","root","")or die("hata");
			  mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatası");
			//include "baglanti.patates";  
			
	 for($i=0; $i<=2; $i++){
		 if ($i==0)
	$sql="select count(kim)  from referanslar  where kime=".@$_GET['kul_id']." ";
	if ($i==1)
$sql="select count(kime) AS kac from referanslar  where kim=".@$_GET['kul_id']." ";	
if ($i==2)
$sql="select count(id) AS kac from paylasimlar  where kullanici_no=".@$_GET['kul_id']." ";		

	
	$sorgu=mysqli_query($baglanti,$sql);
	
		
		$row = mysqli_fetch_row( $sorgu );
		$dizi[$i]=$row[0];
		
		
		
	 }
	 echo $dizi[0]."-".$dizi[1]."_".$dizi[2];


		
	$baglanti->close();
	
	


?>