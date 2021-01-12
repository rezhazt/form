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
$covid=$_POST["covid"];

//Query input menginput data kedalam tabel barang
  $sql="insert into tabel_visit (idCard,fullname,wa,email,visitDate,tujuan) values
		('$idCard','$fullname','$wa','$email','$visitDate','$tujuan')";

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