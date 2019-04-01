<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = <<<EOF
        update cojoDatabase.ServiceTransport
        set depart=$1, arrivee=$2, itineraire=$3, freqHoraire=$4 where id = $5;
EOF;

    $ret = pg_query_params($db, $sql,
        [$_POST["depart"],
        $_POST["arrivee"],
        $_POST["itineraire"],
        $_POST["freqHoraire"],
        $_POST["id"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: servicetransport.php");
    }
?>