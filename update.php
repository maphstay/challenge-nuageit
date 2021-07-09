<?php
    function update($tabela, $row, $header) {
        return "UPDATE $tabela SET $header[0] = '$row[0]' WHERE $header[2] = $row[2];\n";
    }
?>