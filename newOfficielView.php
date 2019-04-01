<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT  :: Officiels </title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPIC GAMES PROJECT</h1>
            <?php breadcrumb("Ajouter un officiel") ?>
        </header>

        <form action="doNewOfficiel.php" method="POST">
            Prenom: <input type="text" name="pprenom"><br />
            Nom: <input type="text" name="pnomDeFamille"><br />
            Adresse Permanante: <input type="text" name="pAdressePermanente"><br />
            Adresse Village: <input type="text" name="pAdresseVillage"><br />
            Type: <input type="text" name="otype"><br />
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>