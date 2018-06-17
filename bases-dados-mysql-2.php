	<?php 
		include 'header.php';
		$aula_atual = 'base-dados-mysql';
	?>


	<body>


		<h2>Bases de Dados MySQL</h2>
		<hr>
		<small>PHP</small>

		<h3>MySQLi</h3>

		<?php
		
		$server = "localhost";
		$user   = "root";
		$password = '';
		$dbname = 'Rafael';
		$port  = '3306';
		
		// conecta ao banco de dados
		$connect = new mysqli($server,$user,$password);
		
		if ($connect->connect_error == true){
				echo "Conectado";
			}else {
				echo "Falha";
			}	
		
		?>
			


		

		




	</body>

</html>
