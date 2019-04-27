<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>Login | FLYBOOK</title>
</head>
<body style="background-image: url('img/bg1.jpg');background-repeat:no-repeat;background-size:cover;padding:0;margin:0;font-family:sans-serif;">
<div class="lb" style="width: 280px;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);color: white;
">
	<h1 style="border-bottom: 6px solid #353152;">Login</h1>
	<form action="cek-login.php" method="post">
		<div class="textbox">
			<i class="fas fa-user"></i>
			<input type="text" placeholder="Username" name="user" required="">
		</div>
		<div class="textbox">
			<i class="fas fa-unlock-alt"></i>
			<input type="password" placeholder="Password" name="pass" required="">
		</div>
		<input type="submit" class="submit" value="Masuk" required=""></input>
</div>
</body>
</html>
