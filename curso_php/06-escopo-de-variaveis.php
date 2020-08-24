<?php
// escopo global
$nome = "ADENILDO AQUINO";
$a =1 ;
$b = 3;
$c = 7;

function exibeNome() {  //escopo local
	global $nome;
	echo $nome;

}

exibeNome();
echo "<hr>";
////////////////////////////

function exibeCidade() {  //escopo local
	global $cidade;
	$cidade = "Salvador";
}
exibeCidade();  //escopo global
echo $cidade;
echo "<hr>";
////////////////////////////////

function soma(){
	echo $GLOBALS['a']+$GLOBALS['b']+$GLOBALS['c'];
}
soma();