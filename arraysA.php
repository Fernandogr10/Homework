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
	 "temperatura" => array (
			"Local" => "Uningá",
			"tiposensor" => "Analógico",
			"medicao" => number_format($valor,2),
			"IP" => "127.0.0.0"
				),
	"Pressão" => "Pressão",
	"Umidade" => "Umidade",
			); ?>

   
	<h4>Medição</h4>
	<p><?php echo $leitura['temperatura']['medicao'];?></p>
	<br>


		<h3> </h3>

			<h4>  </h4>
			<p><?php  ?></p>
			<br>

			<h4>  </h4>
			<p><?php  ?></p>
			<br>

			<h4>  </h4>
			<p><?php  ?></p>
			<br>

			<h4>  </h4>
			<p><?php  ?></p>
			<br>
		

		<h3>Agora é a sua vez</h3>

			<p>Crie um Array e solte as suas informações em sequência. Pesquise também funções que podem ser aplicadas neste tipo de dados.</p>
			<br>








	</body>

</html>
