<?php
    include_once './conexao.php';

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }    

    try{

    $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    var_dump($dadoscad);

    if (!empty($dadoscad['btncad'])) {

        $vazio = false;

        $dadoscad = array_map('trim', $dadoscad);
        if (in_array("", $dadoscad)) {
            $vazio = true;

            echo "<script>
            alert('Preencher todos os campos!');
            parent.location = 'formulario.php';
            </script>";
            

        } else if(!filter_var($dadoscad['email'], FILTER_VALIDATE_EMAIL)) {
            $vazio = true;

            echo "<script>
            alert('Informe um e-mail válido!!');
            parent.location = 'formulario.php';
            </script>";
            
        }

        if(!$vazio) {

       $sql ="INSERT into cliente(nome,datanascimento,telefone,cpf,rg,cep,numerocasa,email)
              values(:nome,:datanascimento,:telefone,:cpf,:rg,:cep,:numerocasa,:email)";

      $salvar= $conn->prepare($sql);
      $salvar->bindParam(':nome', $dadoscad['nome'], PDO::PARAM_STR);
      $salvar->bindParam(':datanascimento', $dadoscad['dn'], PDO::PARAM_STR);
      $salvar->bindParam(':telefone', $dadoscad['telefone'], PDO::PARAM_STR);
      $salvar->bindParam(':cpf', $dadoscad['cpf'], PDO::PARAM_STR);
      $salvar->bindParam(':rg', $dadoscad['rg'], PDO::PARAM_STR);
      $salvar->bindParam(':cep', $dadoscad['cep'], PDO::PARAM_STR);
      $salvar->bindParam(':numerocasa', $dadoscad['numero'], PDO::PARAM_INT);
      $salvar->bindParam(':email', $dadoscad['email'], PDO::PARAM_STR);
      $salvar->execute(); 

      if ($salvar->rowCount()) {

        echo "<script>
        alert('Cliente cadastrado com sucesso!');
        parent.location = 'formulario.php';
        </script>";
        
        unset($dadoscad);
     } else {
    
        echo "<script>
       alert('Cliente não cadastrado!');
       parent.location = 'formulario.php';
       </script>";
        
      }

     }

    }

    if (!empty($dadoscad['btneditar'])) {
        $dadoscad = array_map('trim', $dadoscad);

        if(!filter_var($dadoscad['email'], FILTER_VALIDATE_EMAIL)) {
            $vazio = true;

            echo "<script>
            alert('Informe um e-mail válido!!');
            parent.location = 'formulario.php';
            </script>";
            
        }

        $sql ="UPDATE cliente
               set nome=:nome,datanascimento=:datanascimento,telefone=:telefone,cpf=:cpf,
                   rg=:rg,cep=:cep,numerocasa=:numerocasa,email=:email 
               WHERE idcliente=:idcliente";

        $salvar= $conn->prepare($sql);
        $salvar->bindParam(':nome', $dadoscad['nome'], PDO::PARAM_STR);
        $salvar->bindParam(':datanascimento', $dadoscad['dn'], PDO::PARAM_STR);
        $salvar->bindParam(':telefone', $dadoscad['telefone'], PDO::PARAM_STR);
        $salvar->bindParam(':cpf', $dadoscad['cpf'], PDO::PARAM_STR);
        $salvar->bindParam(':rg', $dadoscad['rg'], PDO::PARAM_STR);
        $salvar->bindParam(':cep', $dadoscad['cep'], PDO::PARAM_STR);
        $salvar->bindParam(':numerocasa', $dadoscad['numero'], PDO::PARAM_INT);
        $salvar->bindParam(':email', $dadoscad['email'], PDO::PARAM_STR);
        $salvar->bindParam(':idcliente',$dadoscad['idcliente'], PDO::PARAM_INT);
        $salvar->execute(); 

        if ($salvar->rowCount()) {

        echo "<script>
        alert('Os dados foram atualizados!');
        parent.location = 'formulario.php';
        </script>";
        
        unset($dadoscad);
     } else {
    
        echo "<script>
       alert('Os dados não foram atualizados!');
       parent.location = 'formulario.php';
       </script>";
        
    }

}

}
catch(PDOException $erro){
    echo $erro;
}
?>