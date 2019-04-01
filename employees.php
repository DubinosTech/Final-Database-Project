<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO :: Employés</title>
    <style>
        body {
            background-image: url(" r/employes.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Employés") ?>
        </header>

        <a href="newEmployeeView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = "select * from cojoDatabase.Employee;";
            $ret = pg_query($db, $sql);
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "Nom", "Prénom","Adresse permanente","Adresse olympique","Téléphone"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 6; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }

                    if(isset ($_SESSION['loggedin']) && $_SESSION['loggedin'])
                    {
                    editCell("Employee", $row[0]);
                    deleteCell("Employee", $row[0]);
                    }
                    echo "</tr>";
                }

                endDatatable();
            }
            closeDB();
        ?>
    </div>
</body>
</html>