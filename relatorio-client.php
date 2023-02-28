<?php

    require_once './head.php';
    require_once './menuadmin.php';
    include_once './conexao.php';

    $pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
	$pag = (!empty($pagatual)) ? $pagatual : 1;

    $limitereg = 4;

    $inicio = ($limitereg * $pag) - $limitereg;


    $busca= "SELECT idcliente, cpf, nome, telefone, email 
              from cliente
              LIMIT $inicio , $limitereg";

    $resultado = $conn->prepare($busca);
    $resultado->execute();

    if (($resultado) AND ($resultado->rowCount() != 0)){
     echo "<h1>Relatório de Clientes</h1>";
?>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">Cliente</th>
                <th scope="col">CPF</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
                <th scope="col">Operação</th>
            </tr>
        </thead>
    <tbody>

    <?php
    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {    
    extract($linha);
    ?>

        <tr>
          <td scope="row"><?php echo $idcliente ?></td>
          <td><?php echo $cpf ?></td>
          <td><?php echo $nome ?></td>
          <td><?php echo $telefone ?></td>
          <td><?php echo $email ?></td>
          <td>
            <?php echo "<a href='editar-client.php?idcliente=$idcliente'>" ; ?>
            <input type="submit" class="btn btn-danger" name="editar" value="Editar">
          </td>
        </tr>

<?php
        }
?>

 </tbody>
</table>

<?php

}else{
    echo "Não tem registros";
}

  $qtregistro = "SELECT COUNT(idcliente) AS registros FROM cliente"; 
//   WHERE status = 'C' 
  $resultado = $conn->prepare($qtregistro);
  $resultado->execute();
  $resposta = $resultado->fetch(PDO::FETCH_ASSOC);

  $qnt_pagina = ceil($resposta['registros'] / $limitereg);
 
   $maximo = 2;

   echo "<a href='relatorio-client.php?page=1'>Primeira</a> ";
 
 for ($anterior = $pag - $maximo; $anterior <= $pag - 1; $anterior++  ) {
     if ($anterior >= 1) {
         echo "  <a href='relatorio-client.php?page=$anterior'>$anterior</a> ";
     }
 }

 echo "$pag";

 for ($proxima = $pag +  1; $proxima <= $pag +  $maximo; $proxima++ ) {
     if ($proxima <= $qnt_pagina) {
         echo "<a href='relatorio-client.php?page=$proxima'>$proxima</a> ";
     }
 }

 echo "<a href='relatorio-client.php?page=$qnt_pagina'>Última</a> ";

?>
