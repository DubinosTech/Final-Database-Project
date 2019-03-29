<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "insert into pharmacy.ServiceTransport (depart, arrivee, itineraire, frequenceHoraire) values ($1, $2, $3, $4)";
    $ret = pg_query_params($db, $sql,
        [$_POST["date"],
        $_POST["arrivee"],
        $_POST["itineraire"],
        $_POST["frequenceHoraire"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: appointments.php");
    }
?>