<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "delete from pharmacy.Athlete where id = $1;";

    $ret = pg_query_params($db, $sql, [$_GET["id"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    header("Location: doctors.php");
?>