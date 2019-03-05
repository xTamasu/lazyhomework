<!doctype html>
<html lang="en">
<head>
	<title>LH | Hausaufgaben</title>
</head>


<script>
	function showInputs() {
		var inputList = document.getElementsByClassName( "hiddenByJavaScript" );
		inputList[ 0 ].style.display = "table-row";
	}
</script>


<?php error_reporting(E_ALL); ini_set('display_errors', '1'); ?>
<?php// include ("functions.php"); ?>
<?php include ("header.php"); ?>

<main role="main" class="container">
	<div style="display:none;" class="showPage animate-bottom">
		<?php include ("connector.php"); ?>

		<div class="starter-template">
			<img class="mb-4 centerme" src="img/lazyHomework_logo_dunkel.png" alt="" width="250">
			<table style="width: 100%; border: 5px solid black;">
				<tr>
					<form action="functions.php" method="post">
						<th>Fach</th>
						<th>Aufgabe</th>
						<th>Datum</th>
						<th>Bis</th>
						<th>Löschen</th>
					</form>
				</tr>

				<tr class="hiddenByJavaScript" style="background-color: white;">
					<form action="functions.php" method="post">
						<td><input type="text" name="fach">
						</td>
						<td><input type="text" name="aufgabe">
						</td>
						<td><input type="date" name="dateVon">
						</td>
						<td><input type="date" name="dateBis">
						</td>
						<td><button type="submit" name="sentNewEntry" class="btn btn-outline-warning" type="submit">Neuer Eintrag</button>
						</td>
					</form>
				</tr>

				<tr>
				</tr>
				<?php // WICHTIG DAMIT DIE FARB FORMATION EINGEHALTEN WIRD!!! ?>

				<?php
				$conn = new mysqli( $servername, $username, $password, $dbname );
				$sql = "SELECT * FROM `hausaufgaben` WHERE DATE(Bis) > DATE(NOW()-1)";
				if ( $conn->connect_error ) {
					die( "Connection failed: " . $conn->connect_error );
				}
				$result = $conn->query( $sql );
				if ( $result->num_rows > 0 ) {
					while ( $row = $result->fetch_assoc() ) {

						echo "<tr><td>" . $row[ "Fach" ] . "</td>";
						$task = utf8_decode($row[ "Aufgabe" ]);
						echo "<td>" . $task . "</td>";
						$date = date_create($row["Datum"]);
						echo "<td>" . date_format($date, 'd.m.Y') . "</td>";
						$bis = date_create($row["Bis"]);
						echo "<td>" . date_format($bis, 'd.m.Y') . "</td>";
						echo "<td style=\"width:50px;\"><form method=\"post\" action=\"functions.php\"><button type=\"submit\" name=\"sentDeleteEntry\" value=\"" . $row[ "ID" ] . "\" class=\"btn btn-outline-danger\" type=\"submit\">Löschen</button></form></td></tr>";
					}
				} else {
					echo "Keine Einträge";
				}

				$conn->close();
				?>
			</table>

			<button type="button" onclick="showInputs();" class="btn btn-outline-warning">Neuer Eintrag</button>
			</form>

		</div>
	</div>
</main>
<!-- /.container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>