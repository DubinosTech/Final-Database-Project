<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT - CSI2532 :: Officiels</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPIC GAMES PROJECT - CSI2532</h1>
            <?php breadcrumb("Officiels") ?>
        </header>

        <a href="newSecretaryView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = "select * from pharmacy.Officiel;";
            $ret = pg_query($db, $sql);
            closeDB();
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "First Name", "Last Name", "Address Permanante", "Adresse Village","Type"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 6; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }

                    editCell("Secretary", $row[0]);
                    deleteCell("Secretary", $row[0]);

                    echo "</tr>";
                }

                endDatatable();
            }
        ?>
    </div>
</body>
</html>