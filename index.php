<?php

ini_set('max_execution_time', 28800); //aumentando tempo de execução do programa para 300 segundos ou 5 minutos

$arquivo = fopen("combinacoes.txt", "w") or die("Erro ao criar arquivo!");


/*

Autor: Weuller Marcos - Engenheiro de Computação
Data Inicio: 03/04/2020
Data Fim: XX/XX/2020

Última modificação: 26/05/2020

*/

	// Função que verifica se os numeros informados são diferentes entre si
	// Recebe como parâmetro os números que serão verificados
	// Retorna true ou false informando se os números são diferentes entre si ou não
	// Objetivo é evitar de ter algo como: [1,2,3,4,6,6]
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
	// Objetivo é evitar de ter algo como: [1,2,3,4,5,6] e [1,2,3,4,6,5];
	function numeroAnteriorMenor($valor1, $valor2, $valor3, $valor4, $valor5, $valor6){

		if($valor5 > $valor6 || $valor4 > $valor5 || $valor3 > $valor4 || $valor2 > $valor3 || $valor1 > $valor2){

			return false;
		}

		return true;

	}

	// Função que verifica se existem mais de 4 números pares/impares
	// Recebe como parâmetro os números que serão verificados
	// Retorna true ou false informando se existem quatro ou menos números pares/impares
	// Objetivo é evitar de ter algo como: [2,4,6,8,10,12] e [1,2,4,6,8,10];
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
		
		//[OTIMIZAÇÃO] - se já tiver mais do que 4 pares ou impares já pode parar a execução
		//se tiverem mais do que 4 pares ou 4 impares retorna falso
		if($par > 4 || $impar > 4)
			return false;


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

	//verifica a existencia de mais de uma dupla em sequencia
	//Regra: Ter no máximo um conjunto de dois números em sequência; 
	// Objetivo é evitar de ter algo como: [1,2,3,4,5,6] ou [1,2,5,6,9,10];
	function numerosEmSequencia($valor1, $valor2, $valor3, $valor4, $valor5, $valor6){

		$sequencia = 0;

		//Possível serquência 1
		if(($valor1 + 1) == $valor2) $sequencia ++;


		//Possível serquência 2
		if(($valor2 + 1) == $valor3) $sequencia ++;
		//[OTIMIZAÇÃO] - se já tiver identificado mais do que uma sequência retorna falso;
		if($sequencia > 1) return false;


		//Possível serquência 3
		if(($valor3 + 1) == $valor4) $sequencia ++;
		//[OTIMIZAÇÃO] - se já tiver identificado mais do que uma sequência retorna falso;
		if($sequencia > 1) return false;


		//Possível serquência 4
		if(($valor4 + 1) == $valor5) $sequencia ++;
		//[OTIMIZAÇÃO] - se já tiver identificado mais do que uma sequência retorna falso;
		if($sequencia > 1)return false;


		//Possível serquência 5
		if(($valor5 + 1) == $valor6) $sequencia ++;
		//[OTIMIZAÇÃO] - se já tiver identificado mais do que uma sequência retorna falso;
		if($sequencia > 1) return false;


		return true;

	}

	//Ter números no mínimo em 3 linhas e no máximo em 4 linhas;
	function numerosEmTresOuQuatroLinha($valor1, $valor2, $valor3, $valor4, $valor5, $valor6){

		$linha1 = 0; $linha2 = 0; $linha3 = 0;
		$linha4 = 0; $linha5 = 0; $linha6 = 0;

		if(($valor1 >=1 && $valor1 <= 10) || ($valor2 >=1 && $valor2 <= 10) || ($valor3 >=1 && $valor3 <= 10) || 
		   ($valor4 >=1 && $valor4 <= 10) || ($valor5 >=1 && $valor5 <= 10) || ($valor6 >=1 && $valor6 <= 10))
			$linha1 ++;
		
		if(($valor1 >=11 && $valor1 <= 20) || ($valor2 >=11 && $valor2 <= 20) || ($valor3 >=11 && $valor3 <= 20) || 
		   ($valor4 >=11 && $valor4 <= 20) || ($valor5 >=11 && $valor5 <= 20) || ($valor6 >=11 && $valor6 <= 20))
			$linha2 ++;

		if(($valor1 >=21 && $valor1 <= 30) || ($valor2 >=21 && $valor2 <= 30) || ($valor3 >=21 && $valor3 <= 30) || 
		   ($valor4 >=21 && $valor4 <= 30) || ($valor5 >=21 && $valor5 <= 30) || ($valor6 >=21 && $valor6 <= 30))
			$linha3 ++;

		if(($valor1 >=31 && $valor1 <= 40) || ($valor2 >=31 && $valor2 <= 40) || ($valor3 >=31 && $valor3 <= 40) || 
		   ($valor4 >=31 && $valor4 <= 40) || ($valor5 >=31 && $valor5 <= 40) || ($valor6 >=31 && $valor6 <= 40))
			$linha4 ++;

		if(($valor1 >=41 && $valor1 <= 50) || ($valor2 >=41 && $valor2 <= 50) || ($valor3 >=41 && $valor3 <= 50) || 
		   ($valor4 >=41 && $valor4 <= 50) || ($valor5 >=41 && $valor5 <= 50) || ($valor6 >=41 && $valor6 <= 50))
			$linha5 ++;

		if(($valor1 >=51 && $valor1 <= 60) || ($valor2 >=51 && $valor2 <= 60) || ($valor3 >=51 && $valor3 <= 60) || 
		   ($valor4 >=51 && $valor4 <= 60) || ($valor5 >=51 && $valor5 <= 60) || ($valor6 >=51 && $valor6 <= 60))
			$linha6 ++;


		//echo ($linha1 + $linha2 + $linha3 + $linha4 + $linha5 + $linha6);

		if(($linha1 + $linha2 + $linha3 + $linha4 + $linha5 + $linha6) < 3 ||
	       ($linha1 + $linha2 + $linha3 + $linha4 + $linha5 + $linha6) > 4)
			return false;

		return true;

	}

		//Ter No máximo 3 números por linha;
	function noMaximoTresNumerosPorLinha($valor1, $valor2, $valor3, $valor4, $valor5, $valor6){

		$linha1 = 0; $linha2 = 0; $linha3 = 0;
		$linha4 = 0; $linha5 = 0; $linha6 = 0;

		if(($valor1 >=1 && $valor1 <= 10)) $linha1 ++;
		if(($valor2 >=1 && $valor2 <= 10)) $linha1 ++;
		if(($valor3 >=1 && $valor3 <= 10)) $linha1 ++;
		if(($valor4 >=1 && $valor4 <= 10)) $linha1 ++;
		if(($valor5 >=1 && $valor5 <= 10)) $linha1 ++;
		if(($valor6 >=1 && $valor6 <= 10)) $linha1 ++;
		//se tiver mais de 3 números na primeira linha retorna false e não imprime
		if($linha1 > 3) return false;

		if(($valor1 >=11 && $valor1 <= 20)) $linha2 ++;
		if(($valor2 >=11 && $valor2 <= 20)) $linha2 ++;
		if(($valor3 >=11 && $valor3 <= 20)) $linha2 ++;
		if(($valor4 >=11 && $valor4 <= 20)) $linha2 ++;
		if(($valor5 >=11 && $valor5 <= 20)) $linha2 ++;
		if(($valor6 >=11 && $valor6 <= 20)) $linha2 ++;
		//se tiver mais de 3 números na segunda linha retorna false e não imprime
		if($linha2 > 3) return false;

		if(($valor1 >=21 && $valor1 <= 30)) $linha3 ++;
		if(($valor2 >=21 && $valor2 <= 30)) $linha3 ++;
		if(($valor3 >=21 && $valor3 <= 30)) $linha3 ++;
		if(($valor4 >=21 && $valor4 <= 30)) $linha3 ++;
		if(($valor5 >=21 && $valor5 <= 30)) $linha3 ++;
		if(($valor6 >=21 && $valor6 <= 30)) $linha3 ++;
		//se tiver mais de 3 números na terceira linha retorna false e não imprime
		if($linha3 > 3) return false;

		if(($valor1 >=31 && $valor1 <= 40)) $linha4 ++;
		if(($valor2 >=31 && $valor2 <= 40)) $linha4 ++;
		if(($valor3 >=31 && $valor3 <= 40)) $linha4 ++;
		if(($valor4 >=31 && $valor4 <= 40)) $linha4 ++;
		if(($valor5 >=31 && $valor5 <= 40)) $linha4 ++;
		if(($valor6 >=31 && $valor6 <= 40)) $linha4 ++;
		//se tiver mais de 3 números na quarta linha retorna false e não imprime
		if($linha4 > 3) return false;

		if(($valor1 >=41 && $valor1 <= 50)) $linha5 ++;
		if(($valor2 >=41 && $valor2 <= 50)) $linha5 ++;
		if(($valor3 >=41 && $valor3 <= 50)) $linha5 ++;
		if(($valor4 >=41 && $valor4 <= 50)) $linha5 ++;
		if(($valor5 >=41 && $valor5 <= 50)) $linha5 ++;
		if(($valor6 >=41 && $valor6 <= 50)) $linha5 ++;
		//se tiver mais de 3 números na quinta linha retorna false e não imprime
		if($linha5 > 3) return false;

		if(($valor1 >=51 && $valor1 <= 60)) $linha6 ++;
		if(($valor2 >=51 && $valor2 <= 60)) $linha6 ++;
		if(($valor3 >=51 && $valor3 <= 60)) $linha6 ++;
		if(($valor4 >=51 && $valor4 <= 60)) $linha6 ++;
		if(($valor5 >=51 && $valor5 <= 60)) $linha6 ++;
		if(($valor6 >=51 && $valor6 <= 60)) $linha6 ++;
		//se tiver mais de 3 números na sexta linha retorna false e não imprime
		if($linha6 > 3) return false;		

		return true;

	}

	// Regra: Ficar no máximo dois números por coluna
	// Regra: não podendo duas ou mais colunas com 2 números - Então somente uma coluna pode ter 2 números;
	function noMaximoDoisNumerosPorColunaEmUnaUnicaCoulna($valor1, $valor2, $valor3, $valor4, $valor5, $valor6){

		$colunasComDoisNumeros = 0;

		#faz o resto da divisão por 10 para saber em qual coluna cada valor está
		$resto1 = $valor1 % 10; $resto2 = $valor2 % 10; $resto3 = $valor3 % 10;
		$resto4 = $valor4 % 10; $resto5 = $valor5 % 10; $resto6 = $valor6 % 10;

		#criar vetor com a coluna de cada valor
		$vetor = [$resto1, $resto2, $resto3, $resto4, $resto5, $resto6];

		$contagem = array_count_values($vetor);

		$coluna1 = 0; $coluna2 = 0; $coluna3 = 0; $coluna4 = 0; $coluna5 = 0; 
		$coluna6 = 0; $coluna7 = 0; $coluna8 = 0; $coluna9 = 0; $coluna0 = 0;

		$coluna1 = is_null($contagem['1']) ? 0 : $contagem['1'];
		if($coluna1 > 2) return false; //se tiver mais de dois números na coluna 1 não imprime
		if($coluna1 == 2) $colunasComDoisNumeros++; //conta quantas colunas tem dois números

		$coluna2 = is_null($contagem['2']) ? 0 : $contagem['2'];
		if($coluna2 > 2) return false; //se tiver mais de dois números na coluna 2 não imprime
		if($coluna2 == 2) $colunasComDoisNumeros++; //conta quantas colunas tem dois números

		$coluna3 = is_null($contagem['3']) ? 0 : $contagem['3'];
		if($coluna3 > 2) return false; //se tiver mais de dois números na coluna 3 não imprime
		if($coluna3 == 2) $colunasComDoisNumeros++; //conta quantas colunas tem dois números

		$coluna4 = is_null($contagem['4']) ? 0 : $contagem['4'];
		if($coluna4 > 2) return false; //se tiver mais de dois números na coluna 4 não imprime
		if($coluna4 == 2) $colunasComDoisNumeros++; //conta quantas colunas tem dois números

		$coluna5 = is_null($contagem['5']) ? 0 : $contagem['5'];
		if($coluna5 > 2) return false; //se tiver mais de dois números na coluna 5 não imprime
		if($coluna5 == 2) $colunasComDoisNumeros++; //conta quantas colunas tem dois números

		$coluna6 = is_null($contagem['6']) ? 0 : $contagem['6'];
		if($coluna6 > 2) return false; //se tiver mais de dois números na coluna 6 não imprime
		if($coluna6 == 2) $colunasComDoisNumeros++; //conta quantas colunas tem dois números

		$coluna7 = is_null($contagem['7']) ? 0 : $contagem['7'];
		if($coluna7 > 2) return false; //se tiver mais de dois números na coluna 7 não imprime
		if($coluna7 == 2) $colunasComDoisNumeros++; //conta quantas colunas tem dois números

		$coluna8 = is_null($contagem['8']) ? 0 : $contagem['8'];
		if($coluna8 > 2) return false; //se tiver mais de dois números na coluna 8 não imprime
		if($coluna8 == 2) $colunasComDoisNumeros++; //conta quantas colunas tem dois números

		$coluna9 = is_null($contagem['9']) ? 0 : $contagem['9'];
		if($coluna9 > 2) return false; //se tiver mais de dois números na coluna 9 não imprime
		if($coluna9 == 2) $colunasComDoisNumeros++; //conta quantas colunas tem dois números

		$coluna0 = is_null($contagem['0']) ? 0 : $contagem['0'];
		if($coluna0 > 2) return false; //se tiver mais de dois números na coluna 0 não imprime
		if($coluna0 == 2) $colunasComDoisNumeros++; //conta quantas colunas tem dois números


		//se houver mais de uma coluna com dois número retorna false e não imprime
		if($colunasComDoisNumeros > 1)
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
	/*	*/

	echo "</br>Iniciando criação do arquivo...";

	for($i1 = 0; $i1 < 60; $i1++){
		for($i2 = 0; $i2 < 60; $i2++){
			for($i3 = 0; $i3 < 60; $i3++){
				for($i4 = 0; $i4 < 60; $i4++){
					for($i5 = 0; $i5 < 60; $i5++){
						for($i6 = 0; $i6 < 60; $i6++){

							if(numerosDiferentes($numero1, $numero2, $numero3, $numero4, $numero5, $numero6) &&
							   numerosEmSequencia($numero1, $numero2, $numero3, $numero4, $numero5, $numero6) &&
							   numeroAnteriorMenor($numero1, $numero2, $numero3, $numero4, $numero5, $numero6) &&
							   quatroOuMenosParesOuImpares($numero1, $numero2, $numero3, $numero4, $numero5, $numero6) &&
							   numerosEmTresOuQuatroLinha($numero1, $numero2, $numero3, $numero4, $numero5, $numero6) &&
							   noMaximoTresNumerosPorLinha($numero1, $numero2, $numero3, $numero4, $numero5, $numero6) &&
							   noMaximoDoisNumerosPorColunaEmUnaUnicaCoulna($numero1, $numero2, $numero3, $numero4, $numero5, $numero6)){
								
								echo "</br>".$combinacao.": [".$numero1." / ".$numero2." / ".$numero3." / ".$numero4." / ".$numero5." / ".$numero6."]";

								//$txt = "\n".$combinacao.": [".$numero1." / ".$numero2." / ".$numero3." / ".$numero4." / ".$numero5." / ".$numero6."]";

								//fwrite($arquivo, $txt);
								
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


	fclose($arquivo);

	echo "</br>Finalizada criação do arquivo. Número de ítens: ".$combinacao;
	echo $combinacao;

	

 

//Travou no 442.577	
//Dia 21/04/2020: Travou no 305.605 - [ 1 / 3 / 10 / 43 / 56 / 59 ] - Antes das otimizações - até: noMaximoTresNumerosPorLinha;
//Dia 21/04/2020: Travou no 604.072 - [ 1 / 4 / 19 / 22 / 25 / 56 ] - Com a primeira otimização - até: noMaximoTresNumerosPorLinha;
//Dia 21/05/2020: Travou no 362.694 - [ 1 / 3 / 18 / 31 / 38 / 47 ] - com a segunda otimização

//Dia 25/05/2020: Salvando em arquivo (2400 segundos): 6.819.149 resultados e deu timeout  
//Dia 26/05/2020: Salvando em arquivo (14400 segundos): 20.561.288 resultados e deu timeout  
//Dia 28/05/2020: Salvando em arquivo (28800 segundos): 24.462.467 resultados e deu timeout  


?>





