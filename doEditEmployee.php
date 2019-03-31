<?php
    include_once "inc/prelude.php";

    connectDB();
    #    $sql = "insert into pharmacy.Employee (pnomDeFamille, pprenom,pAdressePermanente,pAdresseVillage,telephone) values ($1,$2,$3,$4,$5)";
    
    $sql = <<<EOF
        update pharmacy.Employee
        set pnomDeFamille=$1, pprenom=$2, pAdressePermanente=$3, pAdresseVillage=$4, telephone=$5
        where eId = $6;
EOF;

    $ret = pg_query_params($db, $sql,
        [$_POST["pnomDeFamille"],$_POST["pprenom"],$_POST["pAdressePermanente"],$_POST["pAdresseVillage"],$_POST["telephone"],$_POST["eId"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: employees.php");
    }
?>