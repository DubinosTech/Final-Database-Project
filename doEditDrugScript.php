<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = <<<EOF
        update pharmacy.Installation
        set iNom=$1, adresse=$2, usage=$3, description=$4, capacite=$5
        where iId = $6;
EOF;

    $ret = pg_query_params($db, $sql,
        [$_POST["iNom"],
        $_POST["adresse"],
        $_POST["usage"],
        $_POST["description"],
        $_POST["capacite"],
        $_POST["iId"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: prescriptions.php");
    }
?>