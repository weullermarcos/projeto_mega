<?php

	$numero1 = 1; $numero2 = 1; $numero3 = 1; 
	$numero4 = 1; $numero5 = 1; $numero6 = 1;
	
	$combinacao = 1;
	
	
	//echo "Combinação 1: - [ ".$numero1." | ".$numero2." | ".$numero3." | ".$numero4." | ".$numero5." | ".$numero6." ]";

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

?>





