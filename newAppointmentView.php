<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO PROJECT :: New Appointment</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO PROJECT</h1>
            <?php breadcrumb("New Appointment") ?>
        </header>

        <form action="doNewAppointment.php" method="POST">
            Start: <input type="text" name="date" class="datetimepicker" /><br />
            End: <input type="text" name="endDate" class="datetimepicker" /><br />
            Remarks: <textarea name="remarks" cols="90" rows="10"></textarea><br />
            Patient: <?php patientSelect(); ?><br />
            Doctor: <?php doctorSelect(); ?><br />
            <input type="submit" value="Submit">
        </form>

    </div>
</body>
</html>