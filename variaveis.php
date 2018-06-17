<?php 
	include 'header.php';
        $aula_atual = 'variaveis';
	?>


	<body>

		<h2>VARIÁVEIS E CONSTANTES</h2>
		<hr>
		<small>PHP</small>
		<br>

		<h3>Apresentar valor de variáveis</h3>

		<?php 
                     $nome = 'Rafael';
		     $saldo = '600.50';
		?>

		<h4>Nome: </h4>
		<p><?php echo $nome; ?></p>

		<br>

		<h4>Saldo: </h4>
		<p><?php echo $saldo; ?></p>

		<br>

<h4>Mensagem: <?php echo "Olá $nome, o seu saldo é $saldo"; ?></h4>
<p></p>
		


	</body>

</html>