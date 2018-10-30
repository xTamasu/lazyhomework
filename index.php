<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

     <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <body class="text-center" background="img/background_cloud.jpg">
      <form action="login.php" class="form-signin" method="post">
        <img class="mb-4" src="img/logo.png" alt="" width="250">
        <h1 class="h3 mb-3 font-weight-normal">Anmeldung</h1>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Anmeldung merken
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="startLogin">Anmelden</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  </body>
</html>