<?php


	function imprime($valor1, $valor2, $valor3, $valor4, $valor5, $valor6){


		if($valor1 == $valor2 || $valor1 == $valor3 || $valor1 == $valor4 || $valor1 == $valor5 || $valor1 == $valor6 ||
		   $valor2 == $valor3 || $valor2 == $valor4 || $valor2 == $valor5 || $valor2 == $valor6 ||
		   $valor3 == $valor4 || $valor3 == $valor5 || $valor3 == $valor6 ||
		   $valor4 == $valor5 || $valor4 == $valor6 ||
		   $valor5 == $valor6){

			return false;
		}

		return true;
	}

	$numero1 = 1; $numero2 = 1; $numero3 = 1; 
	$numero4 = 1; $numero5 = 1; $numero6 = 1;
	
	$combinacao = 1;
	

	echo "<br/>Passando valores diferentes";

	if(imprime(1,2,3,4,5,6))
		echo"<br/>Impremeu";



	echo "<br/><br/>Passando valores iguais";

	if(imprime(1,2,3,4,5,6))
		echo"<br/>Impremeu";



	
	//echo "Combinação 1: - [ ".$numero1." | ".$numero2." | ".$numero3." | ".$numero4." | ".$numero5." | ".$numero6." ]";

	/*

	for($i1 = 0; $i1 < 60; $i1++){
		for($i2 = 0; $i2 < 60; $i2++){
			for($i3 = 0; $i3 < 60; $i3++){
				for($i4 = 0; $i4 < 60; $i4++){
					for($i5 = 0; $i5 < 60; $i5++){
						for($i6 = 0; $i6 < 60; $i6++){

							echo "</br>Combinação ".$combinacao.": - [ ".$numero1." | ".$numero2." | ".$numero3." | ".$numero4." | ".$numero5." | ".$numero6." ]";
					
							$combinacao++;
							$numero6++;	
						}

						$numero6 = 1;
						$numero5++;	
					}

					$numero5 = 1;
					$numero4++;	
				}
				
				$numero4 = 1;
				$numero3++;
			}
			
			$numero3 = 1;
			$numero2++;
		}
		
		$numero2 = 1;
		$numero1++;	
	}

	*/

?>





