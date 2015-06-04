<?php

	namespace Enumerators;
	
	 class Estado {
		
		const
			AC = 0
			AL = 1
			AP = 2
			AM = 3
			BA = 4
			CE = 5
			DF = 6
			ES = 7
			GO = 8
			MA = 9
			MT = 10
			MS = 11
			MG = 12
			PA = 13
			PB = 14
			PR = 15
			PE = 16
			PI = 17
			RJ = 18
			RN = 19
			RS = 20
			RO = 21
			RR = 22
			SC = 23
			SP = 24
			SE = 25
			TO = 26


		function retornaEstado($valor){
			if($valor == 0){
				return "Acre";
			}elseif($valor == 1){
				return "Alagoas";
			}elseif($valor == 2){
				return "Amapá";
			}elseif($valor == 3){
				return "Amazonas";
			}elseif($valor == 4){
				return "Bahia";
			}elseif($valor == 5){
				return "Ceará";
			}elseif($valor == 6){
				return "Distrito Federal";
			}elseif($valor == 7){
				return "Espírito Santo";
			}elseif($valor == 8){
				return "Goiás";
			}elseif($valor == 9){
				return "Maranhão";
			}elseif($valor == 10){
				return "Mato Grosso";
			}elseif($valor == 11){
				return "Mato Grosso do Sul";
			}elseif($valor == 12){
				return "Minas Gerais";
			}elseif($valor == 13){
				return "Pará";
			}elseif($valor == 14){
				return "Paraíba";
			}elseif($valor == 15){
				return "Paraná";
			}elseif($valor == 16){
				return "Pernambuco";
			}elseif($valor == 17){
				return "Piauí";
			}elseif($valor == 18){
				return "Rio de Janeiro";
			}elseif($valor == 19){
				return "Rio Grande do Norte";
			}elseif($valor == 20){
				return "Rio Grande do Sul";
			}elseif($valor == 21){
				return "Rondônia";
			}elseif($valor == 22){
				return "Roraima";
			}elseif($valor == 23){
				return "Santa Catarina";
			}elseif($valor == 24){
				return "São Paulo";
			}elseif($valor == 25){
				return "Sergipe";
			}elseif($valor == 26){
				return "Tocantins";
			}
		}
	}
?>
