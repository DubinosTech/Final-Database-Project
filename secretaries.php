<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT - CSI2532 :: Secretaries</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPIC GAMES PROJECT - CSI2532</h1>
            <?php breadcrumb("Secretaries") ?>
        </header>

        <a href="newSecretaryView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = "select * from pharmacy.Secretary;";
            $ret = pg_query($db, $sql);
            closeDB();
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "First Name", "Last Name", "Address", "Telephone", ]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 5; $i++) {
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