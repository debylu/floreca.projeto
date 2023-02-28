<?php
    require_once './conexao.php';

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }    

    $dadossoli = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    var_dump($dadossoli);

    if (!empty($dadossoli['btnsoli'])) {
        $vazio = false;

        $dadossoli = array_map('trim', $dadossoli);
        if (in_array("", $dadossoli)) {
            $vazio = true;

            echo "<script>
            alert('Preencher todos os campos!');
            parent.location = 'index.php';
            </script>";

        } else if(!filter_var($dadossoli['email'], FILTER_VALIDATE_EMAIL)) {
            $vazio = true;

            echo "<script>
            alert('Informe um e-mail válido!!');
            parent.location = 'index.php';
            </script>";
            
        }

        if(!$vazio) {

        $sql ="INSERT into contatcs(nome,telefone,email,message)
              values(:nome,:telefone,:email,:message)";

        $salvar= $conn->prepare($sql);
        $salvar->bindParam(':nome', $dadossoli['nome'], PDO::PARAM_STR);
        $salvar->bindParam(':telefone', $dadossoli['telefone'], PDO::PARAM_STR);
        $salvar->bindParam(':email', $dadossoli['email'], PDO::PARAM_STR);
        $salvar->bindParam(':message', $dadossoli['message'], PDO::PARAM_STR);
        $salvar->execute(); 

        if ($salvar->rowCount()) {

            echo "<script>
            alert('Solicitação enviada com sucesso!');
            parent.location = 'index.php';
            </script>";
            
            unset($dadossoli);
        } else {
        
            echo "<script>
           alert('Solicitação não enviada, tente novamente!');
           parent.location = 'index.php';
           </script>";
            
        }
    
    }
    
}
?>

    