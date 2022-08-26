<?php

    require_once("Conexao.php");
    require_once("Ong.php");

    class TelefoneOng{
        private $idTelefoneOng;
        private $idOng;
        private $telefoneOng;
        private $ong;

        public function getIdTelefoneOng(){
            return $this->idTelefoneOng;
        }
        public function getIdOng(){
            return $this->idOng;
        }
        public function getTelefoneOng(){
            return $this->telefoneOng;
        }
        public function getOng(){
            return $this->ong;
        }
        


        public function setIdTelefoneOng($idTelefoneOng){
            $this->idTelefoneOng = $idTelefoneOng;
        }
        public function setIdOng($idOng){
            $this->idOng = $idOng;
        }
        public function setTelefoneOng($telefoneOng){
            $this->telefoneOng = $telefoneOng;
        }
        public function setOng($ong){
            $this->ong = $ong;
        }

        public function cadastrar($telefoneOng2){
            $conexao = Conexao::conectar();

            $stmt = $conexao->prepare("INSERT INTO tbtelefoneong(idtelefoneong,telefoneong,idong) 
            VALUES(?,?,?)");

            $stmt->bindvalue(1, $telefoneOng2->getIdTelefoneOng());
            $stmt->bindValue(2, $telefoneOng2->getTelefoneOng());
            $stmt->bindvalue(3, $telefoneOng2->getOng()->getIdOng());
            
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idtelefoneong,telefoneong,idong
                            FROM tbtelefoneong
                            INNER JOIN tbong ON tbong.idong = tbtelefoneong.idong";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function deletar($idTelefoneOng) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbtelefoneong WHERE idtelefoneong = $idTelefoneOng";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

}

?>