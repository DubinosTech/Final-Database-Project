<?php
    include_once "inc/prelude.php";

    connectDB();
    $sql = "select * from cojoDatabase.Residence where id = $1";

    $ret = pg_query_params($db, $sql, [$_GET["id"]]);
    closeDB();
    if (!$ret) {
        setFlash("This isn't the residence you're looking for.");
        header("Location: patients.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO :: Modifier Residence</title>

    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Modifier Residence") ?>

        </header>

        <?php
            $r = pg_fetch_row($ret);

            ?><form action="doEditPatient.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $r[0] ?>"><br />
                Nom_Residence: <input type="text" name="nom_residence" value="<?php echo $r[1] ?>"><br />
                Capacite_Residence: <input type="text" name="capacite_Residence" value="<?php echo $r[2] ?>"><br />
                Adresse_Residence: <input type="text" name="adresse_Residence" value="<?php echo $r[4] ?>"><br />
                Telephone_Residence: <input type="text" name="telephone_Residence" value="<?php echo $r[5] ?>"><br />
                <input type="submit" value="Submit">
            </form> <?php
        ?>

    </div>
</body>
</html>