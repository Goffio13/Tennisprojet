<!DOCTYPE html>
<html lang="zxx">
<?php
session_start();
// On se connecte à la base de données 
$db_username = '265840';
$db_password = 'Tennis13600_';
$db_name = 'tennisproject_tennis';
$db_host = 'mysql-tennisprojet.alwaysdata.net';

$id = @mysqli_connect($db_host, $db_username, $db_password,$db_name) or die ("Impossible de se connecter à la base");
	?>
<head>
	<meta charset="UTF-8">
	<title>PROJET Tennis - Joueurs</title>
	<!-- =================== META =================== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="assets/img/logo.png">
	<!-- =================== STYLE =================== -->
	<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="home">
	<!--================ PRELOADER ================-->
	<div class="preloader-cover">
		<div id="cube-loader">
			<div class="caption">
				<div class="cube-loader">
					<div class="cube loader-1"></div>
					<div class="cube loader-2"></div>
					<div class="cube loader-4"></div>
					<div class="cube loader-3"></div>
				</div>
			</div>
		</div>
	</div>
	<!--============== PRELOADER FIN ==============-->
	
	<!-- ================= HEADER ================= -->
	<header class="header">
		<a href="#" class="nav-btn">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<div class="header-menu">
			<div class="container">
				<div class="header-logo">
					<a href="index.html" class="logo"><img src="assets/img/logo.png" alt="logo"></a>
				</div>
				<nav class="nav-menu">
					<ul class="nav-list">
						<li class="dropdown">
							<a href="index.html">Accueil</a></li>
						<li><a href="about.html">A propos</a></li>
						<li><a href="joueurs.php">Joueurs</a></li>
						<li><a href="coups.html">Coups</a></li>
						<li><a href="cours.html">Cours</a></li>
						<li><a href="contacts.html">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- =============== HEADER FIN =============== -->

	<!-- =============== HEADER-TITLE =============== -->
	<section class="s-header-title" style="background-image: url(assets/img/bg-1-min.png);">
		<div class="container">
			<h1 class="title">Joueurs</h1>
		</div>
	</section>
	<!-- ============= HEADER-TITLE FIN ============= -->

	<!-- ================ S-CROSSFIT ================ -->
	<section class="s-crossfit">
		<div class="container">
			<h2 class="title-decor">Voici les <span>5</span> meilleurs <span> joueurs</span></h2>
			<?php
						// Affiche la base 
						$res= mysqli_query($id, "SELECT * FROM joueur");
							while ($tab= mysqli_fetch_assoc($res)){
    						echo implode("---", $tab);
    						echo "<br />";
						}
						print_r($tab);
						?>
			
	<!-- ============== S-CROSSFIT FIN ============== -->

	
<!-- ================ FOOTER ================ -->
<div class="footer-bottom">
	<div class="copyright"><a href="#" target="_blank"></a></div>
	<ul class="footer-menu">
				<li class="active"><a href="index.html">Acceuil</a></li>
				<li><a href="about.html">A propos</a></li>
				<li><a href="joueurs.php">Joueurs</a></li>
				<li><a href="coups.html">Coups</a></li>
				<li><a href="cours.html">Cours</a></li>
		<li><a href="contacts.html">Contact</a></li>
	</ul>
</div>
</div>
</footer>
<!-- ================ FOOTER FIN ================ -->

<!--=================== SCRIPT	===================-->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>

</html>

	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>
	<!--================= TO TOP FIN =================-->

	<!--=================== SCRIPT	===================-->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/scripts.js"></script>
</body>

</html>