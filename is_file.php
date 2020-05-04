<?php
// A função is_file verifica se o nome do arquivo especificado é um arquivo.
$teste = "is_file.php";
if(is_file($teste)) {
  echo ("$teste é um arquivo");
} else {
  echo ("$teste não é um arquivo");
}
?>