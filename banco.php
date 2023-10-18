<?php
    $banco = new mysqli("localhost,"root","","bd_games");
    id ($banco -> connect_errno){
        echo "encontrei um erro $banco-> errno --> $banco-> connect_error " ;
        die();
    }
    else{
        echo"deu certo";
    }
    $banco = $banco >query("select - from generos");
    if ($banco){
        echo "falha na busca  ! $banco->error";
    }else{
        while($reg = $busca ->fetc
?>