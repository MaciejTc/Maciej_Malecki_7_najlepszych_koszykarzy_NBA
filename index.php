<?php

$plikOdpowiedzi = "Odp.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $odpowiedzi = [];

    $odpowiedzi["mj"] = $_POST["mj_answer"];
    $odpowiedzi["kb"] = $_POST["kb_answer"];
    $odpowiedzi["lj"] = $_POST["lj_answer"];
    $odpowiedzi["magic"] = $_POST["magic_answer"];
    $odpowiedzi["td"] = $_POST["td_answer"];
    $odpowiedzi["shaq"] = $_POST["shaq_answer"];
    $odpowiedzi["hakeem"] = $_POST["hakeem_answer"];


    $plik = fopen($plikOdpowiedzi, "w");

    foreach ($odpowiedzi as $pytanie => $odpowiedz) {
        fwrite($plik, $pytanie . ": " . $odpowiedz . "\n");
    }

    fclose($plik);

    echo "Odpowiedzi zostały zapisane.";
}
?>
