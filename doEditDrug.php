<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = <<<EOF
        update pharmacy.Epreuve
        set nomEpreuve=$1, nomDiscipline=$2, installation=$3
        where id = $4;

EOF;

    $ret = pg_query_params($db, $sql,
        [$_POST["nomEpreuve"],
        $_POST["nomDiscipline"],
        $_POST["installation"],
        $_POST["id"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: drugs.php");
    }
?>