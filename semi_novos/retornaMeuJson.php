<?php

include "./Classes/Conexao.php";
include './Classes/DAO/UsuarioDAO.php';


$UsuarioDAO = new UsuarioDAO();

$consulta = $UsuarioDAO->consultarTodosCarros();

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
}

echo json_encode($respostas);
?>