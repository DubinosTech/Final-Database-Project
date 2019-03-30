<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pharmabase :: New Secretary</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Pharmabase</h1>
            <?php breadcrumb("New Athlete") ?>
        </header>

        <form action="doNewDoctor.php" method="POST">
            Prenom: <input type="text" name="pprenom"><br />
            Nom: <input type="text" name="pnomDeFamille"><br />
            Adresse Permanante: <input type="text" name="pAdressePermanente"><br />
            Adresse Village: <input type="text" name="pAdresseVillage"><br />
            Pays: <input type="text" name="aPays"><br />
            Medaille: <input type="text" name="aMedaille"><br />
            Officiel: <?php secretarySelect(); ?>
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>