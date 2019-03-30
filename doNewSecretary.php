<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "insert into pharmacy.Officiel (pprenom, pnomDeFamille, pAdressePermanente, pAdresseVillage, otype) values ($1, $2, $3, $4, $5)";
    $ret = pg_query_params($db, $sql, [$_POST["pprenom"], $_POST["pnomDeFamille"], $_POST["pAdressePermanente"], $_POST["pAdresseVillage"], $_POST["otype"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: secretaries.php");
    }
?>