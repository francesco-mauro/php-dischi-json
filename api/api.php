<?php
header('Content-Type: application/json');

// Uso percorso assoluto don DIR perchè senza non funziona, chiedere ai tutor
$dischiJson = file_get_contents(__DIR__ . '/../data/dischi.json');

// Decode di json
$dischiArray = json_decode($dischiJson, true);

// Encode e nvia la risposta
echo json_encode($dischiArray);
?>
