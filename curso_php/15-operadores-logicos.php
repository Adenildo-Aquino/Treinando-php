<?php
// operadores logicos
// Nos permitem fazer comparações entre expressões
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação( ! )

$idade = 25;
$nome = "adenildo";

if(($idade==25) && ($nome == "adenildo")):
	echo "É verdadeiro";
else:
	echo "É Falso";
endif;