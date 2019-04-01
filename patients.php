<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT - CSI2532 :: Residences</title>
    <style>
        body {
            background-image: url(" r/residence.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPIC GAMES PROJECT - CSI2532</h1>
            <?php breadcrumb("Patients") ?>
            <?php breadcrumb("Residence") ?>
        </header>

        <?php flash(); ?>

        <a href="newPatientView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = "select * from cojoDatabase.Patient order by id;";
            $sql = "select * from cojodatabase.Patient order by id;";
            $sql = "select * from cojodatabase.Residence order by id;";
            $ret = pg_query($db, $sql);
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "First Name", "Last Name", "Birth Date", "Address", "Telephone", "Sex", "SSN"]);
                datatable(["id", "nomResidence", "capaciteResidence", "adresseResidence", "telephoneResidence"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 8; $i++) {
                    for ($i = 0; $i < 5; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }

                    editCell("Patient", $row[0]);
                    deleteCell("Patient", $row[0]);

                    echo "</tr>";
                }

                endDatatable();
            }
            closeDB();
        ?>
    </div>
</body>
</html>