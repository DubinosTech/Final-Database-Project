<?php include_once 'inc/prelude.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES PROJECT - CSI2532 :: Options</title>
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
            <h2>                                    DATABASE MANAGEMENT COJO OLYMPIC GAMES PROJECT - CSI2532             </h2>
            
            <?php breadcrumb("Options") ?>
        </header>

        <?php flash() ?>

        <div class="menu">
            <div><a href="inc/makedb.php">Regenerate database</a></div>
            <div><a href="inc/sampledata.php">Load sample data</a></div>
        </div>
    </div>
</body>
</html>