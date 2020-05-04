<?php
// A função htmlentities converte caracteres em entidades HTML.
$teste = "<b>Negrito</b>";
echo htmlentities($teste)."<br>";
echo $teste;
?>