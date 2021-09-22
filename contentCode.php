<?php
include "databaseGegevens.php";

$inhoud = "";

function getContent() {
    global $db;
    global $inhoud;

    $query = "SELECT content.tekst FROM content;";

    $prepstatement = $db->prepare($query);
    $prepstatement->execute();

    $inhoud = $prepstatement->fetchAll();

    return $inhoud;

}

function editText() {
    global $inhoud;

    if (isset($_SESSION["rol"])) {
        echo "<form method='post'>
                <textarea rows = '5' cols = '50' name ='input'><?php echo getContent() ?></textarea>
                <input type='submit' value='Opslaan' onclick='<?php updateContent() ?>'>
                </form>";
    } else {
        echo "<p><?php echo {$inhoud}; ?></p>";
        echo 'test';
    }
}


//var_dump(getContent());
//echo $inhoud[0]['tekst'];

function content($id, $row, $cols) {
    getContent();
    global $inhoud;
    if (!isset($_SESSION["rol"])) {
        echo "<p> {$inhoud[$id]['tekst']}</p>";
    } else {
        echo "<form method='post'>
                <textarea rows = '{$row}' cols = '{$cols}' name ='input'>{$inhoud[$id]['tekst']}</textarea>
                </form>";
    }
}