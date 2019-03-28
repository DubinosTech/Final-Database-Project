<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = <<<EOF
        update pharmacy.Drug
        set name=$1, price=$2, substance=$3, generic=$4
        where id = $5;
EOF;

    $ret = pg_query_params($db, $sql,
        [$_POST["nomEpreuve"],
        $_POST["nomDiscipline"],
        $_POST["iNom"],
        $_POST["heure..."]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: drugs.php");
    }
?>