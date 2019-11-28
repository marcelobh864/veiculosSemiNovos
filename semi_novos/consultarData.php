<?php

include "./Classes/Conexao.php";
include './Classes/DAO/UsuarioDAO.php';

if ($_GET) {
    //Utilizar %20 no navegador para dar espaço
    $data = $_GET['data'];
    $UsuarioDAO = new UsuarioDAO();
    $consulta = $UsuarioDAO->consultarData($data);
    
    if ($consulta == true) {
        for ($i = 0; $i < mysqli_num_rows($consulta); $i++) {
            $linha = mysqli_fetch_array($consulta);

            $respostas [] = array(
                'id_carro' => $linha['id_carro'],
                'marca_carro' => $linha['marca_carro'],
                'cor_carro' => $linha['cor_carro'],
                'ano_carro' => $linha['ano_carro']
            );
        }
        echo json_encode($respostas);
    }else{
        echo 'Nenhuma data registrada';
    }

  
} 
?>