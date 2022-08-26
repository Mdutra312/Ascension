<?php
 
header("Location: ../restrict/ong-restrita.php");


require_once("../model/Ong.php");

    $cepOng = $_POST['txtCepOng'];
    $cidadeOng = $_POST['txtCidadeOng'];
    $bairroOng = $_POST['txtBairroOng'];
    $complementoOng = $_POST['txtComplementoOng'];
    $estadoOng = $_POST['txtEstadoOng'];
    $ruaOng = $_POST['txtRuaOng'];
    $nomeOng = $_POST['txtNomeOng'];
    $emailOng = $_POST['txtEmailOng'];
    $senhaOng = $_POST['txtSenhaOng'];
    $dataNascOng = $_POST['txtDataNascOng'];
    $lugradouro = $_POST['txtLugradouroOng'];
    

    $ong = new Ong();

    $ong->setCepOng($cepOng);
    $ong->setCidadeOng($cidadeOng);
    $ong->setBairroOng($bairroOng);
    $ong->setComplementoOng($complementoOng);
    $ong->setEstadoOng($estadoOng);
    $ong->setRuaOng($ruaOng);
    $ong->setNomeOng($nomeOng);
    $ong->setEmailOng($emailOng);
    $ong->setSenhaOng($senhaOng);
    $ong->setDataNascOng($dataNascOng);
    $ong->setLugradouroOng($lugradouro);

    $ong->cadastrar($ong);

    //echo("Paciente ". $paciente->getNomePaciente() ." cadastrado com sucesso");


    


?>