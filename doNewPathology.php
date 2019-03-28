<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "insert into pharmacy.Pathology (name, firstName,adressePermanente,adresseOlympique,telephone) values ($1,$2,$3,$4,$5)";
    $ret = pg_query_params($db, $sql,[$_POST["name"],$_POST["firstName"],$_POST["adressePermanente"],$_POST["adresseOlympique"],$_POST["tel"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: pathologies.php");
    }
?>