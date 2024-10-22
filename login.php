<?php
session_start();

if(!isset($_SESSION['log'])){
	
} else {
	header('location:index.php');
};

include 'dbconnect.php';
$timenow = date("j-F-Y-h:i:s A");

	if(isset($_POST['login']))
	{
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);
	$queryuser = mysqli_query($conn,"SELECT * FROM login WHERE email='$email'");
	$cariuser = mysqli_fetch_assoc($queryuser);
		
		if( password_verify($pass, $cariuser['password']) ) {
			$_SESSION['id'] = $cariuser['userid'];
			$_SESSION['role'] = $cariuser['role'];
			$_SESSION['notelp'] = $cariuser['notelp'];
			$_SESSION['name'] = $cariuser['nama'];
			$_SESSION['log'] = "Logged";
			header('location:index.php');
		} else {
			echo 'Username atau password salah';
			header("location:login.php");
		}		
	}

?>

<!DOCTYPE html>
<html>
<head>
<title>Akun - Masuk</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="css/s.css">

<!-- //font-awesome icons -->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

</head>
	
<body>
    <!-- navigator -->
	<div>
		<nav>
			<a href="index.php" class="logo">T. Informatika</a>
			<ul>
				<li><a href="registered.php">Daftar</a></li>
				<li><a href="login.php">Masuk</a></li>
			</ul>
	    </nav>
    </div>
	<section id="home"></section>
    
    <!-- login -->
    <div id="about" class="about">
			<div class="a-text">
				<h2>Masuk</h2>
				<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                    <form method="post">
                        <input type="text" name="email" placeholder="Email" required> <br><br>
                        <input type="password" name="pass" placeholder="Password" required> <br><br>
						
                        <input type="submit" name="login" value="Masuk" class="btnn">
                    </form>
                </div>
                <h4>Belum terdaftar?</h4>
                <p><a href="registered.php">Daftar Sekarang</a></p>
			</div>
    </div>
	
<!-- //login -->
<!-- footer -->

<section id="footer">
			<footer>
				<p>Afga AE</p>
				<p>Website ini dibuat hanya untuk latihan, semoga anda menikmati tampilan website admin :D</p>

				<!-- social -->

				<div class="social-m">
					<a href="https://www.facebook.com/muhfahd.afganiaridoi/"><i class="fab fa-facebook"></i></a>
					<a href="https://twitter.com/af_rush"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/af_rush/"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCAofTcDjmEU9fAzYacjC-Uw"><i class="fab fa-youtube"></i></a>
				</div>

				<!-- copyright -->
				<p class="cr">2021 &copy; Copyright by Afga AE All Rights Reserved</p>
			</footer>

				<div class="a-social-m">
					<a href="https://www.facebook.com/muhfahd.afganiaridoi/"><i class="fab fa-facebook"></i></a>
					<a href="https://twitter.com/af_rush"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/af_rush/"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCAofTcDjmEU9fAzYacjC-Uw"><i class="fab fa-youtube"></i></a>
				</div>
		</section>
</body>
</html>