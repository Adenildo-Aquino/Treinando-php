<?php

/* Tipos de dados ESCALARES          */

//String
$nome = "olá mundo @ 123";
var_dump($nome);

if (is_string($nome)):
echo "é uma string"; 
else:
	echo "não é uma string";
endif;

echo "<hr>";

// int -  inteiros

$idade=34;
var_dump($idade);  // var_dump diz qual o tipo da variável

if (is_int($idade)):

	echo "É uma variável do tipo inteiro";

else:

	echo "NÃO é uma variável do tipo inteiro";

endif;
echo "<hr>";

// float  uma variável do tipo real


$altura=1.69;
var_dump($altura);

if (is_float($altura)):

	echo "É um número Real";
else:
	echo "Não é um número real";
endif;

//  Boolean  .atribuido a duas condições = true ou false, vdd ou falso.

$admin=false;
var_dump($admin);

if (is_bool($admin)):

	echo "É boleano";
else:
	echo "Não é um boleano";
endif;


/*********  Compostos  ***********/

$carros = array("gol","uno","camaro",12,20.6,true);
var_dump($carros);
echo "<hr>";
// object
/*
class Cliente {
	public $nome;
	public function atribuirNome($nome) {
		$this- >$nome = $nome;
	}
}
$cliente = new Cliente();
$cliente - > atribuirNome("rodrigo");
var_dump($cliente);    */

/***********  NULL   **********/

$cidade=NULL;
var_dump($cidade);

