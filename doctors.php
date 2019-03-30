<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT  :: Athlètes
    </title>
    <style>
        body {
            background-image: url(" r/olympic1.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper ">
    
        <header>
            <h1>COJO OLYMPIC GAMES PROJECT</h1>
            <?php breadcrumb("Athletes") ?>
        </header>

        <a href="newDoctorView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = <<<EOF
            select d.id, d.pprenom, d.pnomDeFamille, d.pAdressePermanente, d.pAdresseVillage, d.aPays, d.aMedaille,s.name
            from pharmacy.Athlete d join
            (select id, id || ': ' || pprenom || ' ' || pnomDeFamille as name from pharmacy.Officiel) s
            on d.officiel = s.id;
EOF;
            $ret = pg_query($db, $sql);
            closeDB();

            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "Prenom", "Nom", "Address Permanante", "Adresse Village", "Medaille", "Pays", "Superviseur"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 8; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }

                    editCell("Doctor", $row[0]);
                    deleteCell("Doctor", $row[0]);

                    echo "</tr>";
                }

                endDatatable();
            }
        ?>
    </div>
</body>
</html>