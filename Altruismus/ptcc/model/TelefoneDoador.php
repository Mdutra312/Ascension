<?php

    require_once("Conexao.php");
    require_once("Doador.php");

    class TelefoneDoador{
        private $idTelefoneDoador;
        private $idDoador;
        private $telefoneDoador;
        private $doador;

        public function getIdTelefoneDoador(){
            return $this->idTelefoneDoador;
        }
        public function getIdDoador(){
            return $this->idDoador;
        }
        public function getTelefoneDoador(){
            return $this->telefoneDoador;
        }
        public function getDoador(){
            return $this->doador;
        }
        


        public function setIdTelefoneDoador($idTelefoneDoador){
            $this->idTelefoneDoador = $idTelefoneDoador;
        }
        public function setIdOng($idDoador){
            $this->idDoador = $idDoador;
        }
        public function setTelefoneDoador($telefoneDoador){
            $this->telefoneDoador = $telefoneDoador;
        }
        public function setDoador($doador){
            $this->doador = $doador;
        }

        public function cadastrar($telefoneDoador){
            $conexao = Conexao::conectar();

            $stmt = $conexao->prepare("INSERT INTO tbtelefonedoador(iddoador) 
            VALUES(?)");

            $stmt->bindValue(1, $telefoneDoador->getTelefoneDoador()->getIdDoador());
            
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idtelefonedoador, iddoador,
                            FROM tbtelefonedoador
                            INNER JOIN tbdoador ON tbdoador.iddoador = tbtelefonedoador.iddoador";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function deletar($idTelefoneDoador) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbtelefonedoador WHERE idtelefonedoador = $idTelefoneDoador";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

}

?>