<?php

	$baglanti=mysqli_connect("localhost","root","")or die("hata");
			  mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatası");
			//include "baglanti.patates";  
	if(@$_POST['paylasimno']!=null)		  
	$sql="select k.isim,k.soyisim,i.tarih,i.id,i.metin,i.durum  from istekler i,kullanicilar k   where k.id=i.kim and i.paylasimno=".@$_POST['paylasimno']; 
	$sorgu=mysqli_query($baglanti,$sql);
	if(mysqli_num_rows($sorgu)<=0)
			echo "yokk";	
	else 
	{
		
		
		while( $row = mysqli_fetch_array( $sorgu ) ) { 
		$dizi[] = array ('istek'=>$row);
		
		//echo json_encode($dizi,true);
		
		}
		
		//print_r($dizi);
		$array = $dizi;
$json = json_encode($array);

echo $json;


		
	$baglanti->close();
	}
	


?>