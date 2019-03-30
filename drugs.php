<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO :: Épreuves</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO</h1>
            <?php breadcrumb("Épreuves") ?>
        </header>

        <a href="newDrugView.php" class="new">New</a>

        <?php
            connectDB();
            $sql = <<<EOF
            select d.id, d.name, d.price, d.substance, d.generic, s.name
            from pharmacy.Drug d join
            (select id, id || ': ' || drug || ' ' || doctor as name from pharmacy.DrugScript) s
            on d.id = s.id;
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

                    editCell("Drug", $row[0]);
                    deleteCell("Drug", $row[0]);

                    echo "</tr>";
                }

                endDatatable();
            }
            closeDB();
        ?>
    </div>
</body>
</html>