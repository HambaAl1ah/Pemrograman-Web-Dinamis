<?php
// Memanggil file dbconnect.php
include_once("dbconnect.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Website Pribadi</title>
	<link rel="stylesheet" type="text/css" href="css/s.css">

	<!-- Using FontAwesome -->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
	<!-- navigator -->
	<div>
		<nav>
			<a href="index.php" class="logo">T. Informatika</a>
			<ul>
				<?php
					if(!isset($_SESSION['log'])){
						echo '
						<li><a href="registered.php">Daftar</a></li>
						<li><a href="login.php">Masuk</a></li>
						';
					} else {
						
						if($_SESSION['role']=='Member'){
						echo '
						<li style="color:white">Halo, '.$_SESSION["name"].'
						<li><a href="logout.php">Keluar?</a></li>
						';
						} else {
						echo '
						<li style="color:white">Halo, '.$_SESSION["name"].'
						<li><a href="admin">Admin Panel</a></li>
						<li><a href="logout.php">Keluar?</a></li>
						';
						};
						
					}
				?>
			</ul>
		</nav>

		<section id="home"></section>
			<!-- text -->

		<div class="text">
			<?php
				if(!isset($_SESSION['log'])){
					echo '
					<p>Assalamualaikum</p>
					';
				} else {
					
					if($_SESSION['role']=='Member'){
					echo '
					<p>Assalamualaikum</p> <br>'.'<p>'.$_SESSION["name"].'</p>
					';
					} else {
					echo '
					<p>Assalamualaikum</p> <br>'.'<p>'.$_SESSION["name"].'</p>
					';
					};
					
				}
			?>
			
            
		</div>
		
		<!-- about -->
		<div id="about" class="about">
			<!-- image -->
			<img src="Img/Img2.png" class="img2">
			<!-- about text -->
			<div class="a-text">
				<p>Tentang Admin</p>
				<p>Teknik Informatika</p>
				<p>Assalamu'alaikum, Nama admin adalah M Fahd Afghani A. Admin adalah seorang mahasiswa
				Teknik Informatika. Jika anda tertarik dengan admin, silahkan lihat biodata admin.
				</p>
				<p>Semoga anda menikmati website sederhana dari admin :D</p>
				
				<a href="index.php"><button class="btnn">Home</button></a>
				<a href="Biodata.html"><button class="btnn2">Biodata</button></a>
			</div>
		</div>

		<section id="musik">
			<!-- Musik -->
			
			<div class="musik">
				<p>Musik</p>
				<p>Musik yang didengarkan </p>
				<p>daftar lagu-lagu yang biasanya saya dengar, bisa itu lagu anime, lagu barat, dan lagu indonesia.</p>
			</div>

			<!-- box -->

			<div class="box">
				<!-- 1 -->
				<div class="b-1">
					<span>1</span>
					<p class="h">
						Musik Anime
					</p>
					<p class="d">
						lagu pop Jepang yang dipakai sebagai lagu tema, lagu pengiring, dan image song untuk anime di televisi atau OVA.
					</p>
					<button>
						Read More
					</button>					
				</div>
				<!-- 2 -->
				<div class="b-2">
					<span>2</span>
					<p class="h">
						Musik Barat
					</p>
					<p class="d">
						musik yang berasal dari negara Barat, musik ini banyak berkembang di negara Timur termasuk Indonesia. Musik ini dapat dimanfaatkan untuk kebutuhan pendidikan, politik, hiburan, agama, kesehatan, dsb.
					</p>
					<button>
						Read More
					</button>
				</div>
				<!-- 3 -->
				<div class="b-3">
					<span>3</span>
					<p class="h">
						Musik Indonesia
					</p>
					<p class="d">
						musik yang berasal dari negara Indoesia, musik ini biasanya berisi klasik, daerah, tradisional, jazz, hip hop, pop, dll.
					</p>
					<button>
						Read More
					</button>
				</div>
			</div>
		</section>

		<!-- kontak -->

		<section id="kontak">
			<div class="k">
				<p>Jika anda ingin ikut seminar silahkan daftar.</p>
				<a href="daftar.php"><button>Daftar</button></a>
			</div>
		</section>

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
	</div>
</body>
</html>
