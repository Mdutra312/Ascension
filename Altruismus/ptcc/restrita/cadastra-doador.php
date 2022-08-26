<?php

header("Location: ../restrict/doador-restrita.php");

require_once("../model/Doador.php");

    $cidadeDoador = $_POST['txtCidadeDoador'];
    $bairroDoador = $_POST['txtBairroDoador'];
    $complementoDoador = $_POST['txtComplementoDoador'];
    $estadoDoador = $_POST['txtEstadoDoador'];
    $ruaDoador = $_POST['txtRuaDoador'];
    $cepDoador = $_POST['txtCepDoador'];
    $nomeDoador = $_POST['txtNomeDoador'];
    $lugradouroDoador = $_POST['txtLugradouroDoador'];
    $dataNascDoador = $_POST['txtDataNascDoador'];
    $emailDoador = $_POST['txtEmailDoador'];
    $senhaDoador = $_POST['txtSenhaDoador'];

    $doador = new Doador();

    $doador->setCidadeDoador($cidadeDoador);
    $doador->setBairroDoador($bairroDoador);
    $doador->setComplementoDoador($complementoDoador);
    $doador->setEstadoDoador($estadoDoador);
    $doador->setRuaDoador($ruaDoador);
    $doador->setCepDoador($cepDoador);
    $doador->setNomeDoador($nomeDoador);
    $doador->setLugradouroDoador($lugradouroDoador);
    $doador->setDataNascDoador($dataNascDoador);
    $doador->setEmailDoador($emailDoador);
    $doador->setSenhaDoador($senhaDoador);
    

    $doador->cadastrar($doador);

    //echo("deu certo");

    //echo("Paciente ". $paciente->getNomePaciente() ." cadastrado com sucesso");





?>