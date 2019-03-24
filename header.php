<script>
	var myVar;

	function loader() {
		myVar = setTimeout( showPage, 350 );
	}

	function showPage() {
		document.getElementById( "loader" ).style.display = "none";
		document.getElementById( "showNav" ).style.display = "block";
		var showPageList = document.getElementsByClassName( "showPage" );
		showPageList[ 0 ].style.display = "block";

	}
</script>

<head>
<link rel="shortcut icon" href="img/lazyHomework_favicon.png" type="image/png" />
</head>

<body onload="loader()">

	<?php include("checklogin.php"); ?>

	<link href="css/loader.css" rel="stylesheet">
	<div id="loader"></div>
	<div style="display:none;" id="showNav">

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

		<!-- Custom styles for this template -->
		<link href="css/home.css" rel="stylesheet">
		<link rel="stylesheet" href="css/calender.css">
		<link href='calendar/core/main.css' rel='stylesheet' />
    	<link href='calendar/daygrid/main.css' rel='stylesheet' />

		<!-- Needed scripts -->

		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="home.php"><img width="30px" src="img/lazyHomework_logo_klein_hell.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
		

			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<hr noshade style="background-color: white; height: 12px; width: 2px;">
					<li class="nav-item">
						<a class="nav-link" href="stundenplan.php">Stundenplan</a>
					</li>
					<hr noshade style="background-color: white; height: 12px; width: 2px;">
					<li class="nav-item">
						<a class="nav-link" href="kalender.php">Kalender</a>
					</li>
					<hr noshade style="background-color: white; height: 12px; width: 2px;">
					<li class="nav-item">
						<a class="nav-link" href="settings.php">Einstellungen</a>
					</li>
					<hr noshade style="background-color: white; height: 12px; width: 2px;">
				</ul>
			</div>
		</nav>
	</div>