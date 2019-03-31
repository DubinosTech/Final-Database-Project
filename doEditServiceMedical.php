<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = <<<EOF
        update cojoDatabase.ServiceMedical
        set snom=$1, sdescription=$2, sadresse =$3, stelephone=$4
        where id = $5;
EOF;

    $ret = pg_query_params($db, $sql,
        [$_POST["snom"],
        $_POST["sdescription"],
        $_POST["sadresse"],
        $_POST["stelephone"],
        $_POST["id"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: ServiceMedical.php");
    }
?>