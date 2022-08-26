<?php
    header("Location: agenda-restrita.php");
    
    require_once("../model/Doador.php");
    require_once("../model/TelefoneDoador.php");

    $doador = new Doador();
    $telefoneDoador = new TelefoneDoador();

    $telefoneDoador->setTelefoneDoador($_POST['txtTelefoneDoador']);
    
    $doador->setIdDoador($_POST['doador']);
    $telefoneDoador->setDoador($doador);



    $telefoneDoador->cadastrar($telefoneDoador);

    //echo("Paciente ". $paciente->getNomePaciente() ." cadastrado com sucesso");

?>