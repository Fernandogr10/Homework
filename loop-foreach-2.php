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
	     $valortemp4 = 32.50;
	     $leitura = array(
			     array(
				    "sensor" => "Tipo K",
				    "medicao" => number_format($valortemp1,2),
				    "IP" => "192.168.0.13",
				    "port" => "7"
				  ),
			     array(
			            "sensor" => "Tipo E",
				    "medicao" => number_format($valortemp2,2),
				    "IP" => "192.168.0.13",
				    "port" => "8"
			           ),
			     array(
			            "sensor" => "Tipo J",
				    "medicao" => number_format($valortemp3,2),
				    "IP" => "192.168.0.13",
				    "port" => "9"
				    ),
			     
			     array(
			            "sensor" => "Tipo E",
				    "medicao" => number_format($valortemp4,2),
				    "IP" => "192.168.0.13",
				    "port" => "10"
				    )
			     
			); 
		?>
<h3>Meus Sensores</h3>

<?php foreach ($leitura as $item){ ?>
	
	<li>
	     <?php echo $item['sensor']; ?> <br>
	     <?php echo $item['IP'] . ' : ' . $item['port']; ?> <br>
	     <?php echo $item ['medicao']; ?> 
	</li> <br>
	
<?php }  ?>

	</body>

</html>