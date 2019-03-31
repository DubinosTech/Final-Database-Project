<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "insert into cojoDatabase.ServiceMedical (snom, sdescription, sadresse, stelephone) values ($1, $2, $3, $4)";
    $ret = pg_query_params($db, $sql,
        [$_POST["snom"],
        $_POST["sdescription"],
        $_POST["sadresse"],
        $_POST["stelephone"]
        ]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: conflicts.php");
    }
?>