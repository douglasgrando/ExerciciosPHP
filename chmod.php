<?php
// Alterar permissões de um arquivo. Sintaxe ("Nome_do_arquivo", permissão)

// Apenas o proprietário pode ler e modificar o arquivo teste.txt
 chmod("teste.txt",0600);

// Apenas o proprietário do arquivo pode ler e modificar, outros usuários podem apenas ler o arquivo
// chmod("teste.txt",0644);

// Permissão total para o proprietário, ler e executar para outros usuários
// chmod("teste.txt",0755);

// Permissão total para o proprietário, ler para o grupo do proprietário
// chmod("teste.txt",0740);
?>