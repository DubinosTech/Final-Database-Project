<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "select * from cojoDatabase.Installation where id = $1";
    $ret = pg_query_params($db, $sql, [$_GET["id"]]);
    closeDB();
    if (!$ret) {
        setFlash("This isn't the installation Olympique script you're looking for.");
        header("Location: prescriptions.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO Project :: Edit Installation</title>
    <style>
        body {
            background-image: url(" r/olympic1.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO Project</h1>
            <?php breadcrumb("Edit Installation Olympique") ?>
        </header>
        <?php  $r = pg_fetch_row($ret); ?>
        <form action="doEditDrugScript.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $r[0] ?>"><br />
                Nom: <input type="text" name="iNom" value="<?php echo $r[1] ?>"><br />
                Adresse: <input type="text" name="adresse" value="<?php echo $r[2] ?>"><br />
                Usage: <input type="text" name="usage" value="<?php echo $r[3] ?>"><br />
                Description: <input type="text" name="description" value="<?php echo $r[4] ?>"><br />
                Capacite: <input type="text" name="capacite" value="<?php echo $r[5] ?>"><br />
                <input type="submit" value="Submit">
            </form>        
    </div>
</body>
</html>