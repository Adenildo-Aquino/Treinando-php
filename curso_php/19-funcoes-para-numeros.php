<?php
// Funções para  números
/*
   number_format
   round
   ceil  - arredonda pra cima sempre
   floor -arredonda pra baixo
   rand  -
 */

$db = 1234.56;
$preco = number_format($db, 2, ",",".");
echo "O valor do produto é $preco R$";
echo "<hr>";

echo round(3.6);  // arredonda valores pra baixo e pra cima
echo "<hr>";

echo rand(0,20);  // gera numeros aleatórios.