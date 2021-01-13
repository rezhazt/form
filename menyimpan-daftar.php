<?php
//Include file koneksi ke database
include "conection.php";

//menerima nilai dari kiriman form input-barang 
$idCard=$_POST["idCard"];
$fullname=$_POST["fullname"];
$wa=$_POST["wa"];
$email=$_POST["email"];
$visitDate=$_POST["visitDate"];
$tujuan=$_POST["tujuan"];
$test1=$_POST["test1"];
$test2=$_POST["test2"];
$test3=$_POST["test3"];
$test4=$_POST["test4"];
$test5=$_POST["test5"];
$test6=$_POST["test6"];
$test7=$_POST["test7"];

//Query input menginput data kedalam tabel barang
  $sql="insert into tabel_visit (idCard,fullname,wa,email,visitDate,tujuan,test1,test2,test3,test4,test5,test6,test7) values
		('$idCard','$fullname','$wa','$email','$visitDate','$tujuan','$test1','$test2','$test3','$test4','$test5','$test6','$test7')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);
 

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	include "tiket.php";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>