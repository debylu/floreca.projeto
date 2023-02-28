<?php
    include_once './conexao.php';
    

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }  

   try{    
            
    $dadosproced = filter_input_array(INPUT_POST, FILTER_DEFAULT);

   // var_dump($dadosprod);


    // if(isset($_FILES['foto'])){
    //     $arquivo = ($_FILES['foto']);


    //     if($arquivo['error']){
    //         echo 'Erro ao carregar arquivo';
    //         header ("Location: frmproduto.php");
    //     }

    //     $pasta = "produtos/";
    //     $nomearquivo = $arquivo['name'];
    //     $novonome = uniqid();
    //     $extensao = strtolower(pathinfo($nomearquivo, PATHINFO_EXTENSION));

    //     if($extensao!="jpg" && $extensao!="png"){
    //         die("Tipo não aceito");
    //     }       

    //     $salvaimg = move_uploaded_file($arquivo['tmp_name'], $pasta . $novonome . "." . $extensao);

    //     if($salvaimg){
    //         $path = $pasta . $novonome . "." . $extensao;
    //         echo "ok";
    //     }


    //  }

    
    if (!empty($dadosproced['btncad'])) {

        $vazio = false;

        $dadosproced = array_map('trim', $dadosproced);
        if (in_array("", $dadosproced)) {
            $vazio = true;
           
            echo "<script>
        alert('Preencher todos os campos!!!');
        parent.location = 'fmr-proced.php';
        </script>";

        }     

    if (!$vazio) {

            $sql = "INSERT INTO procedimento(nomeprocedimento,descricao,valor)
        VALUES(:nomeprocedimento,:descricao,:valor)";

    $salvar= $conn->prepare($sql);
    $salvar->bindParam(':nomeprocedimento', $dadosproced['nomeprocedimento'], PDO::PARAM_STR);
    $salvar->bindParam(':descricao', $dadosproced['descricao'], PDO::PARAM_STR);
    $salvar->bindParam(':valor', $dadosproced['valor'], PDO::PARAM_STR);  
    $salvar->execute();

    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Procedimento cadastrado com sucesso!!');
        parent.location = './fmr-proced.php';
        </script>";

        unset($dadoscad);
    } else {
        echo "<script>
        alert('Procedimento não cadastrado!');
        parent.location = './fmr-proced.php';
        </script>";
        
    }

    }

  }


if (!empty($dadosproced['btneditar'])) {


    var_dump($dadosproced);

    $dadosproced = array_map('trim', $dadosproced);

    $sql = "UPDATE procedimento set nomeprocedimento=:nomeprocedimento,descricao=:descricao,valor=:valor
   WHERE idprocedimento=:idprocedimento";

    $salvar= $conn->prepare($sql);
    $salvar->bindParam(':nomeprocedimento', $dadosproced['nomeprocedimento'], PDO::PARAM_STR);
    $salvar->bindParam(':descricao', $dadosproced['descricao'], PDO::PARAM_STR);
    $salvar->bindParam(':valor', $dadosproced['valor'], PDO::PARAM_STR);
    $salvar->bindParam(':idprocedimento', $dadosproced['idprocedimento'], PDO::PARAM_INT);


$salvar->execute();

    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Procedimento atualizados com sucesso!!');
        parent.location = './fmr-proced.php';
        </script>";

        unset($dadoscad);
    } else {
        echo "<script>
        alert('Procedimento não atualizado!');
        parent.location = './fmr-proced.php';
        </script>";
        
    }

}

}
catch(PDOException $erro){
    echo $erro;

}

?>