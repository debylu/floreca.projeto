<?php
    include_once './conexao.php';

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }    


    try{

    $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    var_dump($dadoscad);

    if(isset($_FILES['foto'])){
        $arquivo = ($_FILES['foto']);

        if($arquivo['error']){
            echo 'Erro ao carregar arquivo';
            header ("Location: funcionario.php");
        }

        $pasta = "fotos/";
        $nomearquivo = $arquivo['name'];
        $novonome = uniqid();
        $extensao = strtolower(pathinfo($nomearquivo, PATHINFO_EXTENSION));

        IF($extensao!="jpg" && $extensao!="png"){
            die("Tipo não aceito");
        }
        else{
            $salvaimg = move_uploaded_file($arquivo['tmp_name'], $pasta . $novonome . "." . $extensao);
            if($salvaimg){
                $path = $pasta . $novonome . "." . $extensao;
                echo "ok";
            }
        }
    }

    if (!empty($dadoscad['btncad'])) {

        $vazio = false;

        $dadoscad = array_map('trim', $dadoscad);
        if (in_array("", $dadoscad)) {
            $vazio = true;

            echo "<script>
            alert('Preencher todos os campos!');
            parent.location = './funcionario.php';
            </script>";
            

        } else if(!filter_var($dadoscad['email'], FILTER_VALIDATE_EMAIL)) {
            $vazio = true;

            echo "<script>
            alert('Informe um e-mail válido!!');
            parent.location = './funcionario.php';
            </script>";
            
        }

        if(!$vazio) {

        // $senha = password_hash($dadoscad['senha'], PASSWORD_DEFAULT);
          

       $sql =" INSERT into funcionario(nome,telefone,cpffuncionario,rg,cep,numerocasa,foto,email)
               values(:nome,:telefone,:cpffuncionario,:rg,:cep,:numerocasa,:foto,:email)";

      $salvar= $conn->prepare($sql);
      $salvar->bindParam(':nome', $dadoscad['nome'], PDO::PARAM_STR);
      $salvar->bindParam(':telefone', $dadoscad['telefone'], PDO::PARAM_STR);
      $salvar->bindParam(':cpffuncionario', $dadoscad['cpf'], PDO::PARAM_STR);
      $salvar->bindParam(':rg', $dadoscad['rg'], PDO::PARAM_STR);
      $salvar->bindParam(':cep', $dadoscad['cep'], PDO::PARAM_STR);
      $salvar->bindParam(':numerocasa', $dadoscad['numero'], PDO::PARAM_INT);
      $salvar->bindParam(':foto', $path, PDO::PARAM_STR);
      $salvar->bindParam(':email', $dadoscad['email'], PDO::PARAM_STR);
      $salvar->execute(); 

      if ($salvar->rowCount()) {

        echo "<script>
        alert('Funcionário cadastrado com sucesso!');
        parent.location = './funcionario.php';
        </script>";
        
        unset($dadoscad);
     } else {
    
        echo "<script>
       alert('Funcionário não cadastrado!');
       parent.location = './funcionario.php';
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
            parent.location = 'funcionario.php';
            </script>";
            
        }

        $sql ="UPDATE funcionario 
               set nome=:nome,telefone=:telefone,cpffuncionario=:cpffuncionario,
                   rg=:rg,cep=:cep,numerocasa=:numerocasa,foto=:foto,email=:email 
               WHERE idfuncionario=:idfuncionario";

        $salvar= $conn->prepare($sql);
        $salvar->bindParam(':nome', $dadoscad['nome'], PDO::PARAM_STR);
        $salvar->bindParam(':telefone', $dadoscad['telefone'], PDO::PARAM_STR);
        $salvar->bindParam(':cpffuncionario', $dadoscad['cpf'], PDO::PARAM_STR);
        $salvar->bindParam(':rg', $dadoscad['rg'], PDO::PARAM_STR);
        $salvar->bindParam(':cep', $dadoscad['cep'], PDO::PARAM_STR);
        $salvar->bindParam(':numerocasa', $dadoscad['numero'], PDO::PARAM_INT);
        $salvar->bindParam(':foto', $path, PDO::PARAM_STR);
        $salvar->bindParam(':email', $dadoscad['email'], PDO::PARAM_STR);
        $salvar->bindParam(':idfuncionario',$dadoscad['idfuncionario'], PDO::PARAM_INT);
        $salvar->execute(); 

        if ($salvar->rowCount()) {

        echo "<script>
        alert('Os dados foram atualizados!');
        parent.location = './funcionario.php';
        </script>";
        
        unset($dadoscad);
     } else {
    
        echo "<script>
       alert('Os dados não foram atualizados!');
       parent.location = './funcionario.php';
       </script>";
        
    }

}

}
catch(PDOException $erro){
    echo $erro;
}
?>