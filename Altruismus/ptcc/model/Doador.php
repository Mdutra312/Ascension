<?php
       require_once("Conexao.php");
    class Doador{
        private $idDoador;
        
        private $cidadeDoador;
        private $bairroDoador;
        private $complementoDoador;
        private $estadoDoador;
        private $ruaDoador;
        private $cepDoador;
        private $nomeDoador;
        private $lugradouroDoador;
        private $dataNascDoador;
        private $emailDoador;
        private $senhaDoador;

        public function getIdDoador(){
            return $this->idDoador;
        }
        public function getCidadeDoador(){
            return $this->cidadeDoador;
        }
        public function getBairroDoador(){
            return $this->bairroDoador;
        }
        public function getComplementoDoador(){
            return $this->complementoDoador;
        }
        public function getEstadoDoador(){
            return $this->estadoDoador;
        }
        public function getRuaDoador(){
            return $this->ruaDoador;
        }
        public function getCepDoador(){
            return $this->cepDoador;
        }
        public function getNomeDoador(){
            return $this->nomeDoador;
        }
        public function getLugradouroDoador(){
            return $this->lugradouroDoador;
        }
        public function getDataNascDoador(){
            return $this->dataNascDoador;
        }
        public function getEmailDoador(){
            return $this->emailDoador;
        }
        public function getSenhaDoador(){
            return $this->senhaDoador;
        }


        public function setIdDoador($idDoador){
            $this->idDoador = $idDoador;
        }
        public function setCidadeDoador($cidadeDoador){
            $this->cidadeDoador = $cidadeDoador;
        }
        public function setBairroDoador($bairroDoador){
            $this->bairroDoador = $bairroDoador;
        }
        public function setComplementoDoador($complementoDoador){
            $this->complementoDoador = $complementoDoador;
        }
        public function setEstadoDoador($estadoDoador){
            $this->estadoDoador = $estadoDoador;
        }
        public function setRuaDoador($ruaDoador){
            $this->ruaDoador = $ruaDoador;
        }
        public function setCepDoador($cepDoador){
            $this->cepDoador = $cepDoador;
        }
        public function setNomeDoador($nomeDoador){
            $this->nomeDoador = $nomeDoador;
        }
        public function setLugradouroDoador($lugradouroDoador){
            $this->lugradouroDoador = $lugradouroDoador;
        }
        public function setDataNascDoador($dataNascDoador){
            $this->dataNascDoador = $dataNascDoador;
        }
        public function setEmailDoador($emailDoador){
            $this->emailDoador = $emailDoador;
        }
        public function setSenhaDoador($senhaDoador){
            $this->senhaDoador = $senhaDoador;
        }
       
        public function cadastrar ($doador){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbdoador(iddoador,cidadedoador, 
            bairrodoador,complementodoador,estadodoador,
            ruadoador,cepdoador,nomedoador,lugradourodoador,datanascdoador, 
            emaildoador,senhadoador) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bindvalue(1, $doador->getIdDoador());
            $stmt->bindvalue(2, $doador->getCidadeDoador());
            $stmt->bindvalue(3, $doador->getBairroDoador());
            $stmt->bindvalue(4, $doador->getComplementoDoador());
            $stmt->bindvalue(5, $doador->getEstadoDoador());
            $stmt->bindvalue(6, $doador->getRuaDoador());
            $stmt->bindvalue(7, $doador->getCepDoador());
            $stmt->bindvalue(8, $doador->getNomeDoador());
            $stmt->bindValue(9, $doador->getLugradouroDoador());
            $stmt->bindValue(10, $doador->getDataNascDoador());
            $stmt->bindvalue(11, $doador->getEmailDoador());
            $stmt->bindvalue(12, $doador->getSenhaDoador());
            
           
            
            $stmt->execute();
                                                                               
        }
        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT 
                            iddoador,cidadedoador,bairrodoador,complementodoador,estadodoador,ruadoador,
                            cepdoador,nomedoador,lugradourodoador,datanascdoador,emaildoador,senhadoador 
                            FROM tbdoador";
                
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista; 
             
        }

        public function deletar($idDoador) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbdoador WHERE iddoador = $idDoador";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

    }
     
?>