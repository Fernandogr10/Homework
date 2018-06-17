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
		
		$server = 'localhost';
		$user   = 'root';
		$password = '';
		$dbname = 'Rafael';
		$port  = '3306';
		$serial = fopen('/dev/ttyUSB0', 'r+b');


		

		
		$db_connect = new mysqli($server, $user, $password, $dbname, $port);
		
		if ($db_connect->connect_error == true) {
			
			echo 'Falha....' . $db_connect->connect_error;
		} else {
			echo 'conexão feita com sucesso' . '<br>';
			
			$sql = "INSERT INTO Sensores (Data, Dados) VALUES ('', 'fgets($serial)')";
			
			fclose($serial);
			
			if ($db_connect->query($sql) == true){
				echo "dados inseridos com sucesso";
			}else {
				echo "falha no envio dos dados";
			}	
			header("refresh:;receber.php");
		}
		
		
			?>
			


		

		




	</body>

</html>
