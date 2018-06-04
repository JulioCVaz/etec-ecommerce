<?php


header('Content-Type: application/json');

$produtos = $_POST; // verificar json decode
var_dump(json_encode($produtos));

?>
