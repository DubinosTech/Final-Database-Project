<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT  :: Service de transport</title>
    <style>
        body {
            background-image: url(" r/transport.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPIC GAMES PROJECT</h1>
            <?php breadcrumb("Service de transport") ?>
        </header>

        <a href="newAppointmentView.php" class="new">Nouveau trajet</a>

        <?php
            connectDB();
            $sql = "select * from cojoDatabase.ServiceTransport order by id;";
            $ret = pg_query($db, $sql);
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "Depart", "Arrivee", "Itineraire", "FrequenceHoraire"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 3; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }
                    echo "<td><a href='editAppointmentView.php?id=$row[0]'>Read</a></td>";
                     for ($i = 3; $i < 5; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }

                    editCell("ServiceTransport", $row[0]);
                    deleteCell("ServiceTransport", $row[0]);

                    echo "</tr>";
                }

                endDatatable();
            }
            closeDB();
        ?>
    </div>
</body>
</html>