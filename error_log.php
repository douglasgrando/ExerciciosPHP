<?php
// envia uma mensagem de erro para um log, um arquivo ou uma conta de email.
$a= 5;
// Sintaxe(mensagem, tipo, destino);
if ($a > 1) {
    error_log("Opaa deu ruim ai meu parceiro!", 1, "email@teste.com");
}
?>