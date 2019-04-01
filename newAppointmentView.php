<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO PROJECT :: nouveau transport</title>
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
            <?php breadcrumb("nouveau transport") ?>
        </header>

        <form action="doNewAppointment.php" method="POST">
            Depart: <input type="text" name="depart" class="datetimepicker" /><br />
            Arrivee: <input type="text" name="arrivee" class="datetimepicker" /><br />
            Itineraire: <textarea name="itineraire" cols="90" rows="10"></textarea><br />
            FreqHoraire: <textarea name="frequHoraire" cols="90" rows="10"></textarea><br />
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>