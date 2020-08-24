<?php
//Arrays numericos
$carros = array(1=>"bmw",2=> "mercedez",3=>"honda",4=> "toyota");
echo $carros[2];
echo "<hr>";

$carros[]="fiat";  //adicionando ao array

$carros[10]="porche";  // adicionando ao array no indice 10
print_r($carros);
echo "<hr>";

echo $carros[10];
echo "<hr>";

// count - exibir o numeros de arrays

echo count($carros);  // exibindo o numero de elementos que contem no array.

$totalcarros = count($carros);  // exibindo por função
echo $totalcarros;
echo "<hr>";

// foreach  lopp para percorrer arrays

foreach ($carros as $valor) {
	echo $valor."<br>";
}
echo "<hr>";
// arrays associativos
$pessoa = array("nome"=> "adenildo","idade"=>34, "altura"=>1.69);
$pessoa["cidade"] = "salvador";

foreach ($pessoa as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}
echo "<hr>";

// Arrays multidimensionais
$times = array(
			"cariocas"=> array("vasco","flamengo","botafogo","fluminense"),
			"paulistas"=> array("são paulo", "corintias","palmeiras","santos"),
			"baianos"=> array("bahia","vitoria","fluminense de feira", "ypiranga")
			);

echo $times["paulistas"][3];