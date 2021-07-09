<?php

include("insert.php");
include("update.php");
include("erase.php");

function leitura($fileinput, $tabela, $fileoutput) {
    $handle = fopen($fileinput, "r");
    $row = 0;
    $header = fgetcsv($handle, 0, ";");
    $result = [];
    
    while (!feof($handle)) {
        $row = fgetcsv($handle, 0, ";");
        if (!$row) {
            continue;
        }

        $result[] = insert($tabela, $row, $header);
        $result[] = update($tabela, $row, $header);
        $result[] = erase($tabela, $row, $header);

    }

    $result = implode('', $result);
    $arquivo = fopen($fileoutput,'a');
    fwrite($arquivo, $result);
    fclose($arquivo);
    fclose($handle);
}

    leitura('data.csv', 'person', 'script.sql')
?>