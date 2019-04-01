<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "select * from cojoDatabase.ServiceTransport where id = $1";
    $ret = pg_query_params($db, $sql, [$_GET["id"]]);
    closeDB();
    if (!$ret) {
        setFlash("This isn't the serviceTransport you're looking for.");
        header("Location: appointments.php");
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
            <h1>COJO PROJECT</h1>

            <h1>COJO</h1>
            <?php breadcrumb("Modifier un transport") ?>
        </header>

        <?php  
            $r = pg_fetch_row($ret); 
            
            ?><form action="doEditAppointment.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $r[0] ?>"><br />
                Depart: <input type="text" class="depart" name="depart" value="<?php echo $r[1]; ?>" /> <br />
                Arrivee: <input type="text" class="arrivee" name="arrivee" value="<?php echo $r[2]; ?>" /> <br />
                Itineraire: <input type="text" name="itineraire" value="<?php echo $r[3] ?>"><br />
                Frequence Horaire: <input type="text" name="freqHoraire" value="<?php echo $r[4] ?>"><br />
                <input type="submit" value="Submit">
            </form> <?php
        ?>
    </div>
</body>
</html>