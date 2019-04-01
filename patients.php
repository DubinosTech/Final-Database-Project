<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT - CSI2532 :: Patients</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPIC GAMES PROJECT - CSI2532</h1>
            <?php breadcrumb("Patients") ?>
        </header>

        <?php flash(); ?>

        <a href="newPatientView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = "select * from cojoDatabase.Patient order by id;";
            $ret = pg_query($db, $sql);
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "First Name", "Last Name", "Birth Date", "Address", "Telephone", "Sex", "SSN"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 8; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }
                    if($_SESSION['loggedin'])
                    {
                    editCell("Patient", $row[0]);
                    deleteCell("Patient", $row[0]);
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