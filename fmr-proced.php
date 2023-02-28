<?php
  require_once './head.php';
  require_once './menuadmin.php';

?>
  
  <form method="post" action="./control-proced.php" enctype="multipart/form-data">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Cadastro de Procedimento</h1>
        </div>
       </div>
    </div>

  <form>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="nomeprocedimento">Nome</label>
                    <input type="text" class="form-control" name="nomeprocedimento">    
                </div>
            </div>     
            
            <div class="col-md-3">
                <div class="form-group">
                    <label for="valor">Preço</label>
                    <input type="text" name="valor" class="form-control" onchange="this.value = this.value.replace( /,/g, '.')">
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" name="descricao" rows="3"></textarea>
                </div>
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