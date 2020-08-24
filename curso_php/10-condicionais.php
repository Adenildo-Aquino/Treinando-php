<?php
/*
* Condicionais:
* if
* else
* elseif
*/

$numero = 18;

if ($numero==10):
	echo "É igual a 10";

elseif ($numero <= 9):
	echo "É menor ou igual a 9";
else:
	echo "É diferente de 10";
endif;

echo "<hr>";

$media=7;

echo ($media >= 7)? "Aprovado" : "Reprovado";
echo "<hr>";

/* 
* Switch
* Case
*/

$cor="amarelo";

switch ($cor):
	case "vermelho":
	echo "Sua cor preferida é vermelho";
	break;

	case "verde":
	echo "Sua cor preferida é verde";
	break;

	case "azul":
	echo "Sua cor preferida é o azul";
	break;

	default: 
	echo "sua cor preferida não é nem vermelho nem verde nem azul";

endswitch;
