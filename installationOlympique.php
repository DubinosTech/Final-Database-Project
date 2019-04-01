<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT - CSI2532 :: Installation Olympique</title>
    <style>
        body {
            background-image: url(" r/olympic3.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPIC GAMES PROJECT - CSI2532</h1>
            <?php breadcrumb("Installation Olympique") ?>
        </header>

        <h2>Tableau des Installations Olympiques</h2>

        <a href="newinstallationOlympiqueView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = <<<EOF
                select I.id, I.iNom, I.adresse, I.usage, I.description, I.capacite
                from cojoDatabase.Installation I
EOF;
            $ret = pg_query($db, $sql);
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "Nom", "Adresse", "Usage", "Description", "Capacite"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 6; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }
                    if(isset ($_SESSION['loggedin']) && $_SESSION['loggedin'])
                    {
                    editCell("InstallationOlympique", $row[0]);
                    deleteCell("InstallationOlympique", $row[0]);
                    }
                    echo "</tr>";
                }

                endDatatable();
            }
            closeDB();
        ?>

    </div>
</body>
</html>