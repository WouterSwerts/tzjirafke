<?php
include_once "loginCode.php";

?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welkom bij kinderdagverblijf 't Zjirafke</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <!--    <link rel="manifest" href="img/site.webmanifest">-->
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#77bdf2">
    <meta name="msapplication-TileColor" content="#77bdf2">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Unkempt' rel='stylesheet'>
    <link href="http://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet" type="text/css">

</head>
<body>
<div class="hoofding">
    <?php include "header.php"?>
</div>

<div class="loginContainer tekstbox">
    <p>Deze pagina is enkel toegankelijk voor medewerkers van 't Zjirafke</p>
    <div class="formulier">
        <form method="post">
            <label for="gebruiker">Gebruikersnaam</label>
            <input type="text" name="gebruiker">
            <label for="wachtwoord">Wachtwoord</label>
            <input type="password" name="wachtwoord">
            <button>Login!</button>
        </form>
    </div>


</div>

<div class="footerGedicht">
    <?php include "footer.php"?>
</div>






</body>
</html>

