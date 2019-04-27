<?php
	include 'db.php';

	$user = $_POST['user'];
	$pass = $_POST['pass'];

  if($user == 'admin' || $pass == 'admin'){
		echo "Berhasil";
		header("location:index.php?act=tambah-tiket");
  }else{
    echo "login gagal";
  }
?>
