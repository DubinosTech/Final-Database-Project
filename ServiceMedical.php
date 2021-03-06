<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT - CSI2532 :: Service Medicale</title>
    <style>
        body {
            background-image: url(" r/olympic3.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPIC GAMES</h1>
            <?php breadcrumb("Service Medicale") ?>
        </header>

        <?php flash(); ?>

        <h2>Tableau des Services Medicales</h2>

        <a href="newServiceMedicalView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = <<<EOF
                select S.id, S.snom, S.sdescription, S.sadresse, S.stelephone
                from cojoDatabase.ServiceMedical S
EOF;
            $ret = pg_query($db, $sql);
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "Nom", "Description", "Adresse", "Telephone Number"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 5; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }
                    if(isset ($_SESSION['loggedin']) && $_SESSION['loggedin'])
                    {
                    editCell("ServiceMedical", $row[0]);
                    deleteCell("ServiceMedical", $row[0]);
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