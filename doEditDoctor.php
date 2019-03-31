<?php
    include_once "inc/prelude.php";

    connectDB();
    $sql = <<<EOF
        update cojoDatabase.Athlete
        set pprenom=$1, pnomDeFamille=$2,pAdressePermanente=$3, pAdresseVillage=$4, aPays=$5, aMedaille=$6, officiel=$7
        where id = $8;
EOF;

    $ret = pg_query_params($db, $sql, [$_POST["pprenom"], $_POST["pnomDeFamille"], $_POST["pAdressePermanente"], $_POST["pAdresseVillage"], $_POST["aPays"], $_POST["aMedaille"], $_POST["officiel"], $_POST["id"]]);
    closeDB();

    if (!$ret) {
        setFlash(pg_last_error($db));
    }
    else {
        header("Location: doctors.php");
    }
?>