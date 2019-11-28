<?php

class UsuarioDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function consultarTodosCarros() {
        $sql = "SELECT * FROM carros";

        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }

    public function consultarCodigo($codigo) {
        $sql = "SELECT * FROM carros WHERE id_carro = '$codigo'";

        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }
    public function consultarMarca($marca) {
        $sql = "SELECT * FROM carros WHERE marca_carro = '$marca'";

        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }
    public function consultarCor($cor) {
        $sql = "SELECT * FROM carros WHERE cor_carro = '$cor'";

        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }

    public function consultarSexoIdade($sexo, $idade) {
        $sql = "SELECT * FROM carros WHERE sexo = '$sexo' AND idade >= '$idade'";

        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }

    public function consultarEndereco($codigo) {
        $sql = "SELECT e.idUsuario, e.logradouro, e.cidade, e.estado, e.pais, u.id, u.nome, u.idade, u.sobrenome, u.sexo FROM endereco AS e INNER JOIN carros AS u ON (e.idUsuario = u.id) WHERE u.id = '$codigo'";

        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }
   

    public function consultarData($data) {
        
        $sql = " SELECT * from carros where ano_carro = '$data' ";

        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }

    
    

}
