<?php
    require_once './head.php';

    session_start();
    ob_start();

    if(!isset($_SESSION["quant"])){
      $_SESSION["quant"] = 0;
    }

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Floreca</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(página atual)</span></a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link" href="./formulario.php">Cadastro de Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./funcionario.php">Cadastro de Funcionário</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./relatorio-client.php">Relatório de Clientes</a>
            </li>
    
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./relatorio-func.php">Relatório de Funcionários</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./fmr-proced.php">Cadastro de Procedimento</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./relatorio-proced.php">Relatório de Procedimento</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./form-servico.php">Formulário de serviço</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">

            <a href="./frm-agenda.php">
            <img src="./imagens/pagamento-seguro.png" style=width:40px;height:40px;></a>
            <?php 
              if($_SESSION["quant"]>0){
                 echo $_SESSION["quant"]; 
              }
            ?>
         
          </form>
        </div>
    </nav>

<?php
    require_once './footer-admin.php';
?>

   