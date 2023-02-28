<?php

    require_once './head.php';
    include_once './conexao.php';
    session_start();
    ob_start();

    $cod = filter_input(INPUT_GET, "codigo", FILTER_SANITIZE_NUMBER_INT);

    if (empty($cod)) {
        $_SESSION['msg'] = "Erro: Procedimento não encontrado!";
        header("Location: ./relatorio-proced.php");
        exit();
    }

    $sql = "SELECT * from procedimento where idprocedimento = $cod LIMIT 1";
    $resultado= $conn->prepare($sql);
    $resultado->execute();

    if(($resultado) AND ($resultado->rowCount() != 0)){
        $linha = $resultado->fetch(PDO::FETCH_ASSOC);
       
        extract($linha);
    }
    else{
        $_SESSION['msg'] = "Erro: Procedimento não encontrado!";
        header("Location: ./relatorio-proced.php");
    }


?>

<form method="post" action="./control-proced.php" enctype="multipart/form-data">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Atualização de Procedimento</h1>
        </div>
       </div>
    </div>

  <form>

    <div class="container">
        <div class="row">

            <div class="col-md-1">
                <div class="form-group">
                    <label for="codigo">ID</label>
                    <input type="text" class="form-control" name="codigo"
                    value="<?php echo $idprocedimento;?>"
                    >    
                </div>
            </div>   
            <div class="col-md-5">
                <div class="form-group">
                    <label for="nomeprocedimento">Nome</label>
                    <input type="text" class="form-control" name="nomeprocedimento" value="<?php echo $nomeprocedimento;?>">    
                </div>
            </div>     
            
            <div class="col-md-3">
                <div class="form-group">
                    <label for="valor">Preço</label>
                    <input type="text" name="valor" class="form-control" onchange="this.value = this.value.replace( /,/g, '.')"  value="<?php echo $valor;?>">
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" name="descricao" rows="3"  value="<?php echo $descricao;?>"></textarea>
                </div>
            </div>
        </div>

    </div>

    <div class="row">    
        <div class="col-md-12 text-center">
            <input type="submit" class="btn btn-primary" name="btneditar" value="Enviar">
        </div>
    </div>