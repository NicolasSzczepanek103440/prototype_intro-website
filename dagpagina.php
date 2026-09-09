<?php
require "data/connect.php";

/* ONDERSTE PHP-CODE NIET BEWERKEN!!
    Onderstaande code is verantwoordelijk voor het bepalen van de dag afhankelijk van de 'dag' parameter in de URL
        - Nicolas */
$welke_dag = $_GET["dag"];
$query_dagpagina = "SELECT dag FROM data_pages WHERE id = $welke_dag";

try {
    $dagpagina_pandx = $pdo->prepare($query_dagpagina);
    $dagpagina_pandx->execute();
    $data_dag = $dagpagina_pandx->fetchAll();
}
catch (PDOException $error) {
    echo "Er ging iets mis met het kiezen van de data van de dag.";
    // echo $error->getMessage <-- GEBRUIK DIT ALLEEN VOOR DEBUGGEN!!
}

require "view/dagpagina_view.php";