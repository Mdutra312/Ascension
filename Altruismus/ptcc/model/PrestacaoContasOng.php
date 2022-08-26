<?php

    require_once("Conexao.php");
    require_once("Doador.php");
    require_once("Ong.php");

    class OngDoador{
        private $idPrestacaoContasOng;
        private $quantidadeItensRecebido;
        private $descProdutosRecebidos;
        private $dataRecebimento;
        private $fotoOng;
        private $fotoDoador;
        private $idOng;
        private $ong;

        public function getIdPrestacaoContasOng(){
            return $this->idPrestacaoContasOng;
        }
        public function getQuantidadeItensRecebido(){
            return $this->quantidadeItensRecebido;
        }
        public function getDescProdutosRecebidos(){
            return $this->descProdutosRecebidos;
        }
        public function getDataRecebimento(){
            return $this->dataRecebimento;
        }
        public function getFotoOng(){
            return $this->fotoOng;
        }
        public function getFotoDoador(){
            return $this->fotoDoador;
        }
        public function getIdOng(){
            return $this->idOng;
        }
        public function getOng(){
            return $this->ong;
        }
        


        public function setIdOngDoador($idOngDoador){
            $this->idOngDoador = $idOngDoador;
        }
        public function setQuantidadeItensRecebido($quantidadeItensRecebido){
            $this->quantidadeItensRecebido = $quantidadeItensRecebido;
        }
        public function setDescProdutosRecebidos($descProdutosRecebidos){
            $this->descProdutosRecebidos = $descProdutosRecebidos;
        }
        public function setDataRecebimento($dataRecebimento){
            $this->dataRecebimento = $dataRecebimento;
        }
        public function setFotoOng($fotoOng){
            $this->fotoOng = $fotoOng;
        }
        public function setFotoDoador($fotoDoador){
            $this->fotoDoador = $fotoDoador;
        }
        public function setIdOng($idOng){
            $this->idOng = $idOng;
        }
        public function setOng($ong){
            $this->ong = $ong;
        }

        public function cadastrar($prestacaoContasOng){
            $conexao = Conexao::conectar();

            $stmt = $conexao->prepare("INSERT INTO tbprestacaocontasong(idprestacaocontasong,quantidadeitensrecebido,
            descprodutosrecebidos,datarecebimento,fotoong,fotodoador,idong) 
            VALUES(?,?,?,?,?,?,?)");

            $stmt->bindValue(1, $prestacaoContasOng->getIdPrestacaoContasOng());
            $stmt->bindValue(2, $prestacaoContasOng->getQuantidadeItensRecebido());
            $stmt->bindValue(3, $prestacaoContasOng->getDescProdutosRecebidos());
            $stmt->bindValue(4, $prestacaoContasOng->getDataRecebimento());
            $stmt->bindValue(5, $prestacaoContasOng->getFotoOng());
            $stmt->bindValue(6, $prestacaoContasOng->getFotoDoador());
            $stmt->bindValue(7, $prestacaoContasOng->getOng()->getIdOng());
            
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idprestacaocontasong,quantidadeitensrecebidos,descprodutosrecebidos,
            datarecebimento,fotoong,fotodoador,idong
                            FROM tbprestacaocontasong
                            INNER JOIN tbong ON tbong.idong = tbprestacaocontasong.idong";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function deletar($idPrestacaoContasOng) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbprestacaocontasong WHERE idprestacaocontasong = $idPrestacaoContasOng";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

}

?>