<?php

include('../../conexao/conn.php');

$ID = $_REQUEST['ID'];

$sql = "SELECT * FROM TIPO WHERE ID = $ID";

$resultado = $pdo->query($sql);

if($resultado){
    $dadosEixo = array(
        'tipo' => 'success',
        'mensagem' => '',
        'dados' => $dadosEixo 
    );
} else {
    $dados = array(
        'tipo' => 'error',
        'mensagem' => 'Não foi possivel obter o registo solicitado.',
        'dados' => array()
    );
}

echo json_encode($dados);