<?php session_start(); ?>

<?php
    include ("connector.php");
    function checkPassword($conn, $username, $password) 
    {

        $sql= "SELECT * FROM User WHERE Benutzername='" . $username . "'";
        $result = $conn->query($sql);

        $user = $result->fetch_assoc();

        if(($user["Benutzername"] == $username) && password_verify($password, $user["Passwort"])) 
        {
            $_SESSION['userid'] = $user['SessionID'];
            header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/home.php");	
        }
        else
        {
            echo "Fehler beim Anmelden!";
        }
    }

    if(isset($_POST['startLogin']))
        checkPassword($conn, $_POST['username'], $_POST['password']);

?>