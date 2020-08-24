<?php
// constantes
define("nome", "Adenildo Aquino");
define("idade", 34);
define("altura", 1.69);
define("casado", true);

echo 'Meu nome é '.nome.', minha idade é '.idade.'e minha altura é de '.altura.'.';
echo "<hr>";

define("times", ['vasco', 'bahia', 'vitoria', 'palmeiras','corintias']);
echo var_dump(times);

function exibeNomes() {
	echo nome;
}

exibeNomes();