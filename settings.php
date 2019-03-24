<!doctype html>
<html>

<head>
<link rel="shortcut icon" href="img/lazyHomework_favicon.png" type="image/png" />
	<meta charset="utf-8">
	<title>LH | Einstellungen</title>
</head>

<body>
	<?php include ("header.php"); ?>

	<?php
	if($canEditSettings == 0) // Verhindert dass User ohne Rechte in die Einstellungen kommen
	{
		header("Location:home.php");
	}
	?>

	<main role="main" class="container">
		<div style="display:none;" class="showPage animate-bottom">
			<div class="starter-template">
				<img class="mb-4 centerme" src="img/lazyHomework_Logo.png" alt="" width="250">
				<div class="settings">
					<label>
				Neuen Schüler anlegen:
				</label>
					<form>
						<label for="username">Username:</label>
						<select name="formUsername">
							<option value="">Benutzer...</option>
						</select>
						<select name="formRechte">
							<option value="">Rechte...</option>
							<option value="Admin">Admin</option>
							<option value="Lehrer">Lehrer</option>
							<option value="Schueler">Schüler</option>
						</select>
						<input type="submit" value="Ändern">
					</form>
				</div>
				
				
				
				<div class="settings">
				<label>
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

						<input type="submit" value="Ändern">
					</form>
				</div>
				
				
				<div class="settings">
				<label>
				Gruppen verwalten:
				</label>
				<form>
					<label for="username">Gruppe:
				</label>
					<select name="formRechte">
						<option value="">Auswählen...</option>
						<option value="Admin">Admin</option>
						<option value="Lehrer">Lehrer</option>
						<option value="Schueler">Schüler</option>
					</select>
					<input type="submit" value="Ändern">
					</div>
					
					
					<div class="settings">
						<table>
							<tr align="center">
								<th>Alles</th>
								<th>Test2</th>
								<th>Test3</th>
							</tr>
							<tr align="center">
								<td><input type="checkbox" id="alter" name="alter">
								</td>
								<td><input type="checkbox" id="alter" name="alter">
								</td>
								<td><input type="checkbox" id="alter" name="alter">
								</td>
						</table>
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