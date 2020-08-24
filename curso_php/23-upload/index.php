<html>
<body>

<?php
	
	if(isset($_POST['enviar-formulario'])):

		$formatospermitidos = array("png","jpeg", "jpg","gif");
		$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION );

		if(in_array($extensao, $formatospermitidos)):
			$pasta = '23-upload/';
			$temporario = $_FILES['arquivo']['tmp_name'];
			$novonome = uniqid().".$extensao";

			if (move_uploaded_file($temporario, $pasta.$novonome)):
				$mensagem = "upload feito com sucesso";
			else:
				$mensagem = "Erro, não foi possível fazer o upload";
			endif;
		else: 
			$mensagem = "Formato inválido";
	endif;

		echo $mensagem;

endif;
?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?></form>" method="POST" enctype="multipart/form-data" >
	<input type="file" name="arquivo[]" multiple><br>
	<input type="submit" name="enviar-formulario">
</body>
</html>