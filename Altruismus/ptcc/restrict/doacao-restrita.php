<?php
require_once("../model/Doacao.php");
require_once("../model/Ong.php");

try{
    $doacao = new Doacao();
    $ong = new Ong();

    $listadoacao = $doacao->listar();
    $listaong = $ong->listar();
} catch(Exception $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/doador-restrita.css">
    <title>Document</title>
</head>
<body>
<div id="container">
    <table>
      <caption>Lista de Doações</caption>
      <thead>
        <tr>
          <th>ID</th>
          <th>Data</th>
          <th>Descrição</th>
          <th>ONG</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listadoacao as $listar) { ?>
          <tr>
            <td><?php echo $listar['iddoacao'] ?></td>
            <td><?php echo $listar['datanascdoacao'] ?></td>
            <td><?php echo $listar['descdoacao'] ?></td>
            <td><?php echo $listar['nomeong'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
</div>
</body>
</html>