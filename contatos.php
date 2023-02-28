<?php
    include_once './conexao.php';
   
    $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    var_dump($dadoscad);
    
    if (!empty($dadoscad['btnsoli'])) {

        $vazio = false;

        $dadoscad = array_map('trim', $dadoscad);
        if (in_array("", $dadoscad)) {
            $vazio = true;
           
            echo "<script>
        alert('Preencher todos os campos!!!');
        parent.location = './index.php';
        </script>";

        } else if(!filter_var($dadoscad['email'], FILTER_VALIDATE_EMAIL)) {
            $vazio = true;

            echo "<script>
            alert('Informe um e-mail válido!!');
            parent.location = './index.php';
            </script>";
        }
    

    if (!$vazio) 


    $status="sended";

    $sql = "INSERT into contacts(nome,telefone,email,message,status)
    values(:nome,:telefone,:email,:message,:status)";

    $salvar= $conn->prepare($sql);
    $salvar->bindParam(':nome', $dadoscad['nome'], PDO::PARAM_STR);
    $salvar->bindParam(':telefone', $dadoscad['telefone'], PDO::PARAM_STR);
    $salvar->bindParam(':email', $dadoscad['email'], PDO::PARAM_STR);
    $salvar->bindParam(':message', $dadoscad['message'], PDO::PARAM_STR);
    $salvar->bindParam(':status', $status, PDO::PARAM_STR);
    $salvar->execute();

    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Mensagem enviada com sucesso!');
        parent.location = './index.php';
        </script>";

        unset($dadoscad);
    } else {
        echo "<script>
        alert('Mensagem não enviada!');
        parent.location = './index.php';
        </script>";
        
    }

}