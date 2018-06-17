	<?php 
		include 'header.php';
		$aula_atual = 'variaveis-superglobais';
	?>


	<body>


		<h2>Variáveis Superglobais</h2>
		<hr>PHP</small>



		<h3>$_SERVER</h3>

		<pre><?php var_dump($_SERVER); ?></pre>



		<h3>$GLOBALS</h3>

		<?php

		$msg = 'hello world';
		$bye = 'bye bye world';

		?>

		<pre><?php var_dump($GLOBALS); ?></pre>


	</body>

</html>