<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT:: Service Medicale</title>
    <style>
        body {
            background-image: url(" r/olympic1.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPIC GAMES</h1>
            <?php breadcrumb("Service Medicale") ?>
        </header>

        <form action="doNewDrugConflict.php" method="POST">
            Nom: <input type="text" name="snom"><br />
            Description: <input type="text" name="sdescription"><br />
            Adresse: <input type="text" name="sadresse"><br />
            Telephone Number: <input type="text" name="stelephone"><br />
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>