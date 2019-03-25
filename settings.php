<!doctype html>
<html>

<head>
<link rel="shortcut icon" href="img/lazyHomework_favicon.png" type="image/png" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>LH | Einstellungen</title>
</head>

<body>
	<link href="css/settings.css" rel="stylesheet">
	
	<?php include ("header.php"); ?>

	<?php
	if($canEditSettings == 0) // Verhindert dass User ohne Rechte in die Einstellungen kommen
	{
		header("Location:home.php");
	}
	?>

	<?php // Liefert alle Settings
	
	foreach($conn->query("SELECT * FROM `settings`") as $settings)
	{
		if($settings['settings_ID'] == "1")
		$registerToken = $settings['registerToken'];
	}

	/*foreach($conn->query("SELECT User.Benutzername, Gruppen.name FROM `User` JOIN Gruppen ON User.GruppeID = Gruppen.gruppe_ID") as $userlist)
	{
	}*/



	
	?>

	<main role="main" class="container">
		<div style="display:none;" class="showPage animate-bottom">
			<div class="starter-template">
				<img class="mb-4 centerme" src="img/lazyHomework_Logo.png" alt="" width="250">
				<div class="settings">
				<label class="h5">
				Registrierungstoken:
				</label>
					<form method="post">
						<label for="username">Token:
					<?php
					echo("<input id=\"token\" value=\"$registerToken\" type=\"text\" name=\"token\">")
					?>
				</label>
						<button type="button" onclick="copyToClipboard()" class="btn"><i style="-webkit-appearance: none;" class="far fa-copy"></i></button>
						<button type="submit" formaction="functions.php" name="updateRegisterToken" class="btn"><i class="fas fa-sync-alt" style="-webkit-appearance: none;"></i></button>
					</form>
				</div>
				
				
				
				<div class="settings">
				<label class="h5">
				Benutzerrechte:
				</label>
					<form>
						<label for="username">Username:
					<input id="username" name="username">
				</label>
						<select name="formRechte">
							<option value="">Rechte...</option>
							<option value="Admin">Admin</option>
							<option value="Lehrer">Lehrer</option>
							<option value="Schueler">Schüler</option>
						</select>

						<input class="btn" type="submit" value="Ändern">
					</form>
				</div>
				
				
				<div class="settings">
				<label class="h5">
				Gruppen verwalten:
				</label>
				<form>
						<table class="table-fill">
							<thead>
								<tr>
									<th class="text-center">Gruppe</th>
									<th class="text-center">Hausaufgaben</th>
									<th class="text-center">Einloggen</th>
									<th class="text-center">Einstellungen</th>
								</tr>
							</thead>
							<tbody class="table-hover">
								<tr>
									<td class="text-center"><label>Schüler</label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
								</tr>
								<tr>
									<td class="text-center"><label>Priv. Schüler</label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
								</tr>
								<tr>
									<td class="text-center"><label>Lehrer</label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
								</tr>
								<tr>
									<td class="text-center"><label>Admin</label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
								</tr>
								<tr>
									<td class="text-center"><label>Ausgeschlossen</label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
									<td class="text-center"><label class="container"><input type="checkbox"><span class="checkmark"></span></label></td>
								</tr>
							</tbody>
						</table>
						<input class="btn" type="submit" value="Änderung speichern">
					</div>
				</form>
				</div>
			</div>
		</div>
	</main>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>