<?php


	//echo "dolu gelmsin";
	$baglanti=mysqli_connect("localhost","root","")or die("hata");
			  mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatası");
	$sql="select i.durum,p.adres from istekler i,paylasimlar p where p.id=i.paylasimno and i.paylasimno=".@$_POST['paylasimno']." and i.kim=".@$_POST['kim']."";
	$sorgu=mysqli_query($baglanti,$sql);
	if(mysqli_num_rows($sorgu)<=0)
			echo "yokk";
	else 
	{
	$satir=mysqli_fetch_array($sorgu);
	if($satir[0]==0){
		//echo $satir[0];
	echo "beklemede-";
	}
	else if($satir[0]==1){
		
	echo "onaylandi-".$satir[1];
	}
	else if($satir[0]==2){
		
	echo "reddedildi-";
	}
	
	
	//$sea= json_decode($json_a,true);
	//echo $sea['isim'];
		
	}	
	
	$baglanti=null;
	



?>