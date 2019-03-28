<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "select * from pharmacy.Pathology where id = $1";
    $ret = pg_query_params($db, $sql, [$_GET["id"]]);
    closeDB();
    if (!$ret) {
        setFlash("This isn't the pathology you're looking for.");
        header("Location: pathology.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO :: Modifier Employé</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Modifier Employé") ?>
        </header>

        <?php
            $r = pg_fetch_row($ret);

            ?><form action="doEditPathology.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $r[0] ?>"><br />
                Nom: <input type="text" name="name" value="<?php echo $r[1] ?>"><br />
                Prénom: <input type="text" name="name" value="<?php echo $r[2] ?>"><br />
                Adresse permanente: <input type="text" name="name" value="<?php echo $r[3] ?>"><br />
                Adresse olympique: <input type="text" name="name" value="<?php echo $r[4] ?>"><br />
                Téléphone: <input type="text" name="name" value="<?php echo $r[5] ?>"><br />
                <input type="submit" value="Submit">
            </form> <?php
        ?>
    </div>
</body>
</html>