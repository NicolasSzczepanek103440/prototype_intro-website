<?php

$data_file = "data/data_page";

$pdo = new PDO("sqlite:$data_file");
$query = "SELECT * FROM data_pages";

try {
    $data_pandx = $pdo->prepare($query);
    $data_pandx->execute();

    $fetch_data = $data_pandx->fetchAll();
}
catch (PDOException $error) {
    // echo $error->getMessage(); <-- GEBRUIK ALLEEN VOOR DEBUGGEN!! - Nicolas
    echo "Er is iets misgegaan met het data.";
}