<?php


	$baglanti=mysqli_connect("localhost","root","")or die("hata");
mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatasi");
	$sql="select id,isim,soyisim,kuladi from kullanicilar where kuladi='".@$_POST['kuladi']."' and sifre='".@$_POST['sifre']."'";
	$sorgu=mysqli_query($baglanti,$sql);
	if(mysqli_num_rows($sorgu)<=0)
			echo "yokk";
	else 
	{
	$satir=mysqli_fetch_array($sorgu);
	$json_a=json_encode($satir,true);
	echo $json_a;
	//$sea= json_decode($json_a,true);
	//echo $sea['isim'];
		
	}
	$baglanti->close();
	



?>