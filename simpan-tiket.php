<?php
include "db.php";

$kodeTiket = $_POST["kodeTiket"];
$kodePesawat = $_POST["kodePesawat"];
$namaPembeli = $_POST["namaPembeli"];
$tglBerangkat = $_POST["tglBerangkat"];
$waktuBerangkat = $_POST["waktuBerangkat"];
$waktuSampai = $_POST["waktuSampai"];
$harga = $_POST["harga"];
$noKursi = $_POST["noKursi"];
$kelas = $_POST["kelas"];
$berangkat = $_POST["berangkat"];
$tujuan = $_POST["tujuan"];
$total = $harga;

	$q = "INSERT INTO tiket (kodeTiket,kodePesawat,namaPembeli,tglBerangkat,waktuBerangkat,waktuSampai,harga,noKursi,kelas,berangkat,tujuan,total)
			  VALUES ('$kodeTiket','$kodePesawat','$namaPembeli','$tglBerangkat','$waktuBerangkat','$waktuSampai','$harga','$noKursi','$kelas','$berangkat','$tujuan','$total')";

	$result = mysqli_query($connect,$q);

	$num = mysqli_affected_rows($connect);

	if($num > 0){
		echo "Berhasil";
		header("location:index.php?act=data-tiket");
	}else{
		echo "Gagal tambah data";
	}


?>
