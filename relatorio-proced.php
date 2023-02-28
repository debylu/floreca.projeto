<?php

    require_once './head.php';
    require_once './menuadmin.php';
    include_once './conexao.php';
    // session_start();
    // ob_start();
    
    

    if(isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }    

    $pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
	$pag = (!empty($pagatual)) ? $pagatual : 1;

    $limitereg = 4;

    $inicio = ($limitereg * $pag) - $limitereg;

    $busca= "SELECT p.idprocedimento, p.nomeprocedimento, p.valor, p.descricao
             from procedimento p
             LIMIT $inicio , $limitereg";

    $resultado = $conn->prepare($busca);
    $resultado->execute();

    if (($resultado) AND ($resultado->rowCount() != 0)) {
     echo "<h1>Relatório de Procedimento</h1>";
?>

<table class="table table-bordered table-dark">
     <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Descrição</th>
            <th scope="col">Operação</th>
        </tr>
    </thead>
  <tbody>


<?php
 while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {    
 extract($linha);
?>

        <tr>
          <td scope="row"><?php echo $nomeprocedimento ?></td>
          <td><?php echo $valor ?></td>
          <td><?php echo $descricao ?></td>
          <td>
            <?php echo "<a href='editar-proced.php?codigo=$idprocedimento'>"; ?>
            <input type="submit" class="btn btn-primary" name="editar" value="Editar">
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

  $qtregistro = "SELECT COUNT(idprocedimento) 
                 AS registros 
                 FROM procedimento";
  $resultado = $conn->prepare($qtregistro);
  $resultado->execute();
  $resposta = $resultado->fetch(PDO::FETCH_ASSOC);

  $qnt_pagina = ceil($resposta['registros'] / $limitereg);
 
   $maximo = 2;

   echo "<a href='./relatorio-proced.php?page=1'>Primeira</a> ";
 
 for ($anterior = $pag - $maximo; $anterior <= $pag - 1; $anterior++  ) {
     if ($anterior >= 1) {
         echo "  <a href='./relatorio-proced.php?page=$anterior'>$anterior</a> ";
     }
 }

 echo "$pag";

 for ($proxima = $pag +  1; $proxima <= $pag +  $maximo; $proxima++ ) {
     if ($proxima <= $qnt_pagina) {
         echo "<a href='./relatorio-proced.php?page=$proxima'>$proxima</a> ";
     }
 }

 echo "<a href='./relatorio-proced.php?page=$qnt_pagina'>Última</a> ";

?>