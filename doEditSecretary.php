<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = <<<EOF
        update pharmacy.Officiel
        set pprenom=$1, pnomDeFamille=$2, pAdressePermanente=$3, pAdresseVillage=$4, otype=$5
        where id = $6;
EOF;

    $ret = pg_query_params($db, $sql, [$_POST["pprenom"], $_POST["pnomDeFamille"], $_POST["pAdressePermanente"], $_POST["pAdresseVillage"], $_POST["otype"], $_POST["id"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: secretaries.php");
    }
?>