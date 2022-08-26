<?php
    header("");
    
    require_once("../model/Ong.php");
    require_once("../model/PrestacaoContasOng.php");

    $ong = new Ong();
    $prestacaoContasOng = new PrestacaoContasOng();

    $quantidadeItensRecebido->setQuantidadeItensRecebido($_POST['txtQuantidadeItensRecebido']);
    $descProdutosRecebidos->setDescProdutosRecebidos($_POST['txtDescProdutosRecebidos']);
    $dataRecebimento->setDataRecebimento($_POST['txtDataRecebimento']);
    $fotoOng->setFotoOng($_POST['txtFotoOng']);
    $fotoDoador->setFotoDoador($_POST['txtFotoDoador']);
    

    $ong->setIdOng($_POST['ong']);
    $prestacaoContasOng->setOng($ong);

    $prestacaoContasOng->cadastrar($prestacaoContasOng);

    //echo("Paciente ". $paciente->getNomePaciente() ." cadastrado com sucesso");

?>