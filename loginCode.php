<?php

// werken met een echte database ivm een hard coded database in de code

session_start();
$WrongPasswordText = "none";

$dbUsername = "root";
$dbPassword = "";
$dbHostname = "localhost";
$dbDatabank = "tzjirafke";

$db = new PDO("mysql:host=$dbHostname; dbname=$dbDatabank", "$dbUsername", "$dbPassword");


function loopUsers ($username, $password) {

    global $WrongPasswordText;
    global $opvragen;
    global $db;
    $query = "SELECT * FROM gebruikers WHERE gebruiker=:username AND wachtwoord=:password";

    $prepstatement = $db->prepare($query);
    $prepstatement->bindParam(':username', $username);
    $prepstatement->bindParam(':password', $password);
    $prepstatement->execute();

    while ($opvragen = $prepstatement->fetch()) {
        if ($opvragen["gebruiker"] == $username && $opvragen["wachtwoord"]== $password) {
            $_SESSION["id"] = $opvragen["id"];
            $_SESSION["rol"] = $opvragen["rol"];
            header("location: index.php");
            exit(); // belangrijk om crawlers tegen te gaan en het script te laten stoppen.
        } else {
            $WrongPasswordText = "inline";
        }
    }
}


if (isset($_POST["gebruiker"]) && (isset($_POST["wachtwoord"]))) {
    $_SESSION["gebruiker"]= $_POST["gebruiker"];
    $username = $_POST["gebruiker"];
    $password = $_POST["wachtwoord"];
    loopUsers($username, $password);
}


function editToolzichtbaar() {
    if (isset($_SESSION["rol"])) {
        if ($_SESSION["rol"]=="admin") {
            echo "<img src='img/edit.svg' alt='edit' class='editTool' onclick='openEdit()'>";
        }
    }

}
//
//function openEdit() {
//    echo "test";
//    header("edit.php");
//}

