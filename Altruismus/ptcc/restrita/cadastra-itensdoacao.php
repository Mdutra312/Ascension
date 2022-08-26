<?php
    header("Location: agenda-restrita.php");
    
    require_once("../model/Doacao.php");
    require_once("../model/ItensDoacao.php");

    $doacao = new Doacao();
    $itensDoacao = new ItensDoacao();

    $itensDoacao->setNomeItensDoacao($_POST['txtNomeItensDoacao']);
    $itensDoacao->setQuantidadeItensDoacao($_POST['txtQuantidadeItensDoacao']);


    
    $doacao->setIdDoacao($_POST['doacao']);
    $itensDoacao->setDoacao($doacao);



    $itensDoacao->cadastrar($itensDoacao);

    //echo("Paciente ". $paciente->getNomePaciente() ." cadastrado com sucesso");

?>