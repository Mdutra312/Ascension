<?php

    require_once("Conexao.php");
    require_once("Doacao.php");

    class ItensDoacao{
        private $idItensDoacao;
        private $nomeItensDoacao;
        private $quantidadeItensDoacao;
        private $idDoacao;
        private $doacao;

        public function getIdItensDoacao(){
            return $this->idItensDoacao;
        }
        public function getNomeItensDoacao(){
            return $this->nomeItensDoacao;
        }
        public function getQuantidadeItensDoacao(){
            return $this->quantidadeItensDoacao;
        }
        public function getIdDoacao(){
            return $this->idDoacao;
        }
        public function getDoacao(){
            return $this->doacao;
        }
        


        public function setIdItensDoacao($idItensDoacao){
            $this->idItensDoacao = $idItensDoacao;
        }
        public function setNomeItensDoacao($nomeItensDoacao){
            $this->nomeItensDoacao = $nomeItensDoacao;
        }
        public function setQuantidadeItensDoacao($quantidadeItensDoacao){
            $this->quantidadeItensDoacao = $quantidadeItensDoacao;
        }
        public function setIdDoacao($idDoacao){
            $this->idDoacao = $idDoacao;
        }
        public function setDoacao($doacao){
            $this->doacao = $doacao;
        }


        public function cadastrar($itensDoacao){
            $conexao = Conexao::conectar();

            $stmt = $conexao->prepare("INSERT INTO tbitensdoacao(iditensdoacao,nomeitensdoacao,
            quantidadeitensdoacao,iddoacao) 
            VALUES(?,?,?,?)");

            $stmt->bindValue(1, $itensDoacao->getIdItensDoacao());
            $stmt->bindValue(2, $itensDoacao->getNomeItensDoacao());
            $stmt->bindValue(3, $itensDoacao->getQuantidadeItensDoacao());
            $stmt->bindValue(4, $itensDoacao->getDoacao()->getIdDoacao());
            
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT iditensdoacao,nomeitensdoacao,quantidadeitensdoacao,iddoacao
                            FROM tbitensdoacao
                            INNER JOIN tbdoacao ON tbitensdoacao.iditensdoacao = tbdoacao.iditensdoacao";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function deletar($idItensDoacao) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbitensdoacao WHERE iditensdoacao = $idItensDoacao";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

}

?>