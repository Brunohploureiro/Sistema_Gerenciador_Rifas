<?php

    session_start();

    if(!isset($_SESSION['NOME']) && !isser($_SESSION['TIPO'])){
        $dados = array(
            'tipo' => 'error',
            'mensagem' => 'Você não está autenticado.'
       );
    }else{
        $daddos = array(
            'tipo' => 'success',
            'mensagem' => 'Seja bem vindo'.$_SESSION['NOME']
        );
    }

echo json_encode($dados);