<?php

	namespace Enumerators;
	
	 class StatusComanda {
		
		const
			Aberta = 0
			Fechada = 1
			FechadaParaPedido = 2

		function retornaStatusMesa($valor){
			if($valor == 0){
				return "Aberta";
			}elseif($valor == 1){
				return "Fechada";
			}elseif($valor == 2){
				return "Fechada Para Pedido";
			}
		}
	}
?>
