<?php

    require_once './head.php';
    include_once './conexao.php';

    session_start();
    ob_start();

    $id = filter_input(INPUT_GET, "idfuncionario", FILTER_SANITIZE_NUMBER_INT);

    if (empty($id)) {
        $_SESSION['msg'] = "Erro: Funcionário não encontrado!";
        header("Location: relatorio-func.php");
        exit();
    }

    $sql = "SELECT * from funcionario where idfuncionario = $id LIMIT 1";
    $resultado= $conn->prepare($sql);
    $resultado->execute();

    if(($resultado) AND ($resultado->rowCount() != 0)){
        $linha = $resultado->fetch(PDO::FETCH_ASSOC);
        //var_dump($linha);
        extract($linha);
    }
    else{
        $_SESSION['msg'] = "Erro: Funcionário não encontrado!";
        header("Location: relatorio-func.php");
    }
?>

<form method="POST" action="./controlfunc.php" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Controle de Funcionário</h3>
                </div>
        </div>

        <div class="row">
            <div class="col-md-1">
                <div class="form-group">
                    <label for="idfuncionario">Id</label>
                    <input type="text" class="form-control" name="idfuncionario"
                    value="<?php echo $idfuncionario;?>"
                    >
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome"
                    value="<?php echo $nome;?>"
                    >
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" onkeypress="$(this).mask('(00)00000-0000')"
                    value="<?php echo $telefone;?>"
                    >
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="cpffuncionario">CPF</label>
                    <input type="text" name="cpffuncionario" class="form-control" onkeypress="$(this).mask('000.000.000-00');"
                    value="<?php echo $cpffuncionario;?>"
                    >
                </div>
            </div>
        </div>

        <div class="row">
            

            <div class="col-md-3">
                <div class="form-group">
                    <label for="rg">RG</label>
                    <input type="text" class="form-control" name="rg"
                    value="<?php echo $rg;?>"
                    >
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email"
                    value="<?php echo $email;?>"
                    >
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" class="form-control" id="cep" onblur="pesquisacep(this.value);"
                    value="<?php echo $cep;?>"
                    >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="rua" name="rua">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="text" class="form-control" name="numero"
                    value="<?php echo $numerocasa;?>"
                    >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                 <label for="bairro">Bairro</label><p>
                 <input type="text" class="form-control" id="bairro" name="bairro">
                </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                 <label for="cidade">Cidade</label><p>
                 <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                 <label for="uf">Estado</label><p>
                 <input type="text" class="form-control" id="uf" name="uf">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Enviar" name="btneditar">
                </div>
            </div>
        </div>
    </div>

</form>

<?php
    require_once './footer-admin.php';
?>