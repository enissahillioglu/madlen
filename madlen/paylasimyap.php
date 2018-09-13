<?php


	//echo "dolu gelmsin";
	$baglanti=mysqli_connect("localhost","root","")or die("hata");
			  mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatası");
	$sql="insert into paylasimlar(kullanici_no,baslik,aciklama,degeri,kisi_sayisi,fotograf,paylasim_tar,icindekiler,adres) values ('".@$_POST['kul_id']."','".@$_POST['baslik']."','".@$_POST['aciklama']."','".@$_POST['degeri']."','".@$_POST['kisi_sayisi']."','".@$_POST['fotograf']."',Now(),'".@$_POST['icindekiler']."','".@$_POST['adres']."')";
	
	if(mysqli_query($baglanti, $sql)){
			echo "basarili";
			//file_put_contents('deneme/img.jpg', base64_decode(@$_POST['fotograf']));	
	}
	else 
	{
	
	echo "hata2";
	//$sea= json_decode($json_a,true);
	//echo $sea['isim'];
		
	}
	$baglanti=null;
	



?>