<!DOCTYPE>

<html>
	<body>

<?php
	/*  Validações
	    Funções(filter_input - filter_var)
	    FILTER_VALIDATE_INT
	    FILTER_VALIDATE_EMAIL
	    FILTER_VALIDATE_FLOAT
	    FILTER_VALIDATE_IP
	    FILTER_VALIDATE_URL
	*/
 ?>

 <?php

	if (isset($_POST['enviar-formulario'])):
		//Arrays de erros
		$erros = array();
	// validações
	$nome =filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS );
	



	// exibindo mensagens
	if(!empty($erros)):
		foreach($erros as $erro):
			echo "<li> $erro </li>";
		endforeach;
	else:
		echo "Parabéns, seus dados estão corretos!";
	endif;
endif;
?>


		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			Nome: <input type="text" name="nome"><br>
			Idade: <input type="text" name="idade"><br>
			Email: <input type="text" name="email"><br>
			URL: <input type="text" name="url"><br>
			<button type="submit" name="enviar-formulario">enviar</button>
		</form>
	</body>
</html>