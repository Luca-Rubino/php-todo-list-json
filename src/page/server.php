<?php

header("Content-type: application/json");

// uso metodo file_get_contents per recuperare i dati dal file .json
$rawData = file_get_contents('../json/todolist.json');

// uso metodo json_decode per decodificare i dati per essere letti da php
$data = json_decode($rawData, true);

// mostro la lista in pagina
echo json_encode($rawData);

?>