<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT  :: Residences
    </title>
    <style>
        body {
            background-image: url(" r/residence.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper ">

        <header>
            <h1>COJO OLYMPIC GAMES PROJECT</h1>
            <?php breadcrumb("Residence") ?>
        </header>

        <a href="newPatientView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = <<<EOF
            select * from cojodatabase.Residence order by id;
EOF;
            $ret = pg_query($db, $sql);
            closeDB();

            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["id", "nomResidence", "capaciteResidence", "adresseResidence", "telephoneResidence"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 5; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }
                    editCell("Patient", $row[0]);
                    deleteCell("Patient", $row[0]);

                    echo "</tr>";
                }

                endDatatable();
            }
        ?>
    </div>
</body>
</html>