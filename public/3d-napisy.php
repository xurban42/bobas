<!doctype html>

<html lang="cs">
<head>
  <meta charset="UTF-8">

  <title>Tvorba 3D nápisů | Bobas Reklamní studio Ostrava</title>

  <meta name="description" content="Vyrábíme prostorové reklamní nápisy z tvrzeného polystyrenu. Toto řešení je levné a zaručuje dlouhou životnost."/>
  <meta name="keywords" content="3D nápisy, 3D písmo, prostoový nápis, reklamní nápis, 3D logo, Prostorové logo" />	
	
   <meta name=“robots“ content=“index, follow“>

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
		include '../resources/templates/header/navbar.php';
		?>

		
		<!-- 3D nápisy description --> 
		<div class="tvorba-napisu">
			<div class="container">
				<div class="row">
					<div class="col l8 m12 s12">
						<h1>Tvorba 3D nápisů</h1>
						<p>Nechte svůj obchod vyniknout 3D nápisem / logem.</p>
						<p>Naše 3D písmo vyrobené z tvrzeného polystyrenu se vyznačuje dlouhou životností a nízkou cenou.</p>
						<a class="waves-effect waves-light btn-large" href="/3d-napisy#offer-form">Chci nabídku</a>
					</div>	
				</div>	
			</div>
		</div>



		<?php

		//3D písmo - description
		include '../resources/templates/3d-pismo/description.php';

		//3D písmo - references
		include '../resources/templates/3d-pismo/ukazky-praci.php';
		
		//Offer form
		include '../resources/templates/offer-form.php';

		//Footer - copyright
		include '../resources/templates/footer/footer.php';

		//Side navigation
		include '../resources/templates/side-navigation.php';
	?>






  <script src="js/front.js"></script>
</body>
</html>