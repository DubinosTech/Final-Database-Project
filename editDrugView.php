<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "select * from cojoDatabase.Epreuve where id = $1";
    $ret = pg_query_params($db, $sql, [$_GET["id"]]);
    closeDB();
    if (!$ret) {
        setFlash("This isn't the Epreuve you're looking for.");
        header("Location: drug.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO :: Modifier Épreuve</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Modifier Épreuve") ?>
        </header>

        <?php
            $r = pg_fetch_row($ret);

            ?><form action="doEditDrug.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $r[0] ?>"><br />
                Name: <input type="text" name="nomEpreuve" value="<?php echo $r[1] ?>"><br />
                Discipline: <input type="text" name="nomDiscipline" value="<?php echo $r[2]; ?>"><br />
                Installation: <?php installationSelect($r[3]); ?>
                <input type="submit" value="Submit">
            </form> <?php
        ?>
    </div>
</body>
</html>