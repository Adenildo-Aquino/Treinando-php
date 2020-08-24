<?php
// Criando funções

//function exibirnome(){
//	echo "Meu nome é Adenildo";
//exibirnome();
//echo "<hr>";

function exibirnome($nome){
	echo "Meu nome é $nome";
}
exibirnome("Roberta Maria");
echo "<hr>";

function calcularmedia($nome,$n1,$n2,$n3,$n4){
	$media = ($n1+$n2+$n3+$n4) / 4;
	if ($media >= 7):
		echo "$nome foi aprovado com a média $media. <br>";
	else:
		echo "$nome foi reprovado.";
	endif;
}
calcularmedia("bob", 5,7,4,3);