<?php

    require_once("Conexao.php");
    require_once("Ong.php");

    class Doacao{
        private $idDoacao;
        private $dataDoacao;
        private $descDoacao;
        private $idOng;
        private $ong;

        public function getIdDoacao(){
            return $this->idDoacao;
        }
        public function getDataDoacao(){
            return $this->dataDoacao;
        }
        public function getIdOng(){
            return $this->idOng;
        }
        public function getDescDoacao(){
            return $this->descDoacao;
        }
        public function getOng(){
            return $this->ong;
        }
        


        public function setIdDoacao($idDoacao){
            $this->idDoacao = $idDoacao;
        }
        public function setDataDoacao($dataDoacao){
            $this->dataDoacao = $dataDoacao;
        }
        public function setIdDoador($idDoador){
            $this->idDoador = $idDoador;
        }
        public function setDescDoacao($descDoacao){
            $this->descDoacao = $descDoacao;
        }
        public function setOng($ong){
            $this->ong = $ong;
        }


        public function cadastrar($doacao){
            $conexao = Conexao::conectar();

            $stmt = $conexao->prepare("INSERT INTO tbdoacao(iddoacao,datadoacao,descdoacao,idong) 
            VALUES(?,?,?,?)");

            $stmt->bindvalue(1, $doacao->getIdDoacao());
            $stmt->bindValue(2, $doacao->getDataDoacao());
            $stmt->bindValue(3, $doacao->getDescDoacao());
            $stmt->bindValue(4, $doacao->getOng()->getIdOng());
            
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT iddoacao,datadoacao,descdoacao,idong
                            FROM tbdoacao
                            INNER JOIN tbong ON tbong.idong = tbdoacao.idong";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function deletar($idDoacao) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbdoacao WHERE iddoacao = $idDoacao";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

}

?>