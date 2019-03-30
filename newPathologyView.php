<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO :: Nouveau Employé</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Nouveau Employé") ?>
        </header>

        <form action="doNewPathology.php" method="POST">
            Nom: <input type="text" name="pnomDeFamille"><br />
            Prénom: <input type="text" name="pprenom"><br />
            Adresse permanente: <input type="text" name="pAdressePermanente"><br />
            Adresse olympique: <input type="text" name="pAdresseOlympique"><br />
            Téléphone: <input type="text" name="telephone"><br />
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>