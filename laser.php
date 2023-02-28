<?php
    require_once './head.php';
    require_once './menu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="standard_main_title">Depilação a Laser</h1>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-6 col-sm">
          <img src="./imagens/laser-1.jpg" class="img-fluid standard__photo" alt="">
        </div>
        <div class="col-md-6 col-sm">
          <h4 class="standard__title">Como funciona a depilação a laser?</h4>
            <p class="standard__text">Na depilação a laser, a eliminação dos pelos acontece através de disparos de laser, ou seja, feixes de luz de grande intensidade. Essa luz, por sua vez, é guiada através da melanina até a raiz dos pelos. Portanto, quando o laser faz o disparo sobre a raiz, acontece a cauterização do pelo, ou seja, ele é queimado e destruído. Com a frequência do procedimento, acontecerá um dano permanente no folículo, o que impedirá/retardará o crescimento de novos pelos.</p>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center box">
      <div class="row">
        <div class="col-md-6 col-sm">
            <h4 class="standard__title">Depilação a laser dói? </h4>
              <p class="standard__text">É claro que a dor é algo relativo e depende muito da sensibilidade da pele de cada um. Porém, por ser um procedimento agressivo para queimar os fios, é muito provável que você sinta sim um certo desconforto durante a sessão.</p>
            <h4 class="standard__title"></h4>
              <p class="standard__text">Já existem soluções no mercado para minimizar a dor durante a depilação a laser, como por exemplo, o uso de pomadas anestésicas e jatos de ar frio.</p>
            <h4 class="standard__title">Preparo antes da depilação a laser</h4>
              <p class="standard__text">Em geral, é indicado que a remoção de pelos seja feita em média 3 dias antes do procedimento. Em áreas pequenas e de rápido crescimento de pelos, como é o caso da virilha e axila, por exemplo, recomenda-se que a depilação ocorra no dia anterior ao procedimento. Isso porque o pelo é o fio condutor para o procedimento com o laser, portanto, o pelo não pode estar grande, mas precisa estar aparente.</p>
        </div>

        <div class="col-md-6 col-sm">
          <img src="./imagens/laser-2.jpg" class="img-fluid standard__photo" alt="">
          <h4 class="standard__title">Exposição solar</h4>
            <p class="standard__text">O sol pode ser um grande inimigo durante o tratamento de depilação a laser. A hiperpigmentação da pele pode causar danos, além de prejudicar os resultados do procedimento. </p>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-6 col-sm">
          <img src="./imagens/laser-3.jpg" class="img-fluid standard__photo" alt="">
        </div>
        <div class="col-md-6 col-sm">
            <h4 class="standard__title">Quanto tempo leva uma sessão?</h4>
              <p class="standard__text">Uma sessão pode durar, em média, entre 5 e 30 minutos, dependendo da região, nas axilas duram 5 minutos, virilha em 10 minutos, pernas inteiras aproximadamente 20 minutos.
              </p>
        </div>
      </div>
    </div>

<style>

    .box{
        background-color: #fff;
    }
    .standard_main_title{
        margin: 40px;
        border-bottom: 1px solid #000;
    }
    .standard__title{
        margin: 20px;
        
    }

    .standard__text{
        text-align: justify;
        text-indent: 25px;
    }
    
    .standard__photo {
        margin-top: 10px;
        margin-bottom: 25px;
        width: 400px;
        height: 200px;
        border-radius: 40px 0 40px 0;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    } 
</style>

<?php
    require_once './footer.php';
?>