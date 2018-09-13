<?php

	$baglanti=mysqli_connect("localhost","root","")or die("hata");
			  mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatası");
			  
	 
	$sql="select fotograf from paylasimlar where id=43";
			  
	
	$sorgu=mysqli_query($baglanti,$sql);
	if(mysqli_num_rows($sorgu)<=0)
			echo "yokk";
	else 
	{
		
		$de = mysqli_fetch_array($sorgu);
		echo base64_decode($de[0]);
		
		
		
		}
		
		//print_r($dizi);
		
	
	


?>