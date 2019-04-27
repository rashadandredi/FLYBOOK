<?php
	include 'db.php';
	if(!isset($_SESSION['user'])){
		header("login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page | FLYBOOK</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content" style="padding: 8px 10px;background: #fff;color:#353152;border:1px solid #353152;border-radius: 2px;">
	<center>
		<a href="index.php?act=tambah-tiket"><input type="submit" class="submit" value="Tambah Tiket"></a>
		<a href="index.php?act=data-tiket"><input type="submit" class="submit" value="Data Tiket"></a>
		<a href="index.php?act=data-transaksi"><input type="submit" class="submit" value="Data Transaksi"></a>
		<a href="home.php"><input type="submit" class="submit" value="Home"></a>
		<a href="login.php"><input type="submit" class="submit" value="Logout"></a>
	</center>
	<div class="kotak">
		<?php
			if(isset($_GET['act'])){
				if($_GET['act'] == 'tambah-tiket')
					include 'tambah-tiket.php';
				else if($_GET['act'] == 'data-tiket')
					include 'data-tiket.php';
				else if($_GET['act'] == 'data-transaksi')
					include 'data-transaksi.php';
			}else if(isset($_GET['detail'])){
					include 'detail.php';
			} else {
				include 'data-transaksi.php';
			}
		?>
	</div>
</div>
</body>
</html>
