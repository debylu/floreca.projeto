<?php
    require_once './head.php';
    require './menuadmin.php';
    include_once './conexao.php';
    // session_start();
    // ob_start();

    $totalservice = 0;
    $sql = "SELECT * from servico_temp";
    $resultado= $conn->prepare($sql);
    $resultado->execute();

    if(($resultado)and($resultado->RowCount()!=0)){

?>

    <form action="./finaliza-serv.php" method="post">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col">Funcionário</th>
                    <th scope="col">Procedimento</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Data</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Operação</th>
                  
                </tr>
            </thead>
        <tbody>

<?php
    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
       
        extract($linha);             
    
?>        
        <tr>
          <!-- <td ></td> -->
          <td scope="row"><?php echo $nomecli ?></td>
          <td><?php echo $nomefunc ?></td>
          <td><?php echo $nomeproced ?></td>
          <td><?php echo $categoria ?></td>
          <td><?php echo $data ?></td>
          <td><?php echo $horario ?></td>
          <td><?php echo $valor;
          
          $totalservice += $valor?></td>
          <td>
          
           
            <a href="./finaliza-serv.php"><button type="submit" class="btn btn-danger" name="excluir" value="<?php echo $idprocedimento;?>">Cancelar</button></a>
            </td>
        </tr>        
         

<?php   
    } 
?>

    <tr><td><?php echo "Total do serviço - R$".$totalservice; ?></td></tr>

        </tbody>
    </table>

    <?php $_SESSION["totalservice"]=$totalservice;
    $_SESSION["idcliente"]=$idcliente; ?>

     <input type="submit" class="btn btn-sucess" name="finalizar" value="Finalizar serviço">
 </form>

<?php
    }
    require_once './footer-admin.php';
?>
