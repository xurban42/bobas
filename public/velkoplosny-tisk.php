<!doctype html>

<html lang="cs">
<head>
  <meta charset="UTF-8">

  <title>Velkoplošný tisk | Bobas Reklamní studio Ostrava</title>
  <meta name="description" content="Specializujeme se na velkoplošný tisk(bannery, billboardy, plakáty, polepy vozidel). Zabýváme se také potiskem triček, tvorbou 3D nápisů, výrobou samolepek, atd." />
  <meta name="keywords" content="velkoplosny tisk, bannery, plakáty, reklamní tabule, polepy obchodů, polypy výloh, billboardy. bigboardy, ostrava, reklama, výroba reklamy, polepy vozidel, malby na stěnu, malby na podlahu, loga na stěnu, letáky, firemní tiskoviny, orientační syystémy" />

   <meta name=“robots“ content=“index, follow“>

   <meta name="msvalidate.01" content="78C9591834E261F0C8599567466C80E0" />

  <meta name="author" content="David Krpec, Freelance web developer"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" href="css/front.css"/>


  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->

	<!-- Favicon -->
  	<link rel="apple-touch-icon" sizes="57x57" href="/imgs/icons/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/imgs/icons/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/imgs/icons/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/imgs/icons/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/imgs/icons/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/imgs/icons/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/imgs/icons/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/imgs/icons/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/imgs/icons/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/imgs/icons/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/imgs/icons/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/imgs/icons/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/imgs/icons/favicon/favicon-16x16.png">
	<link rel="manifest" href="/imgs/icons/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/imgs/icons/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#222222">

</head>
<body>
	<?php
		//header bar
		//include '../resources/templates/header/navbar.php';
	?>

		<a class="button-collapse" id="hamburger-icon" href="#" title="Nabídka" data-activates="slide-out">
			Nabídka
		  	<span class="line line-1"></span>
		  	<span class="line line-2"></span>
		  	<span class="line line-3"></span>
		</a>

		<!-- Velkoplošný tisk description -->
		<div class="velkoplosny-tisk">
			<div class="container">
				<div class="row">
					<div class="col l7 m9 s12 offset-l5 offset-m3">
						<h1>Velkoplošný tisk</h1>
						<p>Velkoplošný tisk je naší doménou.</p>
						<p>Natiskneme a navrhneme vám tisk dle vašich představ.</p>
						<a class="waves-effect waves-light btn-large" href="/velkoplosny-tisk#offer-form">Chci nabídku</a>
					</div>

				</div>
			</div>

		</div>

		<div class="velkoplosny-tisk__subheader">
			<div class="container">
				<div class="row">
					<div class="col l6 m12 s12">
						<h2>Proč si vybrat nás?</h2>
						<ul>
							<li>Tiskem se zabýváme už od roku 1993</li>
							<li>Tiskneme v nejlepší kvalitě (až 1440dpi)</li>
							<li>Dokážeme vytisknout cokoliv si dokážete i nedokážete představit</li>
						</ul>
					</div>
					<div class="col l6 m12 s12">
						<img class="right" src="imgs/tiskarna.jpg" alt="Mimaki CVJ30-130"/>
					</div>
				</div>
			</div>
		</div>

		<?php
		//Bannery
		include '../resources/templates/velkoplosny-tisk/bannery.php';

		//Samolepky
		include '../resources/templates/velkoplosny-tisk/samolepky.php';

		//Loga na podlahu a stěnu
		include '../resources/templates/velkoplosny-tisk/loganapodlahu.php';

		//Plakáty, Letáky
		include '../resources/templates/velkoplosny-tisk/plakaty.php';

		//Polepy vozidel
		include '../resources/templates/velkoplosny-tisk/polepy-vozidel.php';

		//Polepy tabulí
		include '../resources/templates/velkoplosny-tisk/polepy-tabuli.php';

		//Billboardy
		include '../resources/templates/velkoplosny-tisk/billboardy.php';

		//Vlajky
		include '../resources/templates/velkoplosny-tisk/vlajky.php';

		//Orientační systémy
		include '../resources/templates/velkoplosny-tisk/orientacni-systemy.php';

		//Offer form
		include '../resources/templates/offer-form.php';

		//Footer - copyright
		include '../resources/templates/footer/footer.php';

		//Side navigation
		include '../resources/templates/side-navigation.php';
	?>






  <script src="js/front.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-65421217-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>
</html>
