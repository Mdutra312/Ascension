<?php
    header("");
    
    require_once("../model/RespostaUsuario.php");
    require_once("../model/Doacao.php");
    require_once("../model/Doador.php");

    $respostaUsuario = new RespostaUsuario();
    $doacao = new Doacao();
    $doador = new Doador();

    $respostaUsuario->setSimOuNao($_POST['txtSimOuNao']);

    $doacao->setIdDoacao($_POST['doacao']);
    $respostaUsuario->setDoacao($doacao);
    $doador->setIdDoador($_POST['doador']);
    $respostaUsuario->setDoador($doador);



    $respostaUsuario->cadastrar($respostaUsuario);

    //echo("Paciente ". $paciente->getNomePaciente() ." cadastrado com sucesso");

?>