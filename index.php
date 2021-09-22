<?php
include "loginCode.php";
include "contentCode.php";
?>

<?php
function openEdit() {
    header("edit.php");
}

getContent();

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
<div class="content">
    <div class="welkom tekstbox">
        <h4>Welkom bij kinderdagverblijf 't Zjirafke</h4>

        <?php echo content(0, 4, 80);?>
        <?php echo content(1, 2, 80);?>
            <p>'t Zjirafke is open van maandag tot en met vrijdag van 7u tot 18u.</p>

        <a href="over.php"><button>Lees meer</button></a>
<!--        --><?php //editToolzichtbaar(); ?>
<!--        <a href="edit.php">Test</a>-->
<!--        <img src='img/edit.svg' alt='edit' class='editTool' onclick="openEdit()">-->

    </div>
    <div class="gedicht tekstbox">
        <h4>Gedicht van een ouder</h4>
        <p>Een van de ouders heeft voor ons een gedichtje geschreven. Wij waren hierdoor zo ontroerd, dat we het graag met jullie willen delen.</p>
        <p>Druk hieronder op de knop om het te lezen!</p>
        <a href="gedicht.php"><button>Lees meer</button></a>
        <?php editToolzichtbaar(); ?>
    </div>
    <div class="ditdat tekstbox">
        <h4>Ditjes & Datjes</h4>
        <p>Het menu 'Ditjes & Datjes' bevat vooral praktische informatie voor de ouders zoals: hoe inschrijven, informatie over het IKT-systeem, huishoudelijk reglement en dergelijke meer.</p>
        <a href="ditdat.php"><button>Lees meer</button></a>
        <?php editToolzichtbaar(); ?>
    </div>
    <div class="dagje tekstbox">
        <h4>Dagje 't Zjirafke</h4>
        <p>Bij 't Zjirafke zal er steeds worden getracht om elk kind de individuele aandacht te geven die het nodig heeft. Doch werd er een algemene dagplanning opgesteld die je hier kan bekijken. </p>
        <a href="dagje.php"><button>Lees meer</button></a>
        <?php editToolzichtbaar(); ?>
    </div>
    <div class="contact tekstbox">
        <h4>Contacteer ons</h4>
        <p>Hovenierstraat 2A - 2400 MOL-RAUW</p>
        <p>Tel: 014/70.36.69</p>
        <p>GSM Ria: 0498/11 04 79</p>
        <p>GSM Katrien: 0497/28 96 39</p>
        <p>Email: info@tzjirafke.be</p>
        <a href="contact.php"><button>Lees meer</button></a>
        <?php editToolzichtbaar(); ?>
    </div>
</div>

<div class="footerIndex">
    <?php include "footer.php"?>
</div>






</body>
</html>

