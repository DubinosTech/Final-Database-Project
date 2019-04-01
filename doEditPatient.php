<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = <<<EOF
        update cojoDatabase.Patient
        set nomResidence=$1, capaciteResidence=$2, adresseResidence= $3, telephoneResidence=$4,
        where id = $5;
EOF;

    $ret = pg_query_params($db, $sql, [$_POST["nomResidence"],
        $_POST["capaciteResidence"],
        $_POST["adresseResidence"],
        $_POST["telephoneResidence"],
        $_POST["id"]]);
    closeDB();
    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: patients.php");
    }
?>