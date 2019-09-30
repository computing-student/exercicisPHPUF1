<html>
 <head>
  <meta charset="UTF-8">	
	<!-- Carrego el full d'estils que toca -->
    <?php
    	$skin = "";
    	if(!isset($_GET["skinfile"])) {
    		$skin = "aigua.css";
    	}

 		if(isset($_GET['skinfile'])) {
 			$skin = $_GET["skinfile"];
 		} 

 		echo '<link rel="stylesheet" type="text/css" href="./ex3CSS/'.$skin.'">';
    ?>
  <title>Selector</title>		
 </head>
 <body>
 	<h1>Selector de skins </h1><br>
 	<form name="formulario" method="get">
	  	<!-- Llista de selecció -->
	  	Selecciona la opció desitjada:
	  	<select name="skinfile"> 
	    	<!-- Opcions de la llista -->
	    	<?php
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
			
				function endsWith($haystack, $needle)
				{
				    $length = strlen($needle);
				    if ($length == 0) {
				        return true;
				    }

				    return (substr($haystack, -$length) === $needle);
				}
			
				$dir = opendir("ex3CSS");
				$arxiu = readdir($dir);
				$nom = strval($arxiu);
				
				$first = true;
				
				// Llegeixo els arxius i carrego les opcions.
				while($arxiu !== false)
				{
					if(endsWith($nom, '.css')) 
					{
						$opcio = explode(".", $nom)[0];

						if(isset($_GET['skinfile'])) 
						{
							if($_GET["skinfile"] == $nom) 
							{
								echo "<option value=$nom selected>$opcio</option>";
							}
							else
							{
								echo "<option value=$nom>$opcio</option>";
							}
						}
						else
						{
							if($first)
							{
								echo "<option value=$nom selected>$opcio</option>";
							}
							else
							{
								echo "<option value=$nom>$opcio</option>";
							}
						}
						$first = false;
					}
					$arxiu = readdir($dir);
					$nom = strval($arxiu);

				}
 
				closedir($dir);
			?>
	    	
	  	</select><br><br>
	  		
		<!-- Per carregar l'estil seleccionat, cal polsar aquí.-->
	  	<input type="submit" name="submit" value="Canviar estil"><br><br>


 			
 	</form><br>
 	
 </body>
</html>