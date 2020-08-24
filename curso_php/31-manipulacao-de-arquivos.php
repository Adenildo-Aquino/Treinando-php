<?php
// Manipulação de arquivos
/*
fopen()
fclose()
fwrite()
!feof()
fgets()
filesize
*/

$arquivo = 'arquivo.txt';
$conteudo = "conteudo de teste\r\n";
$tamanhoarquivo = filesize($arquivo);
$arquivoaberto = fopen($arquivo, 'r');

while(!feof($arquivoaberto)):
	$linha = fgets($arquivoaberto, $tamanhoarquivo);
	echo $linha."<br>";
endwhile;
fclose($arquivoaberto);