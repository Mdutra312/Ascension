<?php
    header("Location: form-user-ongtelefone.php");
    
    require_once("../model/Ong.php");
    require_once("../model/TelefoneOng.php");

    $ong = new Ong();
    $telefoneOng = new TelefoneOng();

    $telefoneOng->setTelefoneOng($_POST['txtTelefoneOng']);
    
    $ong->setIdOng($_POST['ong']);
    $telefoneOng->setOng($ong);



    $telefoneOng->cadastrar($telefoneOng);

    //echo("Paciente ". $paciente->getNomePaciente() ." cadastrado com sucesso");

?>