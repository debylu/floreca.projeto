<?php
    require_once './head.php';
    require_once './menu.php';

?>

  <div class="row carrossel">
    <div class="col-md-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block" src="./imagens/carrossel-1.jpg" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="./imagens/carrossel-2.jpg" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="./imagens/carrossel-3.jpg" alt="Terceiro Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </div>
  </div>



    <!-- CONTEÚDO -->

      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-12 ">
            <h2 class="content__title">Floreça</h2>
            <h6>A melhor clínica de estética do Brasil</h6>
            <span>Profissionais experientes  |  A maior oferta do mercado  |  A melhor solução para si </span>
          </div>
        </div>

        <div class="row list" >
          <div class="col-sm-5" style="vertical-align:top">
            <img src="./imagens/peeling-2.png"   class="list__img" style="width: 100px;height:100px" alt="">
            <h3 class="list__title" >Alta tecnologia Floreça por um valor fixo</h3>
              <p class="text-md-left">No Floreça, nós planejamos seu atendimento de forma personalizada! Ao se tornar membro do Floreça, você pode realizar outros tratamentos, além das suas sessões mensais, por valores especiais de acordo com o seu plano.</p>
          </div>
    
          <div class="col-sm-5" style="vertical-align:top">
            <img src="./imagens/radiofrequencia-4.jpg" class="list__img" style="width: 100px;height:100px" alt="">
            <h3 class="list__title" >Equipamentos de última geração</h3>
            <p class="text-md-left">O Floreça dispõe em sua clínica, aparelhos com a mais alta tecnologia. Seguimos padrões internacionais de qualidade para levar o autocuidado de forma inteligente e segura para cada um de vocês!</p>
          </div>
        </div>
<!-- /////////////////////////////////////////////////////////////////// -->

      <div class="container-fluid first__content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h5>Os mais queridinhos</h5>
            <h3>Conheça mais em detalhes</h3>
          </div>
        </div>
      </div>

        <div class="row justify-content-center">
          <div class="col-md-3 col-sm">
            <div class="card">
              <img class="card-img-top" src="./imagens/facial-2.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Preenchimento Facial</h5>
                <p class="card-text"> Tratamento e reestruturação da pele envelhecida.</p>
                <a href="./facial.php" target="_blank" class="btn btn-primary">Clique e saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm">
            <div class="card">
              <img class="card-img-top" src="./imagens/ultracav-1.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Ultracavitação</h5>
                <p class="card-text"> Tratamento utilizado para eliminar a gordura localizada.</p>
                <a href="./cavitacional.php" target="_blank" class="btn btn-primary">Clique e saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm">
            <div class="card">
              <img class="card-img-top" src="./imagens/peeling-3.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Peeling Corporal</h5>
                <p class="card-text">O peeling é um procedimento com foco na esfoliação da pele.</p>
                <a href="./peeling.php" target="_blank" class="btn btn-primary">Clique e saiba mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- **************************** -->

      <div class="image__banner dark">
        <img width="500" height="250" src="./imagens/banner.jpg" alt="">
      </div>

<!-- *************** SEGUNDO CONTEÚDO ***************** -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">
            <h5 class="tittle__second__content">Aguma coisa aqui</h5>
            <h3>Nossos Tratamentos</h3>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row carousel">
          <div class="col-md-3 col-sm">
            <div class="card">
              <img class="card-img-top" src="./imagens/tatu-1.jpg" alt="demonstração de remoção de tatuagem">
                <div class="card-body">
                  <h5 class="card-title">Remoção Tatuagem</h5>
                  <p class="card-text">Tratamento para remoção de tatuagem indesejada. </p>
                  <a href="./tatuagem.php" target="_blank" class="btn btn-primary">Clique e saiba mais</a>
                </div>
              </div>
          </div>

          <div class="col-md-3 col-sm">
            <div class="card">
              <img class="card-img-top" src="./imagens/laser-1.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Depilação a Laser</h5>
                <p class="card-text">Eliminação dos pelos através de disparos de laser. </p>
                <a href="./laser.php" target="_blank" class="btn btn-primary">Clique e saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm">
            <div class="card">
              <img class="card-img-top" src="./imagens/biche-1.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Bichectomia</h5>
                <p class="card-text"> Tratamento utilizado para eliminar a gordura localizada.</p>
                <a href="./bichectomia.php" target="_blank" class="btn btn-primary">Clique e saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm">
            <div class="card">
              <img class="card-img-top" src="./imagens/tecar-1.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Tecarterapia</h5>
                <p class="card-text"> Tratamento utilizado para eliminar a gordura localizada.</p>
                <a href="./tecarterapia.php" target="_blank" class="btn btn-primary">Clique e saiba mais</a>
              </div>
            </div>
          </div>
          
        </div>
      </div>

<!-- **************************** MENSAGEM DE AGENDAMENTO *******************************-->
  
    <form class="scheduling__form" method="POST" action="./contatos.php">

        <div class="container-fluid">
          <div class="row ">
            <div class="col-md-12 text-center">
              <h1 class="appointment__form__title">Solicite sua avaliação gratuita!</h1>
              <p>Preencha o formulário abaixo com seus dados corretamente e nós entraremos em contato com você para maiores detalhes.</p>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="form-group">
                <label for="nome">Seu nome completo</label>
                <input type="text" class="form-control" name="nome">    
              </div>
            </div> 
          </div>
              
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" placeholder="DDD + Número de telefone" onkeypress="$(this).mask('(00)00000-0000')">
              </div>
            </div>
          </div>
                
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="form-group">
                <label for="exampleFormControlInput1">Endereço de e-mail</label>
                <input type="email" class="form-control" name="email">
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="form-group">
                  <label for="exampleFormControlSelect2">Tratamento</label>
                  <select multiple class="form-control" name="message">
                  <option>Limpeza de pele</option>
                    <option>Radiofrequência</option>
                    <option>Preenchimento Facial</option>
                    <option>Toxina Botulínica</option>
                    <option>Ultrassom Cavitacional</option>
                    <option>Intradermoterapia</option>
                    <option>Peeling Corporal</option>
                  </select>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <input type="submit" class="button__message" name="btnsoli" value="Enviar">
          </div>
        </div>
    </form>



<?php
    require_once './footer.php';
?>
<style> 

 .carrossel img{
    height:500px;
    width:100%;
} 

.first__content {
  margin-top: 6rem;
}

.list{
  display: flex;
  justify-content: center;
  margin-top: 70px;
  text-align: center;
}

.list__img{
    position: relative;
    margin-right: 19px;
    float: left;
    flex-shrink: 0;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-size: cover;
    background-position: 50%;
  } 

  .list__title{
    line-height:95%;
    font-weight: 300;
    font-size: 20px;
  }
  
  .list__title h3{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
  }

  .list__title{
    text-align: justify;
  } */

  .card{
    width: 15rem;
    height: 20rem;

  }

  .image__banner img {
      width: 100%;
    }

  .image__banner img {
    display: inline-block;
    height: auto;
    max-width: 100%;
    vertical-align: middle;
  } 

  .tittle__second__content{
    margin-top: 30px;
}
</style> 







