<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "insert into cojoDatabase.Epreuve (nomEpreuve, nomDiscipline, installation) values ($1, $2, $3)";
    $ret = pg_query_params($db, $sql, [$_POST["nomEpreuve"], $_POST["nomDiscipline"], $_POST["installation"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: drugs.php");
    }
?>