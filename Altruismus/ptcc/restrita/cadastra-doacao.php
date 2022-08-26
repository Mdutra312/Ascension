<?php
    header("Location: form-user-doacao.php");
    
    require_once("../model/Doacao.php");
    require_once("../model/Ong.php");

    $doacao = new Doacao();
    $ong = new Ong();

    $doacao->setDataDoacao($_POST['txtDataDoacao']);
    $doacao->setDescDoacao($_POST['txtDescDoacao']);


    
    $ong->setIdOng($_POST['ong']);
    $doacao->setOng($ong);



    $ong->cadastrar($ong);

    //echo("Paciente ". $paciente->getNomePaciente() ." cadastrado com sucesso");

?>