<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT - CSI2532</title>
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
            <?php breadcrumb("COJO OLYMPIC GAMES") ?>
        </header>

		<form action="doNewDrugScript.php" method="POST">
            Nom: <input type="text" name="iNom"><br />
            Adresse: <input type="text" name="adresse"><br />
            Usage: <input type="text" name="usage"><br />
            Description: <input type="text" name="description"><br />
            Capacite: <input type="text" name="capacite"><br />
            <input type="submit" value="Submit">
        </form>
    </div> 
</body>
</html>