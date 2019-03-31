<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO :: Ajouter Épreuve</title>
    <style>
        body {
            background-image: url(" r/epreuve.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Ajouter Épreuve") ?>
        </header>

        <form action="doNewEpreuve.php" method="POST">
            Nom d'Epreuve: <input type="text" name="nomEpreuve"><br />
            Discipline: <input type="text" name="nomDiscipline"><br />
            Installation: <?php installationSelect(); ?>
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>


