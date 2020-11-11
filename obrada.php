<?php
include "Database.php";
$mydb = new Database("rest");

if (isset($_POST["posalji"])) {
    if ($_POST["naslov_novosti"] !== null && $_POST["tekst_novosti"] !== null && $_POST["kategorija_odabir"] !== null) {
        $niz = [
            "naslov" => "'" . $_POST["naslov_novosti"] . "'",
            "tekst" => "'" . $_POST["tekst_novosti"] . "'",
            "kategorija_id" => "'" . $_POST["kategorija_odabir"] . "'",
            "datumvreme" => 'NOW()'
        ];
        $mydb->insert("novosti", "naslov, tekst, kategorija_id, datumvreme", $niz);
        echo "vrednosti dodate";
        $_POST = array();
    }
}
?>