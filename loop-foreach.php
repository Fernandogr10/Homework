<?php 
		include 'header.php';
		$aula_atual = 'loop-foreach';
	?>


	<body>

		<h2>LOOP FOREACH</h2>
		<hr>
		<small>PHP</small>

		

	<?php 
             $valortemp1 = 25.50;
	     $valortemp2 = 30.00;
	     $valortemp3 = 42.50; 
	     $leitura = array(
			     array(
				    "sensor" => "TipoK",
				    "medicao" => number_format($valortemp1,2),
				    "IP" => "192.168.0.13",
				    "port" => "7"
				  ),
			     array(
			            "sensor" => "TipoK",
				    "medicao" => number_format($valortemp2,2),
				    "IP" => "192.168.0.13",
				    "port" => "8"
			           ),
			     array(
			            "sensor" => "TipoK",
				    "medicao" => number_format($valortemp3,2),
				    "IP" => "192.168.0.13",
				    "port" => "9"
				    )
			); 
		?>
<h3>Meus Sensores</h3>

<?php foreach ($leitura as $item){
	echo $item['sensor'];
	echo '<br>';
} ?>



	


	</body>

</html>