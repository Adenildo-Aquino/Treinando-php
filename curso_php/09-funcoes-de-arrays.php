<?php
// is_array: verifica se determinada variavel é um array.
$nomes = array("Primo"=>"Rodrigo","irmão"=>"Felipe","mãe"=>"Maria","pai"=>"josé");

if(is_array($nomes)):
	echo "é um array";
else:
	echo "não é um array";
endif;
echo "<hr>";
// in_array: verifica se um determinado valor existe em alguma posição do array.

echo in_array("Rodrigo", $nomes);
echo "<hr>";
//array_keys: retorna um  novo array com as chaves do array passado como parametro.

$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";
//array_values: retorna um novo array com valores do array passado como parametro

$values = array($nomes);
print_r($nomes);
echo "<hr>";
// array_merge: agrega o conteudo de dois arrays
$carros=array("camaro","uno","gol");
$motos=array("cg","50cc","bros");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

// array_pop: exclui a última posição do array.
print_r($carros); // com todos os carros 
echo "<br>";
echo array_pop($carros);
echo "<br>";
print_r($carros); // excluiu o gol
echo "<hr>";
//array_shift: exclui a primeira posição do array.

print_r($carros); // com todos os carros 
echo "<br>";
echo array_shift($carros);
echo "<br>";
print_r($carros); // excluiu o gol
echo "<hr>";

// array_unshift: adiciona um ou mais elemntos no array.

$frutas=array("uva","laranja","maça");
print_r($frutas);

array_unshift($frutas, "manga", "acerola", "morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

// array_push: adiciona um ou mais elementos no final do array.

print_r($frutas);

array_push($frutas, "manga", "acerola", "morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

// array_combine: mescla dois arrays

$Keys=array("campeão","Vice","Terceiro");
$Values=array("bahia","ypiranga","vitoria");

$Times=array_combine($Keys, $Values);
print_r($Times);
echo "<hr>";
// array_sum: calcular a soma dos elementos do array.

$soma=array(5,6,10,8);
echo array_sum($soma);
echo "<hr>";
//explode: transforma a string em array

$data="30/02/2018";

$novadata=explode('/', $data);

print_r($novadata);
echo "<br>";

$frase="meu nome não é jhonny";

$array=explode(" ", $frase);
print_r($array);
echo "<hr>";

// implode: transforma um array em uma string.

$nomes=array("Rodrigo", "paula","talita","carlos");

$string = implode(", ", $nomes);
print_r($string);