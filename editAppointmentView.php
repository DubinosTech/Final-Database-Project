<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "select * from cojoDatabase.Appointment where id = $1";
    $sql = "select * from cojoDatabase.ServiceTransport where id = $1";

    $ret = pg_query_params($db, $sql, [$_GET["id"]]);
    closeDB();
    if (!$ret) {
        header("Location: appointments.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO PROJECT</h1>

            <h1>COJO</h1>

        </header>

        <?php  $r = pg_fetch_row($ret); ?>
        <form action="doEditAppointment.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $r[0] ?>"><br />
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>