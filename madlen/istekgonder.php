<?php


	//echo "dolu gelmsin";
	$baglanti=mysqli_connect("localhost","root","")or die("hata");
			  mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatası");
			  
	$sql="select * from istekler where kim=".@$_POST['kim']." and paylasimno=".@$_POST['paylasimno']."";
	$sorgu=mysqli_query($baglanti,$sql);
	if(mysqli_num_rows($sorgu)<=0)
	{		  
	$sql="insert into istekler(kim,paylasimno,tarih,kime,durum,metin) values (".@$_POST['kim'].",".@$_POST['paylasimno'].",Now(),".@$_POST['kime'].",0,'".@$_POST['metin']."')";
	
	if(mysqli_query($baglanti, $sql)){
			echo "basarili";
			
	}
	else 
	{
	
	echo "hata2";
	
		
	}
	}else "İsteğiniz daha önceden işleme alınmış";
	$baglanti=null;
	



?>