<?php

//ini_set('max_execution_time', 1200); //aumentando tempo de execução do programa para 300 segundos ou 5 minutos

/*

Autor: Weuller Marcos - Engenheiro de Computação
Data Inicio: 03/04/2020
Data Fim: XX/XX/2020

Última modificação: 04/04/2020

*/

	
	// Função que verifica se os numeros informados são diferentes entre si
	// Recebe como parâmetro os números que serão verificados
	// Retorna true ou false informando se os números são diferentes entre si ou não
	function numerosDiferentes($valor1, $valor2, $valor3, $valor4, $valor5, $valor6){


		if($valor1 == $valor2 || $valor1 == $valor3 || $valor1 == $valor4 || $valor1 == $valor5 || $valor1 == $valor6 ||
		   $valor2 == $valor3 || $valor2 == $valor4 || $valor2 == $valor5 || $valor2 == $valor6 ||
		   $valor3 == $valor4 || $valor3 == $valor5 || $valor3 == $valor6 ||
		   $valor4 == $valor5 || $valor4 == $valor6 ||
		   $valor5 == $valor6){

			return false;
		}

		return true;
	}

	// Função que verifica se o numero anterior é menor que o seguinte da combinação
	// Recebe como parâmetro os números que serão verificados
	// Retorna true ou false informando se o número anterior for menor e false caso contrário
	function numeroAnteriorMenor($valor1, $valor2, $valor3, $valor4, $valor5, $valor6){

		if($valor5 > $valor6 || $valor4 > $valor5 || $valor3 > $valor4 || $valor2 > $valor3 || $valor1 > $valor2){

			return false;
		}

		return true;

	}

	// Função que verifica se existem quatro ou ou menos números pares/impares
	// Recebe como parâmetro os números que serão verificados
	// Retorna true ou false informando se existem quatro ou menos números pares/impares
	function quatroOuMenosParesOuImpares($valor1, $valor2, $valor3, $valor4, $valor5, $valor6){

		$par = 0;
		$impar = 0;


		if(($valor1 % 2) == 0)
			$par ++;
		else
			$impar++;

		if(($valor2 % 2) == 0)
			$par ++;
		else
			$impar++;

		if(($valor3 % 2) == 0)
			$par ++;
		else
			$impar++;

		if(($valor4 % 2) == 0)
			$par ++;
		else
			$impar++;

		if(($valor5 % 2) == 0)
			$par ++;
		else
			$impar++;

		if(($valor6 % 2) == 0)
			$par ++;
		else
			$impar++;

		//se tiverem mais do que 4 pares ou 4 impares retorna falso
		if($par > 4 || $impar > 4)
			return false;


		//retorna true, tem 4 pares/impares ou menos
		return true;

	}

	function numerosEmSequencia($valor1, $valor2, $valor3, $valor4, $valor5, $valor6){

		$sequencia = 0;

		if(($valor1 + 1) == $valor2)
			$sequencia ++;

		if(($valor2 + 1) == $valor3)
			$sequencia ++;

		if(($valor3 + 1) == $valor4)
			$sequencia ++;

		if(($valor4 + 1) == $valor5)
			$sequencia ++;

		if(($valor5 + 1) == $valor6)
			$sequencia ++;

		if($sequencia > 1)
			return false;


		return true;

	}

	//Verifica se existe No mínimo um número primo ímpar; 
	//e no máximo 3 números primos ímpares;
	function primosImpares($valor1, $valor2, $valor3, $valor4, $valor5, $valor6){


		//Primos impares: 3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59
		$primos = 0;

		/*

		if($valor1 == 3  || $valor1 == 5  || $valor1 == 7  || $valor1 == 11 || $valor1 == 13 || $valor1 == 17 ||
		   $valor1 == 19 || $valor1 == 23 || $valor1 == 29 || $valor1 == 31 || $valor1 == 37 || $valor1 == 41 ||
		   $valor1 == 43 || $valor1 == 47 || $valor1 == 53 || $valor1 == 59)
			$primos;

		if($valor2 == 3  || $valor2 == 5  || $valor2 == 7  || $valor2 == 11 || $valor2 == 13 || $valor2 == 17 ||
		   $valor2 == 19 || $valor2 == 23 || $valor2 == 29 || $valor2 == 31 || $valor2 == 37 || $valor2 == 41 ||
		   $valor2 == 43 || $valor2 == 47 || $valor2 == 53 || $valor2 == 59)
			$primos;

		if($valor3 == 3  || $valor3 == 5  || $valor3 == 7  || $valor3 == 11 || $valor3 == 13 || $valor3 == 17 ||
		   $valor3 == 19 || $valor3 == 23 || $valor3 == 29 || $valor3 == 31 || $valor3 == 37 || $valor3 == 41 ||
		   $valor3 == 43 || $valor3 == 47 || $valor3 == 53 || $valor3 == 59)
			$primos;

		if($valor4 == 3  || $valor4 == 5  || $valor4 == 7  || $valor4 == 11 || $valor4 == 13 || $valor4 == 17 ||
		   $valor4 == 19 || $valor4 == 23 || $valor4 == 29 || $valor4 == 31 || $valor4 == 37 || $valor4 == 41 ||
		   $valor4 == 43 || $valor4 == 47 || $valor4 == 53 || $valor4 == 59)
			$primos;

		if($valor5 == 3  || $valor5 == 5  || $valor5 == 7  || $valor5 == 11 || $valor5 == 13 || $valor5 == 17 ||
		   $valor5 == 19 || $valor5 == 23 || $valor5 == 29 || $valor5 == 31 || $valor5 == 37 || $valor5 == 41 ||
		   $valor5 == 43 || $valor5 == 47 || $valor5 == 53 || $valor5 == 59)
			$primos;

		if($valor6 == 3  || $valor6 == 5  || $valor6 == 7  || $valor6 == 11 || $valor6 == 13 || $valor6 == 17 ||
		   $valor6 == 19 || $valor6 == 23 || $valor6 == 29 || $valor6 == 31 || $valor6 == 37 || $valor6 == 41 ||
		   $valor6 == 43 || $valor6 == 47 || $valor6 == 53 || $valor6 == 59)
			$primos;

		//se não tiver nenhum primo impar OU tiver mais de 3 primos impare não imprime
		if($primos == 0 || $primos > 3)
			return false;

		//ao contrário imprime
		return true;

		*/


	}


	$numero1 = 1; $numero2 = 1; $numero3 = 1; 
	$numero4 = 1; $numero5 = 1; $numero6 = 1;
	
	$combinacao = 1;


	/*Cria as combinações*/
	/**/	

	for($i1 = 0; $i1 < 60; $i1++){
		for($i2 = 0; $i2 < 60; $i2++){
			for($i3 = 0; $i3 < 60; $i3++){
				for($i4 = 0; $i4 < 60; $i4++){
					for($i5 = 0; $i5 < 60; $i5++){
						for($i6 = 0; $i6 < 60; $i6++){

							if(numerosEmSequencia($numero1, $numero2, $numero3, $numero4, $numero5, $numero6) &&
							   numerosDiferentes($numero1, $numero2, $numero3, $numero4, $numero5, $numero6) &&
							   numeroAnteriorMenor($numero1, $numero2, $numero3, $numero4, $numero5, $numero6) &&
							   quatroOuMenosParesOuImpares($numero1, $numero2, $numero3, $numero4, $numero5, $numero6)){
								
								echo "</br>C ".$combinacao.": [ ".$numero1." / ".$numero2." / ".$numero3." / ".$numero4." / ".$numero5." / ".$numero6." ]";
								
								$combinacao++;
							}
					
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





