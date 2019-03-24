<!doctype html>
<html>

<head>
<link rel="shortcut icon" href="img/lazyHomework_favicon.png" type="image/png" />
	<meta charset="utf-8">
	<title>LH | Kalender</title>

    <script src='calendar/core/main.js'></script>
    <script src='calendar/daygrid/main.js'></script>
    <script src='calendar/core/locales/de.js'></script>

    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          locale: 'de',
          plugins: [ 'dayGrid' ]
        });

        setTimeout(function(){ // Wartet 360 ms sonst wird der Kalender beim ersten mal nicht richtig angezeigt
        calendar.render();
        }, 360);
      });

    </script>

</head>

<body>
	<?php include ("header.php"); ?>

	<main role="main" class="container">
		<div style="display:none;" class="showPage animate-bottom">
      <div id="calendar">
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