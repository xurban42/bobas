<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>O nás | Bobas Reklamní studio Ostrava</title>
  <meta name="description" content="">
  <meta name="author" content="David Krpec, Freelance web developer">
	
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/front.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>
<body>	
	<?php 
		//header bar
		include '../resources/templates/header/navbar.php';

		//About us
		include '../resources/templates/about-us.php';

		//contact
		include '../resources/templates/contact.php';

		//Google map
		include '../resources/templates/hp/map.php';

		//Footer - copyright
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
</body>
</html>