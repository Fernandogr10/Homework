<?php 
		include 'header.php';
		$aula_atual = 'arrays';
	?>


	<body>

		<h2>ARRAYS</h2>
		<hr>
		<small>PHP</small>

		
		<h3>Sensores</h3>
		<?php $valor = 25.00 ?>
                <?php $leitura = array(
				      "temperatura" => array(
							      "Local" => "Uningá",
							      "tilsensor" => "Analógico",
							      "medicao" => number_format($valor,2),
							      "IP" => "127.0.0.0"
							    ),
				      
				      "Pressão" => "Pressão",
				      "Úmidade" => "Úmidade"
				      ); ?> 
			<h4>Medição: </h4>
			<p><?php echo $leitura['temperatura']['medicao'];?></p>
			<br>


		<h3>Informação Sensores</h3>

			<h4>Local: </h4>
			<p><?php echo $leitura['temperatura']['Local'];?></p>
			<br>

			<h4>Tipo do Sensor: </h4>
			<p><?php  ?></p>
			<br>

			<h4>URL: </h4>
			<p><?php  ?></p>
			<br>

			<h4>URL da foto: </h4>
			<p><?php  ?></p>
			<br>
		



	</body>

</html>