<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "select * from cojoDatabase.Officiel where id = $1";
    $ret = pg_query_params($db, $sql, [$_GET["id"]]);
    closeDB();
    if (!$ret) {
        setFlash("This isn't the officiel you're looking for.");
        header("Location: secretaries.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT :: Modifier Athlete</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPIC GAMES PROJECT</h1>
            <?php breadcrumb("Modifier officiel") ?>
        </header>

        <?php
            $r = pg_fetch_row($ret);

            ?><form action="doEditSecretary.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $r[0] ?>"><br />
                Prenom: <input type="text" name="pprenom" value="<?php echo $r[1] ?>"><br />
                Nom: <input type="text" name="pnomDeFamille" value="<?php echo $r[2] ?>"><br />
                Adresse Permanante: <input type="text" name="pAdressePermanente" value="<?php echo $r[3] ?>"><br />
                Adresse Village: <input type="text" name="pAdresseVillage" value="<?php echo $r[4] ?>"><br />
                Type: <input type="text" name="otype" value="<?php echo $r[5] ?>"><br />
                Athlete: <?php athleteselect(); ?>
                <input type="submit" value="Submit">
            </form> <?php
        ?>

    </div>
</body>
</html>