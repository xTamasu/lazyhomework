<!doctype html>
<html lang="en">

<head>
<link rel="shortcut icon" href="img/lazyHomework_favicon.png" type="image/png" />

	<title>LH | Registrierung</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

	<!-- Custom styles for this template -->
	<link href="css/signin.css" rel="stylesheet">
	<style>
	</style>

	<script>

	function check()
	{
		
		if((document.getElementById('inputPassword').value == document.getElementById('inputPasswordVerify').value))
		{
			document.getElementById('inputPasswordVerify').setCustomValidity("");
			document.getElementById('regButton').disabled = false;
		}
		else
		{
			document.getElementById('inputPasswordVerify').setCustomValidity("Passwörter stimmen nicht überein");
			document.getElementById('regButton').disabled = true;
		}
	}

	</script>

</head>

<body class="text-center">
	<form action="registerLogic.php" method="post" class="form-signin">
		<img class="mb-4" src="img/lazyHomework_logo_hell.png" alt="" width="250">
		<p>
			<?php 
			if(isset($_GET['e']))
			{
				$e = $_GET['e']; // e = error, at = already taken, wt = wrong token
				if($e == 'at') 
				{
					echo "Benutzername existiert bereits";
				}
				if($e == 'wt') 
				{
					echo "Falscher Token!";
				}
			}
			?>
			</p>
		<h1 class="h3 mb-3 font-weight-normal" style="color: #EBF4F5">Registrierung</h1>

		<input type="text" name="username" id="inputUsername" class="form-control" style="color: #282E35" placeholder="Benutzername" required autofocus>

		<input type="text" name="token" id="inputToken" class="form-control" style="color: #282E35" placeholder="Klassentoken" required>

		<input type="password" name="password" id="inputPassword" onkeyup='check()' class="form-control" style="color: #282E35" placeholder="Passwort" required>

		<input type="password" id="inputPasswordVerify" onkeyup='check()' class="form-control" style="color: #282E35" placeholder="Passwort bestätigen" required>

		<button type="submit" id="regButton" class="btn btn-lg btn-primary btn-block">Registrieren</button>
		<button class="btn btn-lg btn-primary btn-block" type="button" onclick="window.location.href='index.php'">Zur Anmeldung</button>
		<p class="mt-5 mb-3 text-muted" style="color: #EBF4F5"><?php echo "&copy;" . date("Y")?></p>
	</form>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>

</html>