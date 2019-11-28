<?php

include "./Classes/Conexao.php";
include './Classes/DAO/UsuarioDAO.php';

if ($_GET) {
    $codigo = $_GET['codigo'];
    $UsuarioDAO = new UsuarioDAO();
    
    $consulta = $UsuarioDAO->consultarCodigo($codigo);

    if ($consulta == true) {
        for ($i = 0; $i < mysqli_num_rows($consulta); $i++) {
            $linha = mysqli_fetch_array($consulta);

            $respostas[] = array(
                'id' => $linha['id_carro'],
                'nome' => $linha['marca_carro'],
                'sobrenome' => $linha['cor_carro'],
                'idade' => $linha['ano_carro'],

            );
        }
        echo json_encode($respostas);
    }else{
        echo 'Digite um codigo valido';
    }
} 
