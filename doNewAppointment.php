<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "insert into cojoDatabase.ServiceTransport(depart, arrivee, itineraire, freqHoraire) values ($1, $2, $3, $4);";
    $ret = pg_query_params($db, $sql,
        [$_POST["depart"],
        $_POST["arrivee"],
        $_POST["itineraire"],
        $_POST["freqHoraire"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: appointments.php");
    }
?>