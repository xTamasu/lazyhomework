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
	
	foreach($conn->query("SELECT * FROM `Settings`") as $settings)
	{
		if($settings['settingName'] == "registerToken")
			$registerToken = $settings['settingValue'];
	}

	//$allgroups = $conn->query("SELECT * FROM `Gruppen` WHERE Gruppen.name != \"Admin\" AND Gruppen.name != \"Ausgeschlossen\""); SIEHE ZEILE 88
	
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
					echo("<input id=\"token\" value=\"$registerToken\" type=\"text\" name=\"token\">");
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
				<form action="functions.php" method="post">
					<label for="username">Benutzername:
					<select id="username" name="username">
					<?php 
						foreach($conn->query("SELECT User.Benutzername FROM User") as $userlist)
						{
							echo("<option value='" . $userlist['Benutzername'] . "'>" . $userlist['Benutzername'] . "</option>");
						}			
					?>
					</select>
				</label>
				<select name="permission" id="permission">
				<?php
					foreach($conn->query("SELECT Gruppen.gruppe_ID, Gruppen.name FROM `Gruppen` WHERE Gruppen.name != \"Admin\" AND Gruppen.name != \"Ausgeschlossen\"") as $gruppenlist)
					{
						echo("<option value=\"". $gruppenlist['gruppe_ID'] ."\">".$gruppenlist['name']."</option>");
					}
				?>
				</select>
				<input class="btn" name="changePermission" type="submit" value="Ändern">
				</form>
				</div>
				<?php /* WIRD IN SPÄTERER VERSION EINGEFÜGT NICHT RELEVANT FÜR RELEASE
				"<!--
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
									<?php
									foreach($allgroups as $groups1)
									{
										$isChecked = "";
										if($groups1['canEditHomework'] == "1")
										{
											$isChecked = "checked";
										}
										echo("<td class=\"text-center\"><label class=\"container\"><input type=\"checkbox\"" . $isChecked . "><span class=\"checkmark\"></span></label></td>");
									}
									?>
								</tr>
								<tr>
									<td class="text-center"><label>Erw. Schüler</label></td>
									<?php
									foreach($allgroups as $groups2)
									{
										$isChecked = "";
										if($groups2['canEditHomework'] == "1")
										{
											$isChecked = "checked";
										}
										echo("<td class=\"text-center\"><label class=\"container\"><input type=\"checkbox\"" . $isChecked . "><span class=\"checkmark\"></span></label></td>");
									}
									?>
								</tr>
								<tr>
									<td class="text-center"><label>Lehrer</label></td>
									<?php
									foreach($allgroups as $groups3)
									{
										echo("<td class=\"text-center\"><label class=\"container\"><input type=\"checkbox\"><span class=\"checkmark\"></span></label></td>");
									}
									?>
								</tr>
							</tbody>
						</table>
						<input class="btn" type="submit" value="Änderung speichern">
					</div>
				</form>
				</div>
				*/?>
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