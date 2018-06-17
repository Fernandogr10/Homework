	<?php 
		include 'header.php';
		$aula_atual = 'and-or';
	?>


	<body>


		<h2>AND e OR</h2>
		<hr>
		<small>PHP</small>

		<?php

		$total_aulas = 20;
		$media_aprov = 6;
		$presenca_aprov = 0.7;

		$aluno = array (
			'nome' => 'Fernando Costa',
			'media' => 7.5,
			'faltas' => 6
		);

		?>

		<h3>AND</h3>
		<h4>Situação do aluno: </h4>
		<p></p>
		<br>

		<h3>OR</h3>
		<h4>Situação do aluno: </h4>
		<p></p>
		<br>

		

		







		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>
