<?php

	namespace Enumerators;
	
	 class StatusMesa {
		
		const
			Livre = 0
			Ocupada = 1
			AguardandoLimpeza = 2

		function retornaStatusMesa($valor){
			if($valor == 0){
				return "Livre";
			}elseif($valor == 1){
				return "Ocupada";
			}elseif($valor == 2){
				return "Aguardando Limpeza";
			}
		}

	}
?>
