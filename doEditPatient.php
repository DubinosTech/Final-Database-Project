<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = <<<EOF
        update pharmacy.Residence
        set nom_Residence=$1, capacite_Residence=$2, adresse_Residence= $3, telephone_Residence=$4 where id = $5;
EOF;

    $ret = pg_query_params($db, $sql, [$_POST["nom_Residence"],
        $_POST["capacite_Residence"],
        $_POST["adresse_Residence"],
        $_POST["Telephone_Residence"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: patients.php");
    }
?>