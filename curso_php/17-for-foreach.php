<?php

for($contador = 0; $contador <= 10;$contador++):
	echo "O contador é $contador <br>";
endfor;
echo "<hr>";

for($contador = 0; $contador <= 10;$contador++):  // Tabuada
	echo "8 x $contador = ".($contador*8)."<br>";
endfor;

echo "<hr>";

$cores = array("verde", "vermelho", "azul");

foreach ($cores as $valor):
	echo  $valor. "<br>";
endforeach;