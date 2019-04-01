<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO PROJECT :: Nouveau Service De Transport</title>
    <style>
        body {
            background-image: url(" r/newTransp.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO PROJECT</h1>
            <?php breadcrumb("Nouveau service de transport") ?>
        </header>

        <form action="doNewAppointment.php" method="POST">
            Depart: <input type="text" name="depart" class="datetimepicker"><br />
            Arrivée: <input type="text" name="arrivee" class="datetimepicker"><br />
            Itineraire: <input type="text" name="itineraire"><br />
            Frequence Horaire: <input type="text" name="freqHoraire"><br />
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>