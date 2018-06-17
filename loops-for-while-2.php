<?php 
		include 'header.php';
		$aula_atual = 'loops-for-while';
	?>


	<body>

		<h2>LOOPS WHILE e FOR</h2>
		<hr>
		<small>PHP</small>
		
		<h3>Selecione o ano de nascimento:</h3>
	<?php
		$ano_atual = date('Y');
		$ano = $ano_atual;	
	?>
		<select>
			<option>Selecione o ano</option>
			 <?php while ($ano > 1980){ ?>
				
				<option><?php echo $ano; ?> </option>
				<?php $ano = $ano - 1; ?> <!-- $ano - = 1 ou $ano --*/ -->
				
			 <?php } ?>
		</select>

		<h3>Selecione o ano estimado de aposentadoria:</h3>

		<select>
			<option>Selecione o ano</option>
			<?php for ($ano = $ano_atual ; $ano < 2070 ; $ano = $ano + 1) { ?>
 				
				<option> <?php echo $ano; ?> </option>
				
			<?php } ?>
		</select>

			

		<h3>Agora é a sua vez.</h3>

		<p>Use o loop for ou while para apresentar os anos em que vão haver Copa</p>
		<br>

		<h4>Anos de Copa do Mundo: </h4>
		<br>

		<p>apresente aqui os anos</p>
		<br>




	</body>

</html>