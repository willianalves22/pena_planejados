<?php
$data = json_decode(file_get_contents("php://input"), true);

$linha = date('d/m/Y H:i') . " | "
. $data['cliente'] . " | "
. $data['telefone'] . " | "
. $data['totalVista'] . " | "
. $data['totalPrazo'] . PHP_EOL;

file_put_contents("orcamentos.txt", $linha, FILE_APPEND);
