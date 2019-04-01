<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "select * from cojoDatabase.Residence where id = $1";
    $ret = pg_query_params($db, $sql, [$_GET["id"]]);
    closeDB();
    if (!$ret) {
        setFlash("This isn't the Residence you're looking for.");
        header("Location: patients.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO PROJECT :: modifier Residence</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO PROJECT</h1>
            <?php breadcrumb("modifier Residence") ?>
        </header>

        <?php
            $r = pg_fetch_row($ret);

            ?><form action="doEditPatient.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $r[0] ?>"><br />
                Nom Residence: <input type="text" name="nomResidence" value="<?php echo $r[1] ?>"><br />
                Capacite Residence: <input type="text" name="capaciteResidence" value="<?php echo $r[2] ?>"><br />
                AdresseResidence: <input type="text" name="adresseResidence" value="<?php echo $r[3] ?>"><br />
                Telephone Residence: <input type="text" name="telephoneResidence" value="<?php echo $r[4] ?>"><br />
                <input type="submit" value="Submit">
            </form> <?php
        ?>

    </div>
</body>
</html>