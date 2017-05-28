<!doctype html>

<html lang="cs">
<head>
  <meta charset="UTF-8">

  <title>Potisk triček | Bobas Reklamní studio Ostrava</title>
  <meta name="description" content="K potisku triček využíváme termotransférový nebo sublimační tisk. Motiv na tričko vám můžeme i navrhnout." />
  <meta name="keywords" content="potisk triček, ostrava, reklama, firemní trička, trička s logem, sublimační tisk, termotransférový tisk" />
  <meta name="author" content="David Krpec, Freelance web developer"/>

  <meta name="msvalidate.01" content="78C9591834E261F0C8599567466C80E0" />

     <meta name=“robots“ content=“index, follow“>


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
		include '../resources/templates/header/navbar.php';
		?>


		<!-- Potisk triček description -->
		<div class="potisktricek">
			<div class="container">
				<div class="row">
					<div class="col l8 m12 s12 ">
						<h1>Potisk triček</h1>
						<p>Nabízíme potisk triček v nejlepší kvalitě.</p>
						<a class="waves-effect waves-light btn-large left" href="/potisk-tricek#sublimacni-tisk">Sublimační tisk</a>
						<a class="waves-effect waves-light btn-large left" href="/potisk-tricek#termotransferovy-tisk">Termotransférový tisk</a>
						<div class="clearfix"></div>
						<p>Rádi Vám navrhneme motiv na tričko.</p>
						<a class="waves-effect waves-light btn-large" href="/potisk-tricek#offer-form">Chci nabídku</a>
					</div>
				</div>
			</div>
		</div>



		<?php

		//Potisk triček - Sublimační tisk
		include '../resources/templates/potisk-tricek/sublimacni-tisk.php';

		//Potisk triček - Termotransférový tisk
		include '../resources/templates/potisk-tricek/termotransferovy-tisk.php';

    //Potisk triček - Ukázky prací
    include '../resources/templates/potisk-tricek/ukazky-praci.php';

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
