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

<script>
	function copyToClipboard() 
	{
		/* Get the text field */
		var copyText = document.getElementById("token");

		/* Select the text field */
		copyText.select();

		/* Copy the text inside the text field */
		document.execCommand("copy");
	} 
</script>

<head>
<link rel="shortcut icon" href="img/lazyHomework_favicon.png" type="image/png" />
</head>

<body onload="loader()">

	<?php include("checklogin.php"); ?>
	<?php include("getUserInformation.php"); ?>

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
					<!--<hr noshade style="background-color: white; height: 12px; width: 2px;">-->
					<li class="nav-item">
						<a class="nav-link" href="stundenplan.php">Stundenplan</a>
					</li>
					<!--<hr noshade style="background-color: white; height: 12px; width: 2px;">-->
					<li class="nav-item">
						<a class="nav-link" href="kalender.php">Kalender</a>
					</li>
					<!--<hr noshade style="background-color: white; height: 12px; width: 2px;">-->
					<?php

					foreach($conn->query
					(
					"SELECT User.SessionID, Gruppen.gruppe_ID, Gruppen.name, Gruppen.canEditHomework, Gruppen.canEditSettings FROM `User`
					JOIN Gruppen ON User.GruppeID = Gruppen.gruppe_ID
					WHERE SessionID = '" . session_id() . "'"
					) as $userinformation)
					{
						$canEditSettings = $userinformation['canEditSettings'];
					}

					if($canEditSettings == 1)
					{
						echo
						("	
							<li class=\"nav-item\">
							<a class=\"nav-link\" href=\"settings.php\">Einstellungen</a>
							</li>
							<!--<hr noshade style=\"background-color: white; height: 12px; width: 2px;\">-->"
						);
					}
					?>
					<li class="nav-item">
						<a class="nav-link" href="datenschutz.php">Datenschutz</a>
					</li>
					<!--<hr noshade style="background-color: white; height: 12px; width: 2px;">-->
					<li class="nav-item">
						<a class="nav-link" href="impressum.php">Impressum</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
			<div>
			<div class="user">
			<?php
			echo "<p style=\"margin-right:25px; padding-top:5px; font-size: 16px !important; color: white;\">".$username . "@" . $gruppeName."</p>";
			?>
			</div>
			<div class="user">
			<?php
			echo "<img src=\"img/icons/Icon_" . $gruppeName . "32.png\"></img>"
			?>
			</div>
			</div>
		</nav>
	</div>