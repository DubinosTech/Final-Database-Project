<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "select * from pharmacy.Appointment where id = $1";
    $ret = pg_query_params($db, $sql, [$_GET["id"]]);
    closeDB();
    if (!$ret) {
        setFlash("This isn't the appointment you're looking for.");
        header("Location: appointments.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO :: Modifier un transport</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Modifier un transport") ?>
        </header>

        <?php  $r = pg_fetch_row($ret); ?>
        <form action="doEditAppointment.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $r[0] ?>"><br />
            Depart: <input type="text" class="datetimepicker" name="date" value="<?php echo $r[1]; ?>" /> <br />
            Arrivee: <input type="text" class="datetimepicker" name="endDate" value="<?php echo $r[2]; ?>" /> <br />
            Itineraire: <textarea name="Itineraire"cols="90" rows="10"><?php echo $r[3]; ?></textarea> <br />
            FrequenceHoraire: <textarea name="FrequenceHoraire"cols="90" rows="10"><?php echo $r[3]; ?></textarea> <br />
            <!--Patient: <?php patientSelect($r[4]); ?> <br /> -->
            <!-- Doctor: <?php doctorSelect($r[5]); ?> <br /> -->
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>