<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>COJO :: Nouvelle residence</title>
    <style>
        body {
            background-image: url(" r/residence.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Nouvelle residence") ?>

        </header>

        <form action="doNewPatient.php" method="POST">
            Nom_Residence: <input type="text" name="nom_Residence"><br />
            Capacite_Residence: <input type="text" name="capacite_Residence"><br />
            Adresse_Residence: <input type="text" name="adresse_Residence"><br />
            Telephone_Residence: <input type="text" name="telephone_Residence"><br />
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>