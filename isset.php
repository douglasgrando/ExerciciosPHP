<?php
// A função isset verifica se uma variável está definida, o que significa que ela deve ser declarada e não é NULL.
$x = 0;
// VERDADEIRO, DECLARADA COMO "0"
if (isset($x)) {
  echo "A variável 'x' está definida.<br>";
}

$y = null;
// FALSO, NULL
if (isset($y)) {
  echo "A variável 'y' está definida";
}
?>