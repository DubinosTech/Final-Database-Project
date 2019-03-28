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
            Nom: <input type="text" name="name"><br />
            Prénom: <input type="text" name="name"><br />
            Adresse permanente: <input type="text" name="name"><br />
            Adresse olympique: <input type="text" name="name"><br />
            Téléphone: <input type="text" name="name"><br />
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>