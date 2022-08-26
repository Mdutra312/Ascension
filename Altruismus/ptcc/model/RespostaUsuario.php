<?php

    require_once("Conexao.php");
    require_once("Doacao.php");
    require_once("Doador.php");

    class DoacaoDoador{
        private $idRespostaUsuario;
        private $simOuNao;
        private $idDoacao;
        private $idDoador;
        private $doacao;
        private $doador;

        public function getIdRespostaUsuario(){
            return $this->idRespostaUsuario;
        }
        public function getSimOuNao(){
            return $this->simOuNao;
        }
        public function getIdDoacao(){
            return $this->idDoacao;
        }
        public function getIdDoador(){
            return $this->idDoador;
        }
        public function getDoacao(){
            return $this->doacao;
        }
        public function getDoador(){
            return $this->doador;
        }
        


        public function setIdRespostaUsuario($idRespostaUsuario){
            $this->idRespostaUsuario = $idRespostaUsuario;
        }
        public function setSimOuNao($simOuNao){
            $this->simOuNao = $simOuNao;
        }
        public function setIdDoacao($idDoacao){
            $this->idDoacao = $idDoacao;
        }
        public function setIdDoador($idDoador){
            $this->idDoador = $idDoador;
        }
        public function setDoacao($doacao){
            $this->doacao = $doacao;
        }
        public function setDoador($doador){
            $this->doador = $doador;
        }

        public function cadastrar($respostaUsuario){
            $conexao = Conexao::conectar();

            $stmt = $conexao->prepare("INSERT INTO tbdoacaodoador(idrespostausuario,simounao,iddoacao,iddoador) 
            VALUES(?,?,?,?)");

            $stmt->bindValue(1, $respostaUsuario->getIdRespostaUsuario());
            $stmt->bindValue(2, $respostaUsuario->getSimOuNao());
            $stmt->bindValue(3, $respostaUsuario->getDoacao()->getIdDoacao());
            $stmt->bindValue(4, $respostaUsuario->getDoador()->getIdDoador());
            
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idrespostausuario, simounao, iddoacao, iddoador
                            FROM tbrespostausuario
                            INNER JOIN tbdoador ON tbdoador.iddoador = tbrespostausuario.iddoador
                            INNER JOIN tbdoacao ON tbdoacao.iddoacao = tbrespostausuario.iddoacao";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public function deletar($idRespostaUsuario) {
            $conexao = Conexao::conectar();
            $querySelect = "DELETE FROM tbrespostausuario WHERE idrespostausuario = $idRespostaUsuario";
            $resultado = $conexao->query($querySelect);
            return  $resultado;
        }

}

?>