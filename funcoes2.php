	<?php 
		include 'header.php';
		$aula_atual = 'funcoes';
	?>


	<body>


		<h2>FUNÇÕES</h2>
		<hr>
		<small>PHP</small>


		<h3>Função simples sem argumento</h3>
			
			<?php
				function ola_mundo() {
					echo 'Olá Mundo';
					echo '<br>';
					echo 'Fim da Função';
				}
				
				ola_mundo();
	
	
			
			?>

		<h3>Função com argumentos</h3>
		
			<?php
				    function soma($num1, $num2) {
					$soma = $num1 + $num2;
					echo $soma;
				}
				
				 soma(5,3);		
			?>

		<h3>Função com argumento e valor default</h3>
			<?php
				    function ola_cliente($nome = 'cliente'){
					echo  "Olá $nome, como vai?";
				}
				
				 ola_cliente();		
			?>
	
		<h3>echo ou return?</h3>
		
		<?php
			
			function media ($num1, $num2){
				$media = ($num1 + $num2) / 2;
				return $media;
			}
			
			$media_nota = media(6,8);
			
			echo $media_nota;
		
		?>

	</body>

</html>