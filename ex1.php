<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
  <title>Resol equacions</title>		
 </head>
 <body>
 	<h1>Aquest programa soluciona equacions de segon grau</h1><br>
 	<p>La formula d'una equació de segon grau és Ax² + Bx + C = 0 </p><br>
 	<form method="GET">
 		Valor de A:<br>
 		<input name="a" type="number"> </input><br>

 		Valor de B:<br>
 		<input name="b" type="number"> </input><br>

 		Valor de C:<br>
 		<input name="c" type="number"> </input><br>

 		<input type="submit" name="submit" value="Submit"><br><br>

 		<?php
 			if(isset($_GET['submit'])) {
 				// Recullo les dades.
 				$varA = (int) $_GET["a"];
 				$varB = (int) $_GET["b"];
 				$varC = (int) $_GET["c"];
 				if(($varB**2 - 4 * $varA * $varC) < 0) {
 					echo "L'equació no té solució.";
 				} else {
 					// Calculo les solucions.
 					$solucio1 = (-$varB + sqrt($varB**2 - 4 * $varA * $varC)) / (2 * $varA);
 					$solucio2= (-$varB - sqrt($varB**2 - 4 * $varA * $varC)) / (2 * $varA);
 					// Imprimeixo les solucions.
 					echo "Les variables introduïdes són: A = '$varA' | B = '$varB' | C = '$varC'";
 					echo "La solució a la equació introduïda són: '$solucio1' i '$solucio2'.";
 				}
			}
  		?>
 			
 	</form><br>
 	
 </body>
</html>