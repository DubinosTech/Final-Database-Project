<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO :: Reservation de transport</title>
    <style>
        body {
            background-image: url("r/trajet.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Reservation de transport") ?>
        </header>

        <form action="doNewAppointment.php" method="POST">
            Depart: <input type="text" name="depart" class="datetimepicker" /><br />
            Arrivee: <input type="text" name="arrivee" class="datetimepicker" /><br />
            Itineraire: <textarea name="Itineraire" cols="90" rows="10"></textarea><br />
            FrequenceHoraire: <textarea name="FrequenceHoraire"cols="90" rows="10"></textarea><br />
            <!--Patient: <?php patientSelect(); ?><br /> -->
            <!--Doctor: <?php doctorSelect(); ?><br />-->
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>