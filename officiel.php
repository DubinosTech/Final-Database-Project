<?php
    include_once "inc/prelude.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT - CSI2532 :: Officiels</title>
    <style>
        body {
            background-image: url(" r/olympic3.jpg");
        } </style>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPIC GAMES PROJECT - CSI2532</h1>
            <?php breadcrumb("Officiels") ?>
        </header>
        
        <a href="newOfficielView.php" class="new">New</a>
        
        <h2>--------Superviseur des Athletes------</h2>
        <?php
            connectDB();
            $sql = <<<EOF
            (select s.id, s.pprenom, s.pnomDeFamille, s.pAdressePermanente, s.pAdresseVillage, s.otype, p.name
            From  cojoDatabase.Officiel s
            join (select id, officiel, id || ': ' || pprenom || ' ' || pnomDeFamille as name from cojoDatabase.Athlete) p
            on p.officiel=s.id
            order by s.id)  				
EOF;
            $ret = pg_query($db, $sql);
            closeDB();
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "First Name", "Last Name", "Address Permanante", "Adresse Village","Type", "Athlete Supervise"]);

                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 7; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }
                    if(isset ($_SESSION['loggedin']) && $_SESSION['loggedin'])
                    {
                    editCell("Officiel", $row[0]);
                    deleteCell("Officiel", $row[0]);
                    }
                    echo "</tr>";
                }

                endDatatable();
            }
        ?>
        
        <h2>--------------Listes DES Officiels----------------</h2>
        <?php
            connectDB();
            $sql = <<<EOF
                select * from cojoDatabase.Officiel;
EOF;
            $ret = pg_query($db, $sql);
            closeDB();
            if(!$ret) {
                echo pg_last_error($db);
            }
            else {
                datatable(["ID", "First Name", "Last Name", "Address Permanante", "Adresse Village","Type"]);
                
                while ($row = pg_fetch_row($ret)) {
                    echo "<tr>";
                    for ($i = 0; $i < 6; $i++) {
                        echo "<td>", $row[$i], "</td>";
                    }
                    if(isset ($_SESSION['loggedin']) && $_SESSION['loggedin'])
                    {
                    editCell("Officiel", $row[0]);
                    deleteCell("Officiel", $row[0]);
                    }
                    echo "</tr>";
                }
                
                endDatatable();
            }
        ?>
    </div>
</body>
</html>