<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO :: Residences</title>
    <style>
        body {
            background-image: url(" r/residence.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO </h1>
            <?php breadcrumb("Residences") ?>
        </header>

        <?php flash(); ?>

        <a href="newPatientView.php" class="new"> Ajouter nouvelle residence</a>

        <?php
            connectDB();
            $sql = "select * from pharmacy.Residence order by id;";
            $ret = pg_query($db, $sql);
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["id","nom_Residence", "capacite_Residence", "telephone_Residence", "adresse_Residence"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 5; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }

                    editCell("Residence", $row[0]);
                    deleteCell("Residence", $row[0]);

                    echo "</tr>";
                }

                endDatatable();
            }
            closeDB();
        ?>
    </div>
</body>
</html>