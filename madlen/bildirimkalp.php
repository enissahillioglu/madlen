<?php


	//echo "dolu gelmsin";
	$baglanti=mysqli_connect("localhost","root","")or die("hata");
			  mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatası");
	$sql="select count(*) from bildirimler where kime=".@$_POST['kim']." and durum=0";
	$sorgu=mysqli_query($baglanti,$sql);
	if(mysqli_num_rows($sorgu)<=0)
			echo "yokk";
	else 
	{
	$satir=mysqli_fetch_array($sorgu);
	echo $satir[0];
	/////$sql="update bildirimler set durum=1 where kime=".@$_POST['kim'];
	
////	$sorgu=mysqli_query($baglanti, $sql);
			
	
	//$json_a=json_encode($satir,true);
	//echo $json_a;
	//$sea= json_decode($json_a,true);
	//echo $sea['isim'];
		
	}	
	
	$baglanti=null;
	



?>