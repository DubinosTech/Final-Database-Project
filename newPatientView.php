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
            Nom_Residence: <input type="text" name="firstName"><br />
            Capacite_Residence: <input type="text" name="lastName"><br />
            <!--Birth date: <input type="text" class="datepicker" name="birthDate"><br /> -->
            Adresse_Residences: <input type="text" name="address"><br />
            Telephone_Residence: <input type="text" name="tel"><br />
            <!--Sex: <?php sexSelect(); ?><br />-->
            <!--SSN: <input type="text" name="ssn"><br />-->
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>