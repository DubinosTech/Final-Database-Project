<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "insert into cojoDatabase.Residence (nomResidence, capaciteResidence, adresseResidence, telephoneResidence) values ($1, $2, $3, $4, $5)";
    $ret = pg_query_params($db, $sql, [$_POST["firstName"],
        $_POST["nomResidence"],
        $_POST["capaciteResidence"],
        $_POST["adresseResidence"],
        $_POST["telephoneResidence"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: patients.php");
    }
?>