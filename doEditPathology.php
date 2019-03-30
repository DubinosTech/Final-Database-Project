<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = <<<EOF
        update pharmacy.Pathology
        set name=$1
        where id = $2;
EOF;

    $ret = pg_query_params($db, $sql,
        [$_POST["pnom"],
        $_POST["pprenom"], $_POST["pnomDeFamille"],$_POST["pAdressePermanente"],$_POST["pAdresseVillage"],$_POST["telephone"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: pathologies.php");
    }
?>