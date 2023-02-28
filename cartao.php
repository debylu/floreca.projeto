<?php

    require_once './conexao.php';

    session_start();
    ob_start();

    $_SESSION["quant"]+=1;

    echo $_SESSION["quant"];   

    $cesta = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    var_dump($cesta);

     $idprocedimento = $cesta["procedimento"];
     $idcliente = $cesta["cliente"];
     $idfuncionario = $cesta["funcionario"];
     $data = $cesta["date"];
     $horario = $cesta["hora"];
     $categoria = $cesta["categoria"];



     $sqlcli = "SELECT nome FROM cliente WHERE idcliente = $idcliente LIMIT 1";       
     $resultadocli= $conn->prepare($sqlcli);
     $resultadocli->execute();
     if(($resultadocli)and($resultadocli->RowCount()!=0)){
         $linhacli=$resultadocli->fetch(PDO::FETCH_ASSOC);
         extract($linhacli);
         $nomecli = $nome;
         $_SESSION["idcliente"]=$idcliente;
       }

    $sqlfunc = "SELECT nome
    FROM funcionario
    WHERE idfuncionario = $idfuncionario LIMIT 1";   //procedimento

    $resultadofunc= $conn->prepare($sqlfunc);
    $resultadofunc->execute();

    if(($resultadofunc)and($resultadofunc->RowCount()!=0)){
        $linhafunc=$resultadofunc->fetch(PDO::FETCH_ASSOC);
        extract($linhafunc);
        $nomefunc = $nome;

    }

    
            $sql = "SELECT idprocedimento, nomeprocedimento, descricao, valor
            FROM procedimento
            WHERE idprocedimento = $idprocedimento LIMIT 1";
        
            $resultado= $conn->prepare($sql);
            $resultado->execute();
        
            if(($resultado)and($resultado->RowCount()!=0)){
                $linha=$resultado->fetch(PDO::FETCH_ASSOC);
                extract($linha);
                
        
    
       
            $sql2 = "INSERT into servico_temp(idcliente,nomecli,idfuncionario,nomefunc,idprocedimento,nomeproced,data,horario,valor,categoria) 
                     values (:idcliente,:nomecli,:idfuncionario,:nomefunc,:idprocedimento,:nomeproced,:data,:horario,:valor,:categoria)"; //servico temporario
            $salvar2= $conn->prepare($sql2);
            $salvar2->bindParam(':idcliente', $idcliente, PDO::PARAM_STR);
            $salvar2->bindParam(':nomecli', $nomecli, PDO::PARAM_STR);
            $salvar2->bindParam(':idfuncionario', $idfuncionario, PDO::PARAM_STR);
            $salvar2->bindParam(':nomefunc', $nomefunc, PDO::PARAM_STR);
            $salvar2->bindParam(':idprocedimento', $idprocedimento, PDO::PARAM_STR);
            $salvar2->bindParam(':nomeproced', $nomeprocedimento, PDO::PARAM_STR);
            $salvar2->bindParam(':data', $data, PDO::PARAM_STR);
            $salvar2->bindParam(':horario', $horario, PDO::PARAM_STR);
            $salvar2->bindParam(':valor', $valor, PDO::PARAM_STR);
            $salvar2->bindParam(':categoria', $categoria, PDO::PARAM_STR);
            $salvar2->execute();


        }

        $pag = $_SERVER['HTTP_REFERER'] ;
        header("Location:$pag");




?>