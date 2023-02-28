<?php

    require_once './head.php';
    require_once './menuadmin.php';
    include_once './conexao.php';

    $pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
	$pag = (!empty($pagatual)) ? $pagatual : 1;

    $limitereg = 3;

    $inicio = ($limitereg * $pag) - $limitereg;


    $busca= "SELECT idfuncionario, cpffuncionario, nome, telefone, email 
              from funcionario
              LIMIT $inicio , $limitereg";

    $resultado = $conn->prepare($busca);
    $resultado->execute();

    if (($resultado) AND ($resultado->rowCount() != 0)){
     echo "<h1>Relatório de Funcionários</h1>";
?>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">Funcionário</th>
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
          <td scope="row"><?php echo $idfuncionario ?></td>
          <td><?php echo $cpffuncionario ?></td>
          <td><?php echo $nome ?></td>
          <td><?php echo $telefone ?></td>
          <td><?php echo $email ?></td>
          <td>
            <?php echo "<a href='editar-func.php?idfuncionario=$idfuncionario'>" ; ?>
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

    $qtregistro = "SELECT COUNT(idfuncionario) AS registros FROM funcionario" ;
    $resultado = $conn->prepare($qtregistro);
    $resultado->execute();
    $resposta = $resultado->fetch(PDO::FETCH_ASSOC);

    $qnt_pagina = ceil($resposta['registros'] / $limitereg);
    
    $maximo = 2;

    echo "<a href='relatorio-func.php?page=1'>Primeira</a> ";
    
    for ($anterior = $pag - $maximo; $anterior <= $pag - 1; $anterior++  ) {
        if ($anterior >= 1) {
            echo "  <a href='relatorio-func.php?page=$anterior'>$anterior</a> ";
        }
    }

    echo "$pag";

    for ($proxima = $pag +  1; $proxima <= $pag +  $maximo; $proxima++ ) {
        if ($proxima <= $qnt_pagina) {
            echo "<a href='relatorio-func.php?page=$proxima'>$proxima</a> ";
        }
    }

    echo "<a href='relatorio-func.php?page=$qnt_pagina'>Última</a> ";

?>
