<?php
  require_once './head.php';
  require_once './menuadmin.php';

?>
  
  <form method="post" action="./controlcliente.php" enctype="multipart/form-data">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Cadastro de Cliente</h1>
        </div>
       </div>
    </div>

  <form>

    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="form-group">
            <label for="nome">Nome e sobrenome</label>
            <input type="text" class="form-control" name="nome" placeholder="Seu nome e sobrenome">    
          </div>
        </div>      
        
        <div class="col-md-3">
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" onkeypress="$(this).mask('(00)00000-0000')">
          </div>
        </div>

        <div class="col-md-3">        
          <div class="form-group">            
            <label for="dn">Data de Nascimento</label>
            <input type="date" class="form-control" name="dn">
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label for="exampleInputEmail1">Endereço de e-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Seu email">                   
            </div>
        </div>

        <div class="col-md-3">        
          <div class="form-group">            
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" onkeypress="$(this).mask('000.000.000-00')">
          </div>
        </div>
    
        <div class="col-md-3">
            <div class="form-group">
                <label for="rg">RG</label>
                <input type="text" class="form-control" name="rg">
            </div>
        </div>
    </div>

  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        <label for="cep">CEP</label>
        <input type="text" name="cep" class="form-control" id="cep" onblur="pesquisacep(this.value);" onkeypress="$(this).mask('00000-000');">
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" id="rua" name="rua">
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="numero">Número</label>
        <input type="text" class="form-control" name="numero">    
      </div>
    </div> 
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="bairro">Bairro</label><p>
        <input type="text" class="form-control" id="bairro" name="bairro">
      </div>
    </div>

    <div class="col-md-3">
      <div class="form-group">
        <label for="cidade">Cidade</label><p>
        <input type="text" class="form-control" id="cidade" name="cidade">
      </div>
    </div>

    <div class="col-md-2  ">
      <div class="form-group">
        <label for="uf">Estado</label><p>
        <input type="text" class="form-control" id="uf" name="uf">
      </div>
    </div>
  </div>
  
  <div class="row">    
    <div class="col-md-12 text-center">
      <input type="submit" class="btn btn-primary" name="btncad" value="Cadastrar">
    </div>
  </div>
</div>

</form>

<?php
  require_once './footer-admin.php';
?>