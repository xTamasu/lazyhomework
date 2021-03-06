<!doctype html>
<html lang="en">

<head>
<link rel="shortcut icon" href="img/lazyHomework_favicon.png" type="image/png" />

	<title>LH | Anmeldung</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

	<!-- Custom styles for this template -->
	<link href="css/signin.css" rel="stylesheet">
	</head>

	<body class="text-center">
	
		<form action="loginLogic.php" method="post" class="form-signin">
			<img class="mb-4" src="img/lazyHomework_logo_hell.png" alt="" width="250">
			<p>
			<?php 
			if(isset($_GET['e']))
			{
				$e = $_GET['e']; // e = error, wp = wrong password, ne = no entry, sr = sucessful registration, lo = logout
				if($e == 'wp') 
				{
					echo "Falscher Benutzername oder Passwort!";
				}
				if($e == 'ne') 
				{
					echo "Keine Eingabe!";
				}
				if($e == 'sr')
				{
					echo "Erfolgreiche Registrierung!";
				}
				if($e == 'lo')
				{
					echo "Erfolgreich abgemeldet!";
				}
			}
			

			?>
			</p>
			<h1 class="h3 mb-3 font-weight-normal" style="color: #EBF4F5">Anmeldung</h1>
			<div>
				<label for="inputUsername" class="sr-only">Username</label>
				<input type="username" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
			</div>
			<div>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
			</div>
			
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit" onclick="window.location.href='loginLogic.php'">Anmelden</button>
			<button class="btn btn-lg btn-primary btn-block" type="submit" onclick="window.location.href='register.php'">Registrieren</button>
			<p class="mt-5 mb-3 text-muted" style="color: #EBF4F5"><?php echo "&copy;" . date("Y")?></p>
		</form>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

	</body>

</html>