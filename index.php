<?php

require_once 'Sinesp.php';
$Placa = $_GET['Placa'];
$veiculo = new Sinesp;

try {
    $veiculo->buscar($Placa);
    if ($veiculo->existe()) {
       // print_r($veiculo->dados());
	echo json_encode($veiculo->dados());
       // echo 'O ano do veiculo eh ' , $veiculo->anoModelo, PHP_EOL;
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}