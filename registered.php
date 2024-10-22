<?php
session_start();

if(!isset($_SESSION['log'])){
	
} else {
	header('location:index.php');
};
include 'dbconnect.php';

if(isset($_POST['adduser']))
	{
		$nama = $_POST['nama'];
		$telp = $_POST['telp'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); 
			  
		$tambahuser = mysqli_query($conn,"insert into login (nama, email, password, notelp, alamat) 
		values('$nama','$email','$pass','$telp','$alamat')");
		if ($tambahuser){
		echo " <div class='alert alert-success'>
			Berhasil mendaftar, silakan masuk.
		  </div>
		<meta http-equiv='refresh' content='1; url= login.php'/>  ";
		} else { echo "<div class='alert alert-warning'>
			Gagal mendaftar, silakan coba lagi.
		  </div>
		 <meta http-equiv='refresh' content='1; url= registered.php'/> ";
		}
		
	};

?>

<!DOCTYPE html>
<html>
<head>
<title>Akun - Daftar</title>
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
    
    <!-- register -->
    <div id="about" class="about">
        <div class="register">
            <div class="container">
                <h2>Daftar Disini</h2>
                <div class="login-form-grids">
                    <h3>Informasi Pribadi</h3>
                    <form method="post">
                        <input type="text" name="nama" placeholder="Nama Lengkap" required>
                        <input type="text" name="telp" placeholder="Nomor Telepon" required maxlength="13">
                        <input type="text" name="alamat" placeholder="Alamat Lengkap" required>
                    
                    <h3>Informasi Login</h3>
                        
                        <input type="email" name="email" placeholder="Email" required="@">
                        <input type="password" name="pass" placeholder="Password" required> <br><br>
                        <input type="submit" name="adduser" value="Daftar" class="btnn">
                    </form>
                </div>
                <div class="register-home">
					<br>
                    <a href="index.php">Batal</a>
                </div>
            </div>
        </div>
    </div>
<!-- //register -->
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