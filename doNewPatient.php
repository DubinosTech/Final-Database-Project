<?php
    include_once "inc/prelude.php";

    connectDB();
    $sql = "insert into cojoDatabase.Residence (nom_Residence, capacite_Residence, adresse_Residence, telephone_Residence) values ($1, $2, $3, $4)";
    $ret = pg_query_params($db, $sql, [$_POST["nom_Residence"],
        $_POST["capacite_Residence"],
        $_POST["adresse_Residence"],
        $_POST["telephone_Residence"]]);

    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: patients.php");
    }
?>