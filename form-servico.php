<?php
    require_once './head.php';
    require_once './menuadmin.php';
    include_once './conexao.php';


    $sql = "SELECT * from cliente";
    $resultado=$conn->prepare($sql);
    $resultado->execute();

    $sql2 = "SELECT * from funcionario";
    $resultado2=$conn->prepare($sql2);
    $resultado2->execute();

    $sql3 = "SELECT * from procedimento";
    $resultado3=$conn->prepare($sql3);
    $resultado3->execute();

?>

<form method="POST" action="cartao.php" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="container">
        <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Cadastro de serviço</h3>
                </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="cliente">Cliente</label>
                    <select name="cliente" class="form-control">
                            
                    <?php

                        if (($resultado) and ($resultado->rowCount() !=0)) {
                        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                        extract($linha);
                                
                    ?>
                       
                        <option value="<?php echo $idcliente;?>"> <?php echo $nome;?></option>
                       

                    <?php
                            }
                        }
                    ?>
                    </select>
                    
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="funcionario">Funcionário</label>
                    <select name="funcionario" class="form-control">
                         
                        <?php

                            if (($resultado2) and ($resultado2->rowCount() !=0)) {
                                while ($linha2 = $resultado2->fetch(PDO::FETCH_ASSOC)) {
                                  extract($linha2);
                            
                        ?>

                        <option value="<?php echo $idfuncionario;?>"> <?php echo $nome; ?> </option>

                        <?php
                                }
                            }
                        ?>
                       
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="procedimento">Procedimento</label>
                    <select name="procedimento" class="form-control">
                                
                    <?php

                        if (($resultado3) and ($resultado3->rowCount() !=0)) {
                        while ($linha3 = $resultado3->fetch(PDO::FETCH_ASSOC)) {
                        extract($linha3);
                                    
                    ?>
                        <option value="<?php echo $idprocedimento;?>"> <?php echo $nomeprocedimento; ?> </option>

                    <?php
                            }
                        }
                    ?>
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="categoria">Local do corpo</label>
                    <select name="categoria" class="form-control">                  
                        <option value="facial">Facial </option>
                        <option value="corporal">Corporal </option>
                        <option value="ambos">Ambos </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- <div class="col-md-3">
                <div class="form-group">
                    <label for="descrição">Descrição</label>
                    <textarea class="form-control" name="descrição" rows="3"></textarea>
                </div>
            </div> -->

            <div class="col-md-3">
                <div class="form-group">
                    <label for="date">Data</label>
                    <input type="date" name="date" class="form-control"> 
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="time">Hora</label>
                    <input type="time" name="hora" class="form-control"> 
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-primary" name="btncad" value="Salvar">
                
            </div>
        </div>
        
</form>


<?php
    require_once './footer-admin.php';
?>