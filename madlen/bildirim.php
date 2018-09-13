<?php

	$baglanti=mysqli_connect("localhost","root","")or die("hata");
			  mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatası");
			//include "baglanti.patates";  
	if(@$_POST['kime']!=null)		  
	$sql="select icerik,tarih,durum,numara,turu from bildirimler  where kime=".@$_POST['kime'];
	$sorgu=mysqli_query($baglanti,$sql);
	if(mysqli_num_rows($sorgu)<=0)
			echo "yokk";	
	else 
	{
		
		
		while( $row = mysqli_fetch_array( $sorgu ) ) { 
		$dizi[] = array ('bildirim'=>$row);
		
		//echo json_encode($dizi,true);
		
		}
		
		//print_r($dizi);
		$array = $dizi;
$json = json_encode($array);

echo $json;


		
	$baglanti->close();
	}
	


?>