<?php
    include_once "inc/prelude.php";

    connectDB();

    $sql = "insert into pharmacy.Employee (pnomDeFamille, pprenom,pAdressePermanente,pAdresseVillage,telephone) values ($1,$2,$3,$4,$5)";
    $ret = pg_query_params($db, $sql,[$_POST["pnomDeFamille"],$_POST["pprenom"],$_POST["pAdressePermanente"],$_POST["pAdresseVillage"],$_POST["telephone"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: employees.php");
    }
?>