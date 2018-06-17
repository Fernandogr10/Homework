	<?php 
		include 'header.php';
		$aula_atual = 'data-hora';
	?>


	<body>


		<h2>Data e Hora</h2>
		<hr>
		<small>PHP</small>

		
		<h3>Epoch</h3>

		<p>Unix Epoch -> 01 Jan 1970 00:00:00 GMT</p><br>

		

		<h3>Função time - segundos desde o Epoch (formato unix timestamp)</h3>

		<p>

			<?php
			
			$agora = time ();
			echo date (" d / m / Y", $agora);
				
			?>
			
		</p>
		<br>

		<h3>Função mktime</h3>

			<?php
				
			$nascimento = mktime(8, 0, 0, 5, 30, 1990);
			echo $nascimento;
				
				
			?>

		<p>

		</p>
		<br>

		<h3>Função strtotime</h3>

			<?php
			
			$outra_data = strtotime("now");
			echo date (" d / m / Y", $outra_data);
				
			?>

		<p>

		</p>
		<br>


		<h3>Função date</h3>

			<?php
				$DH = strtotime("now");
		     	echo date (" d/m/Y H:i:s", $DH);
			?>

		<p>

		</p>
		<br>

		<h3>Fuso horário</h3>

			<?php
				
			?>			

		<p>

		</p>
		<br>


		<h3>Cálculos com data e hora</h3>

			<?php
				
			?>

		<p>

		</p>
		<br>


		




		<h3>Tabela de caracteres da função date</h3>

		


		<?php include 'tabela-date.php'; ?>



	</body>

</html>