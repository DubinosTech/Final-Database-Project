<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO PROJECT :: Nouvelle residence</title>
    <style>
        body {
            background-image: url(" r/residence.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO PROJECT</h1>
            <?php breadcrumb("Nouvelle residence") ?>
        </header>

        <form action="doNewPatient.php" method="POST">
            Nom residence: <input type="text" name="nomResidence"><br />
            Capacite residence: <input type="text" name="capaciteResidence"><br />
            Adresse Residence: <input type="text" name="adresseResidence"><br />
            Telephone residence: <input type="text" name="telephoneResidence"><br />
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>