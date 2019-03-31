<?php
include_once "inc/prelude.php";

connectDB();

$sql = "select * from cojoDatabase.ServiceMedical where id = $1";
$ret = pg_query_params($db, $sql, [$_GET["id"]]);
closeDB();
if (!$ret) {
    setFlash("This isn't the Medicale Service that you're looking for.");
    header("Location: ServiceMedical.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO Project :: Edit -- Service Medicale</title>
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
            <?php breadcrumb("Edit Service Medicale") ?>
        </header>

        <?php  $r = pg_fetch_row($ret); ?>
        <form action="doEditServiceMedical.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $r[0] ?>"><br />
            Nom: <input type="text" name="snom" value="<?php echo $r[1] ?>"><br />
            Description: <input type="text" name="sdescription" value="<?php echo $r[2] ?>"><br />
            Adresse: <input type="text" name="sadresse" value="<?php echo $r[3] ?>"><br />
            Telephone Number: <input type="text" name="stelephone" value="<?php echo $r[4] ?>"><br />
            <input type="submit" value="Submit">
        </form>
            
    </div>
</body>
</html>