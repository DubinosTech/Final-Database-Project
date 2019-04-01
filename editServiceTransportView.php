<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "select * from cojoDatabase.ServiceTransport where id = $1";
    $ret = pg_query_params($db, $sql, [$_GET["id"]]);
    closeDB();
    if (!$ret) {
        setFlash("This isn't the serviceTransport you're looking for.");
        header("Location: servicetransport.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>COJO :: Modifier un transport</title>
    <style>
        body {
            background-image: url(" r/transport.jpg");
        } </style>

    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Modifier un transport") ?>
        </header>

        <?php  $r = pg_fetch_row($ret); ?>
        <form action="doEditServiceTransport.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $r[0] ?>"><br />
            Depart: <input type="text" class="datetimepicker" name="depart" value="<?php echo $r[1]; ?>" /> <br />
            Arrivee: <input type="text" class="datetimepicker" name="arrivee" value="<?php echo $r[2]; ?>" /> <br />
            Itineraire: <textarea name="itineraire"cols="90" rows="10"><?php echo $r[3]; ?></textarea> <br />
            FrequenceHoraire: <textarea name="freqHoraire"cols="90" rows="10"><?php echo $r[4]; ?></textarea> <br />
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>