<!doctype html>

<html lang="cs">
<head>
  <meta charset="UTF-8">

  <title>Bobas Reklamní studio Ostrava</title>
  <meta name="description" content="Specializujeme se na velkoplošný tisk(bannery, billboardy, plakáty, polepy vozidel). Zabýváme se také potiskem triček, tvorbou 3D nápisů, výrobou samolepek." />
  <meta name="keywords" content="velkoplosny tisk, bannery, plakaty, potisk triček, ostrava, reklama, výroba reklamy, tvorba 3D nápisů, billboardy, plakáty" />
  <meta name="author" content="David Krpec, Freelance web developer" />

	   <meta name=“robots“ content=“index, follow“>


  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="msvalidate.01" content="78C9591834E261F0C8599567466C80E0" />

  <link rel="stylesheet" href="css/front.css" />

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

		//Swiper slider home page
		include '../resources/templates/header/slider.php';

		//Other services
		include '../resources/templates/hp/services.php';

		//Contact Information
		include '../resources/templates/hp/contact.php';

		//Google map
		include '../resources/templates/hp/map.php';

		include '../resources/templates/footer/footer.php';

		//Side navigation
		include '../resources/templates/side-navigation.php';
	?>




	<script>
		function initMap() {
	        var bobas = {lat: 49.777009, lng: 18.220085};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 13,
	          center: bobas,
	          scrollwheel: false
	        });
	        var marker = new google.maps.Marker({
	          position: bobas,
	          map: map
	        });
	    }
	</script>

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBq4lTs30p8oKjjqhBwiB0MhbsI8mp9TlM&callback=initMap"></script>


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
