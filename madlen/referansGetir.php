<?php

	$baglanti=mysqli_connect("localhost","root","")or die("hata");
			  mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatası");
			//include "baglanti.patates";  
	if(@$_POST['kul_id']!=null)		  
	$sql="select k.isim,k.soyisim from referanslar r,kullanicilar k where r.kime=".@$_POST['kul_id']." and r.kim=k.id";
	else if(@$_POST['kul_idR']!=null)		  
	$sql="select k.isim,k.soyisim from referanslar r,kullanicilar k where r.kim=".@$_POST['kul_idR']." and r.kime=k.id";
	$sorgu=mysqli_query($baglanti,$sql);
	if(mysqli_num_rows($sorgu)<=0)
			echo "yokk";
	else 
	{
		
		
		while( $row = mysqli_fetch_array( $sorgu ) ) { 
		$dizi[] = array ('kullanici'=>$row);
		
		//echo json_encode($dizi,true);
		
		}
		
		//print_r($dizi);
		$array = $dizi;
$json = json_encode($array);

echo $json;


		
	$baglanti->close();
	}
	


?>