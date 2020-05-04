<?php
// A função is_dir verifica se o nome do arquivo especificado é um diretório.
$teste = "C:";
if(is_dir($teste)) {
  echo ("$teste é um diretório");
} else {
  echo ("$teste não é um diretório");
}
?>