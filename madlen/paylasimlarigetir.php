<?php


function tarihhesapla($tarih)
{
	$yaziyla="";
    $dilimler = explode("-", $tarih);
	$gun=$dilimler[2];
	$ay=$dilimler[1];
   $simdikitarih = getdate();
   $simdikigun=$simdikitarih['mday'];
   $simdikiay=$simdikitarih['mon'];
   //echo $simdikiay.$ay;
   if($gun==$simdikigun)
	   return "bugun";
   else{
	   if($simdikiay==$ay){
	   $kacgun=$simdikigun-$gun;
	   return $kacgun." gun once";
   }}
    return "geçmişte";
}
//echo tarihhesapla("11-04-20");
		
	$baglanti=mysqli_connect("localhost","root","")or die("hata");
mysqli_select_db($baglanti,"madlenveritabani") or die ("tablo hatasi");

			 
			  $sql="select p.id,p.baslik,p.fotograf,p.degeri,p.paylasim_tar,p.kisi_sayisi,k.isim,k.soyisim from paylasimlar p,kullanicilar k where p.kullanici_no=k.id order by p.id desc";
			 
			  if(@$_POST['kul_id']!=null) {
			$sql="select p.id,p.baslik,p.fotograf,p.degeri,p.paylasim_tar,p.kisi_sayisi,k.isim,k.soyisim from paylasimlar p,kullanicilar k where p.kullanici_no=k.id and p.kullanici_no=".@$_POST['kul_id']." order by p.id desc";
			  }
			  if(@$_POST['paylasim_id']!=null) {
			$sql="select p.*,refsayisi(k.id) as refsayisi, k.isim,k.soyisim  from paylasimlar p,kullanicilar k where p.kullanici_no=k.id and p.id=".@$_POST['paylasim_id']." ";
			  }
			  if(@$_GET['paylasim_id']!=null) {
			$sql="select p.*,refsayisi(k.id) as refsayisi, k.isim,k.soyisim  from paylasimlar p,kullanicilar k where p.kullanici_no=k.id and p.id=".@$_GET['paylasim_id']." ";
			  }
			  if(@$_POST['sikayet']!=null){
				$sql="select p.id,p.baslik,p.fotograf,p.degeri,p.paylasim_tar,p.kisi_sayisi,k.isim,k.soyisim,p.aciklama from paylasimlar p,kullanicilar k, sikayetler s where p.kullanici_no=k.id and p.id=s.paylasim order by p.id desc";

				  
			  }
			  
	$sorgu=mysqli_query($baglanti,$sql);
	if(mysqli_num_rows($sorgu)<=0)
			echo "yokk";
	else 
	{
		
		
		while( $row = mysqli_fetch_array( $sorgu ) ) { 
		
		//echo $row["paylasim_tar"];
		
		$row['tarih']=tarihhesapla( $row["paylasim_tar"]);
		$dizi[] = array ('gonderi'=>$row);
		
		
		//$gonderi[]=array('b'=>$row['baslik']);
		}
		
		
		//print_r($gonderi);
		//print_r($dizi);
		$array = $dizi;
$json = json_encode($array);

echo $json;

//echo json_decode($json,true);
		// dump(json_decode($json));
		//var_dump( json_decode($json) );
		
	
	//$sea= json_decode($json_a,true);
	//echo $sea['isim'];
		
	$baglanti->close(); 
	}
	//}
	
	
	
	
	//echo "dolu gelmsin";
	//$kullanici_sistemi=$_SERVER['HTTP_USER_AGENT'];
	//if(preg_match('/android/i',$kullanici_sistemi)){

?>