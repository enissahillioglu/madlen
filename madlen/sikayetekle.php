<?php



	$baglanti=mysqli_connect("localhost","root","")or die("hata");
mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatasi");

$sql="select * from sikayetler where kim='".@$_POST['kim']."' and paylasim='".@$_POST['paylasim']."'";
	$sorgu=mysqli_query($baglanti,$sql);
	if(mysqli_num_rows($sorgu)<=0)
	{


	$sql="insert into sikayetler(kim,paylasim,tarih) values('".@$_POST['kim']."' , '".@$_POST['paylasim']."',now())";
	
	if(mysqli_query($baglanti, $sql))
			echo "basarili";
	else 
	{
	
	echo "hata2";
	
		
	}
	}
	else "edilmis";
	$baglanti=null;
	



?>