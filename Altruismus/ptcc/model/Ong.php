<?php
    require_once("Conexao.php");
    class Ong{
        private $idOng;

        private $cepOng;
        private $cidadeOng;
        private $bairroOng;
        private $complementoOng;
        private $estadoOng;
        private $ruaOng;
        private $nomeOng;
        private $emailOng;
        private $senhaOng;
        private $dataNascOng;
        private $lugradouroOng;

       

        public function getIdOng(){
            return $this->idOng;
        }
        public function getCepOng(){
            return $this->cepOng;
        }
        public function getCidadeOng(){
            return $this->cidadeOng;
        }
        public function getBairroOng(){
            return $this->bairroOng;
        }
        public function getComplementoOng(){
            return $this->complementoOng;
        }
        public function getEstadoOng(){
            return $this->estadoOng;
        }
        public function getRuaOng(){
            return $this->ruaOng;
        }
        public function getNomeOng(){
            return $this->nomeOng;
        }
        public function getEmailOng(){
            return $this->emailOng;
        }
        public function getSenhaOng(){
            return $this->senhaOng;
        }
        public function getDataNascOng(){
            return $this->dataNascOng;
        }
        public function getLugradouroOng(){
            return $this->lugradouroOng;
        }


        public function setIdOng($idOng){
            $this->idOng = $idOng;
        }
        public function setCepOng($cepOng){
            $this->cepOng = $cepOng;
        }
        public function setCidadeOng($cidadeOng){
            $this->cidadeOng = $cidadeOng;
        }
        public function setBairroOng($bairroOng){
            $this->bairroOng = $bairroOng;
        }
        public function setComplementoOng($complementoOng){
            $this->complementoOng = $complementoOng;
        }
        public function setEstadoOng($estadoOng){
            $this->estadoOng = $estadoOng;
        }
        public function setRuaOng($ruaOng){
            $this->ruaOng = $ruaOng;
        }
        public function setNomeOng($nomeOng){
            $this->nomeOng = $nomeOng;
        }
        public function setEmailOng($emailOng){
            $this->emailOng = $emailOng;
        }
        public function setSenhaOng($senhaOng){
            $this->senhaOng = $senhaOng;
        }
        public function setDataNascOng($dataNascOng){
            $this->dataNascOng = $dataNascOng;
        }
        public function setLugradouroOng($lugradouroOng){
            $this->lugradouroOng = $lugradouroOng;
        }



        public function cadastrar ($ong){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbong(idong,cepong,cidadeong,bairroong,complementoong,
            estadoong,ruaong,nomeong,emailong,senhaong,datanascong,lugradouroong) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bindvalue(1, $ong->getIdOng());
            $stmt->bindvalue(2, $ong->getCepOng());
            $stmt->bindvalue(3, $ong->getCidadeOng());
            $stmt->bindvalue(4, $ong->getBairroOng());
            $stmt->bindvalue(5, $ong->getComplementoOng());
            $stmt->bindvalue(6, $ong->getEstadoOng());
            $stmt->bindvalue(7, $ong->getRuaOng());
            $stmt->bindvalue(8, $ong->getNomeOng());
            $stmt->bindValue(9, $ong->getEmailOng());
            $stmt->bindValue(10, $ong->getSenhaOng());
            $stmt->bindValue(11, $ong->getDataNascOng());
            $stmt->bindValue(12, $ong->getLugradouroOng());
           
            

            $stmt->execute();
                                                                               
        }
        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            idong,cepong,cidadeong,bairroong,complementoong,estadoong,
                            ruaong,nomeong,emailong,senhaong,datanascong,lugradouroong FROM tbong";
                
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
             
        }

        public function deletar($idOng) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbong WHERE idong = $idOng";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

    }
    

?>