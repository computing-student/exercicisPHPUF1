<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
  <title>Usuaris</title>		
 </head>
 <body>
 	<h1>Aquest programa enmagatzema </h1><br>
 	<form method="GET">
 		NOM:<br>
 		<input name="nom"> </input><br>

 		COGNOMS:<br>
 		<input name="cognoms"> </input><br>

 		E-MAIL:<br>
 		<input name="email"> </input><br>

 		<input type="submit" name="submit" value="Submit"><br><br>

 		<?php

 		

 			if(isset($_GET['submit']) != null and isset($_GET['nom']) != null 
 					and isset($_GET['cognoms']) != null and isset($_GET['email']) != null) {
 				$file_pointer = '/var/www/html/gent.txt';
 				$varNom = $_GET["nom"];
 				$varCognoms = $_GET["cognoms"];
 				$varEmail = $_GET["email"];
 				if(filter_var($varEmail, FILTER_VALIDATE_EMAIL)) {
 					echo "Les variables introduïdes són: Nom = '$varNom' | Cognoms = '$varCognoms' | Email = '$varEmail'";
 					$fichero = 'gent.txt';
					// Obre el fitxer per obtenir el contingut existent.
					$actual = file_get_contents($fichero);
					// Afegeix una nova fila amb les dades de la persona al fitxer.
					$actual .= "$varNom\t";
					$actual .= "$varCognoms\t";
					$actual .= "$varEmail\n";
					// Escriu el contingut del fitxer.
					file_put_contents($fichero, $actual);
 				} else {
 					echo "L'email no és vàlid.";
 				}
 				
			}
  		?>
 			
 	</form><br>
 	
 </body>
</html>