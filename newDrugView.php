<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO :: Nouvelle Épreuve</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Nouvelle Épreuve") ?>
        </header>

        <form action="doNewDrug.php" method="POST">
            Nom: <input type="text" name="nomEpreuve"><br />
            Discipline: <input type="text" name="nomDiscipline"><br />
            Installation: <input type="text" name="iNom"><br />
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>