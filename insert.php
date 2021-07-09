<?php
    function insert($tabela, $row, $header) {
        return "INSERT INTO $tabela ($header[0], $header[1], $header[2], $header[3]) VALUES ('$row[0]', '$row[1]', '$row[2]', '$row[3]');\n";
    }        
?>