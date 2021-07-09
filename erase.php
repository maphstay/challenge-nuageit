<?php
    function erase($tabela, $row, $header) {
        return "DELETE FROM $tabela WHERE $header[2] = $row[2];\n";
    }
?>