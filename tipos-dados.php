<?php 
		include 'header.php';
		$aula_atual = 'tipos-dados';
?>


	<body>

		<h2>Tipos de Dados</h2>
		<hr>
		<small>PHP</small>
		<br>

		<h3>Função var_dump</h3>

		<?php 
			$nome = 'Rafael';
			$saldo = 965.35;
			$var = TRUE;
			$null = NULL;

		?>

		<h4>Tipo da variável $nome: </h4>
		<p><?php var_dump ($nome) ?></p>

		<br>

		<h4>Tipo da variável $saldo: </h4>
		<p><?php var_dump ($saldo) ?></p>
		
		<br>
		
		<h4>Tipo da variável $var: </h4>
		<p><?php var_dump ($var) ?></p>
		
		<br>
		
		<h4>Tipo da variável $null: </h4>
		<p><?php var_dump ($null) ?></p>

	</body>

</html>