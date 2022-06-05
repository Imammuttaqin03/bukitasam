<?php 
	include 'config/koneksi.php';
	//Konfigurasi Pagnation
	$jumlahDataPerhalaman = 6;
	$data = "SELECT count(id_berita) as total FROM tb_berita";
	$query_total = mysqli_query($conn, $data);
	$jml = mysqli_fetch_array($query_total);
	$jumlahData = (int) $jml[0];
	$jumlahHalaman = (int) ceil($jumlahData / $jumlahDataPerhalaman);
	$halamanAktif = ( isset($_GET['page']) ) ? $_GET['page'] : 1;
	$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>PTBA | Berita PT.Bukit Asam Tbk. Unit Dermaga Kertapati</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link rel="icon" type="image/ico" href="img/favicon.ico">
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="index.php" class="logo"><img src="./img/logo.png" alt=""></a>
						</div>
						<!-- /logo -->
					</div>
				</div>
				<!-- /Main Nav -->
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Berita Terbaru</h2>
						</div>
					</div>
					<!-- post -->
					<?php 
						  //Mysqli_query : digunakan untuk menjalankan commad sql (query)
						  $sql=mysqli_query($conn,"SELECT * FROM tb_berita ORDER by id_berita DESC limit 2");
						  //Mysqli_query_fect_array : digunakan untuk menampung data dari command (perintah) dari mysqli_query
						  while($data=mysqli_fetch_array($sql)):
					 ?>
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="post.php?post=<?= $data['id_berita']; ?>"><img src="./admin/upload/<?= $data["file"]; ?>" alt="" style="width:560px;height:330px;"></a>
							<div class="post-body">
								<div class="post-meta">
									<span class="post-date"><?= $data["tgl"]; ?></span>
								</div>
								<h3 class="post-title"><a href="post.php?post=<?= $data['id_berita']; ?>"><?= $data["judul"]; ?></a></h3>
							</div>
						</div>
					</div>
					<?php endwhile ?>
					<!-- /post -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Berita</h2>
						</div>
					</div>

					<!-- post -->
					<?php 
						  //Mysqli_query : digunakan untuk menjalankan commad sql (query)
						  $sql=mysqli_query($conn,"SELECT * FROM tb_berita ORDER by id_berita DESC LIMIT $awalData, $jumlahDataPerhalaman");
						  //Mysqli_query_fect_array : digunakan untuk menampung data dari command (perintah) dari mysqli_query
						  while($data=mysqli_fetch_array($sql)):
					 ?>
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="post.php?post=<?= $data['id_berita']; ?>"><img src="./admin/upload/<?= $data["file"]; ?>" alt="" style="width:360px;height:216px;"></a>
							<div class="post-body">
								<div class="post-meta">
									<span class="post-date"><?= $data["tgl"];?></span>
								</div>
								<h3 class="post-title"><a href="post.php?post=<?= $data['id_berita']; ?>"><?= $data["judul"]; ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php endwhile ?>

					<div class="col-md-12">
						<div class="post">
							<div class="post-body pull-right">			
								<p>
									<h2>Page Berita</h2>
									<?php for( $i = 1; $i <=$jumlahHalaman; $i++ ) : ?>
										<a href="index.php?page=<?= $i; ?>"><?= $i; ?> </a>
									<?php endfor; ?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="footer-widget">
							<div class="footer-copyright">
								<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
