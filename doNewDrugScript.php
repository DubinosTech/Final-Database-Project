<?php
    include_once "inc/prelude.php";

    connectDB();
    #I.iId, I.iNom, I.adresse, I.usage, I.description, I.capacite
    $sql = "insert into cojoDatabase.Installation (iNom, adresse, usage, description, capacite) values ($1, $2, $3, $4, $5)";
    $ret = pg_query_params($db, $sql,
        [$_POST["iNom"],
        $_POST["adresse"],
        $_POST["usage"],
        $_POST["description"],
        $_POST["capacite"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: prescriptions.php");
    }
?>