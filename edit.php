<?php
include "databaseGegevens.php";



function getContent() {
    global $db;
    global $inhoud;

    $query = "SELECT content.tekst FROM content WHERE id=1;";

    $prepstatement = $db->prepare($query);
    $prepstatement->execute();

    $inhoud = $prepstatement->fetchColumn();

    return $inhoud;

}


$inhoud1 = "hallo";

function updateContent() {
    global $db;

    $input = $_POST["input"];

    $query = "UPDATE content SET tekst =:input WHERE id = 1;";

    $prepstatement = $db->prepare($query);
    $prepstatement->bindParam(':input', $input);
    $prepstatement->execute();

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Homepage</h1>
<p>Wijzig hier de inhoud van de website</p>

<form method="post">
<!--    <label for="input">Test</label>-->
    <textarea rows = "5" cols = "50" name ="input"><?php echo getContent() ?></textarea>
<!--    <input type="text" value="--><?php //echo getContent() ?><!--" name="input" style="width: 1000px; height: 30px">-->
    <input type="submit" value="Opslaan" onclick="<?php updateContent() ?>">
</form>


</body>
</html>
