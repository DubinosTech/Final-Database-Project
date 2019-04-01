<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT  :: Service Transport</title>
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
            <?php breadcrumb("Service Transport") ?>
        </header>

        <a href="newAppointmentView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = "select * from cojoDatabase.ServiceTransport;";
            $ret = pg_query($db, $sql);
            closeDB();
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["id", "depart", "arrivee", "itineraire", "freqHoraire"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 5; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }
                    if(isset ($_SESSION['loggedin']) && $_SESSION['loggedin'])
                    {
                    editCell("Appointment", $row[0]);
                    deleteCell("Appointment", $row[0]);
                    }
                    echo "</tr>";
                }

                endDatatable();
            }
        ?>
    </div>
</body>
</html>