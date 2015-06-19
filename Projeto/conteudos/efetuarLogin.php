<?php
    session_start();
    require("../../ConexaoBanco/ConexaoBase.php");
    require("../../ConexaoBanco/ConexaoUsuario.php");
    require("../../Entidades/Usuario.php");

    $ConexaoUsuario = new ConexaoUsuario();

    if ( $_POST['usuario'] != "" && $_POST['senha'] != "" ) {
 
        $usuario=$ConexaoUsuario->buscarPorUsuarioESenha($_POST['usuario'], $_POST['senha']);
        if(!$usuario) {
            echo "<meta http-equiv='refresh' content='0; url=login.php?error=1'>";
            die();
        }else{
            $_SESSION['usuario'] = $usuario[0];
            $_SESSION['tipo'] = $usuario[2];

            if ($usuario[2] == 0) { //administrador
                echo "<meta http-equiv='refresh' content='0; url=administrador.php'>";
            }else if ($usuario[2] == 1) { //mesa
                echo "<meta http-equiv='refresh' content='0; url=index.php'>";
            }else{ //cliente
                echo "<meta http-equiv='refresh' content='0; url=cliente.php'>";
            }
            die();
        }
    }else{
        echo "<meta http-equiv='refresh' content='0; url=login.php?error=1'>";
        die();
    }
?>
