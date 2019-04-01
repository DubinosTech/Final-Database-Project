<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO :: Épreuves</title>
    <style>
        body {
            background-image: url(" r/epreuve.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Épreuves") ?>
        </header>

        <a href="newEpreuveView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = <<<EOF
            select e.id, e.nomEpreuve, e.nomDiscipline,i.name
            from cojoDatabase.Epreuve e join
            (select id, id || ': ' || iNom as name from cojoDatabase.Installation) i
            on e.installation = i.id;

EOF;
            $ret = pg_query($db, $sql);
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "Nom", "Discipline", "Installation"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 4; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }

                    if($_SESSION['loggedin'])
                    {
                    editCell("Epreuve", $row[0]);
                    deleteCell("Epreuve", $row[0]);
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