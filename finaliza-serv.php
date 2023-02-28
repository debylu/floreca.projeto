<?php

    require_once './conexao.php';
    session_start();
    ob_start();

    
    if(isset($_POST["excluir"])) {

        $idprocedimento = $_POST["excluir"];

        $sqlexcluir = "DELETE from servico_temp
                       where idprocedimento = $idprocedimento";
        $resulexcluir=$conn->prepare($sqlexcluir);
        $resulexcluir->execute();
        $_SESSION["quant"]-=1;
        

    }
    
        
        else{
            
            // acessar pagamento;
            $data = date('y-m-d');
            $valor = $_SESSION['totalservice']; 
            $idcliente = $_SESSION['idcliente'];

            
            $sqlvenda = "INSERT into servico(data,valor,idcliente) values (:data,:valor,:idcliente)";
            $salvarvenda= $conn->prepare($sqlvenda);
            $salvarvenda->bindParam(':data', $data, PDO::PARAM_STR);           
            $salvarvenda->bindParam(':valor', $valor, PDO::PARAM_STR);
            $salvarvenda->bindParam(':idcliente', $idcliente, PDO::PARAM_STR);
            $salvarvenda->execute();

            $venda = "Select LAST_INSERT_ID()";
            $resulvenda=$conn->prepare($venda);
            $resulvenda->execute();

            $linhavenda = $resulvenda->fetch(PDO::FETCH_ASSOC);
            $idservico = ($linhavenda["LAST_INSERT_ID()"]);

            $busca = "SELECT * from servico_temp";
            $resulbusca=$conn->prepare($busca);
            $resulbusca->execute();

            if(($resulbusca) && ($resulbusca->rowCount()!=0)){
                while ($linha = $resulbusca->fetch(PDO::FETCH_ASSOC)) {
                    extract($linha);
                    var_dump($linha);

                   $sqlitem = "INSERT into itemservico(idservico,idprocedimento,idfuncionario,categoria,horario,valor) values (:idservico,:idprocedimento,:idfuncionario,:categoria,:horario,:valor)";
                    $salvaritem= $conn->prepare($sqlitem);
                    $salvaritem->bindParam(':idservico', $idservico, PDO::PARAM_INT);
                    $salvaritem->bindParam(':idprocedimento', $idprocedimento, PDO::PARAM_INT);
                    $salvaritem->bindParam(':idfuncionario', $idfuncionario, PDO::PARAM_INT);
                    $salvaritem->bindParam(':categoria', $categoria, PDO::PARAM_STR);
                    $salvaritem->bindParam(':horario', $horario, PDO::PARAM_STR);
                    $salvaritem->bindParam(':valor', $valor, PDO::PARAM_STR);
                    $salvaritem->execute();

                }
            }

           $sqllimpa = "DELETE from servico_temp";
          $limpa= $conn->prepare($sqllimpa);
            $limpa->execute();
           $_SESSION["quant"] = 0;
           header("Location:./menuadmin.php");
        }

        
    

    ?>