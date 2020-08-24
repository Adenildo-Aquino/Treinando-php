<?php
// Funções para Strings
/* strtoupper ---> Deixa as letras todas maiusculas.
   strtolower ---> Deixa as letras minusculas.
   substr     ---> Retorna uma parte de uma string.
   str_pad    ---> Complementa uma outra string com quantidade especifica de caracteres.
   str_repeat ---> Repetir uma string.
   strlen     ---> Retornar o comprimento de uma string.
   str_replace---> Substituir uma palavra em um texto.
   strpos     ---> Retorna a posição de uma palvra em um texto.
*/

$nome = "adenildo aquino";
$novonome = strtoupper($nome);   
echo $novonome;
echo "<hr>";

$nome = "ADENILDO AQUINO";
$novonome = strtolower($nome);   
echo $novonome;
echo "<hr>";

$mensagem = "olá mundo";
echo substr($mensagem, 4);
echo "<hr>";

$objeto = "mouse";
$novoobjeto =str_pad($objeto, 10, "*"); //lado esquerdo usa: STR_PAD_LEFT , a direita: STR_PAD_RIGHT, ambos: STR_PAD_BOTH.
echo $novoobjeto;
echo "<hr>";

$string= str_repeat("sucesso", 5);
echo $string;
echo "<hr>";

$mensagem = "Olá mundo";
echo strlen($mensagem);
echo "<hr>";

$texto = "A seleção Argentina será campeã da copa do mundo de 2022.";
$novotexto = str_replace("Argentina", "Brasileira", $texto);
echo $novotexto;
echo "<hr>";

echo strpos($texto, "copa");