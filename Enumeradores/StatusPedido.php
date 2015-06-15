<?php

	namespace Enumerators;
	
	 class StatusPedido {
		
		const
			Aguardando = 0
			EmPreparo = 1
			SendoEntregue = 2
			Finalizado = 3
			Cancelado = 4
			
		function retornaStatusMesa($valor){
			if($valor == 0){
				return "Aguardando";
			}elseif($valor == 1){
				return "Em Preparo";
			}elseif($valor == 2){
				return "Sendo Entregue";
			}elseif($valor == 3){
				return "Finalizado";
			}elseif($valor == 4){
				return "Cancelado";
			}
		}
	}
?>
