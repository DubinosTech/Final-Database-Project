<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "insert into pharmacy.Athlete (pprenom, pnomDeFamille, pAdressePermanente, pAdresseVillage, aPays, aMedaille, officiel) values ($1, $2, $3, $4, $5, $6, $7)";
    $ret = pg_query_params($db, $sql, [$_POST["pprenom"], $_POST["pnomDeFamille"], $_POST["pAdressePermanente"], $_POST["pAdresseVillage"], $_POST["aPays"], $_POST["aMedaille"], $_POST["officiel"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: doctors.php");
    }
?>