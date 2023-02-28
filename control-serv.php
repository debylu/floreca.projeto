<?php
    include_once './conexao.php';
    
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }  

   try{    
            
    $dadosserv = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dadosserv['btncad'])) {

        $vazio = false;

        $dadosserv = array_map('trim', $dadosserv);
        if (in_array("", $dadosserv)) {
            $vazio = true;
           
            echo "<script>
        alert('Preencher todos os campos!!!');
        parent.location = 'form-servico.php';
        </script>";

        }     

    if (!$vazio) {

            $sql = "INSERT INTO servico(idservico,idfuncionario,idcliente,valor)
        VALUES(:idservico,:idfuncionario,:idcliente,:valor)";

        $salvar= $conn->prepare($sql);
        // $salvar->bindParam(':iditem', $dadosserv['iditem'], PDO::PARAM_STR);
        $salvar->bindParam(':idservico', $dadosserv['idservico'], PDO::PARAM_STR);
        $salvar->bindParam(':idfuncionario', $dadosserv['idfuncionario'], PDO::PARAM_STR);
        $salvar->bindParam(':idcliente', $dadosserv['idcliente'], PDO::PARAM_STR);
        // $salvar->bindParam(':data', $dadosserv['data'], PDO::PARAM_STR);  
        // $salvar->bindParam(':horario', $dadosserv['horario'], PDO::PARAM_STR); 
        $salvar->bindParam(':valor', $dadosserv['valor'], PDO::PARAM_STR);
        $salvar->execute();

    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Procedimento cadastrado com sucesso!');
        parent.location = 'form-servico.php';
        </script>";

        unset($dadosserv);
    } else {
        echo "<script>
        alert('Procedimento não cadastrado!');
        parent.location = 'form-servico.php';
        </script>";
        
    }

    }

  }

if (!empty($dadosserv['btneditar'])) {

    var_dump($dadosserv);

    $dadosserv = array_map('trim', $dadosserv);

    $sql = "UPDATE procedimento set nome=:nome,descricao=:descricao,valor=:valor,
    idcategoria=:idcategoria,
--    WHERE codigoproduto =:codigoproduto";

    $salvar= $conn->prepare($sql);
    $salvar->bindParam(':nomeprocedimento', $dadosserv['nomeprocedimento'], PDO::PARAM_STR);
    $salvar->bindParam(':descricao', $dadosserv['descricao'], PDO::PARAM_STR);
    $salvar->bindParam(':valor', $dadosserv['valor'], PDO::PARAM_STR);
    $salvar->bindParam(':idcategoria', $dadosserv['categoria'], PDO::PARAM_STR);   
    // $salvar->bindParam(':codigoproduto', $dadosprod['codigo'], PDO::PARAM_INT);
    $salvar->execute();

    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Dados Atualizadoscom sucesso!!');
        parent.location = 'relatorio-serv.php';
        </script>";

        unset($dadoscad);
    } else {
        echo "<script>
        alert('Procedimento não cadastrado!');
        parent.location = 'relatorio-serv.php';
        </script>";
        
    }

  }

}
catch(PDOException $erro){
    echo $erro;

}

?>