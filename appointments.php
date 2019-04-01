<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT  :: Appointments</title>
    <style>
        body {
            background-image: url(" r/athlete.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPIC GAMES PROJECT</h1>
            <?php breadcrumb("Appointments") ?>
        </header>

        <a href="newAppointmentView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = <<<EOF
            select a.id, a.date, a.endDate, p.firstName || ' '  || p.lastName, 
                d.firstName || ' ' || d.lastName
            from cojoDatabase.Appointment a
            join cojoDatabase.Patient p on a.patient = p.id
            join cojoDatabase.Doctor d on a.doctor = d.id;
EOF;
            $ret = pg_query($db, $sql);
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "Start", "End", "Remarks", "Patient", "Doctor"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 3; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }
                    echo "<td><a href='editAppointmentView.php?id=$row[0]'>Read</a></td>";
                     for ($i = 3; $i < 5; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }
                    if($_SESSION['loggedin'])
                    {
                    editCell("Appointment", $row[0]);
                    deleteCell("Appointment", $row[0]);
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