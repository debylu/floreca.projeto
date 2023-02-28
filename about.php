<?php
    require_once './head.php';
    require_once './menu.php';
?>

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="about__tittle">Sobre nós</h2>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center ">
                <img src="./imagens/girassol.png" width="250" height="250" class="img-fluid">
            </div>
        </div>

        <div class="col-md-12 col-sm ">
            <h3 class="about__tittle__h3">Oi, nós somos o Floreça!</h3>
            <p class="about__text">
            O nosso objetivo o principal? Oferecer os melhores procedimentos que você já viu. Nós não nascemos ontem, e por isso mesmo já descobrimos a melhor maneira de vender os melhores produtos do mercado a preços extremamente amigáveis. O melhor de tudo? Fazemos questão de oferecer um excelente atendimento ao cliente.
            Além disso, estamos sempre de olho nas tendências mais recentes no mundo estético – e nos esforçamos ao máximo para colocar os desejos dos nossos clientes em primeiro lugar. Foi assim que construímos a nossa história, e é por isso que temos orgulho de fazer parte do mercado de estética.
            Por último, gostaríamos de afirmar que a nossa principal prioridade é você, o nosso cliente. Esperamos que você desfrute da experiência de compra que preparamos com tanto carinho.</p>
        </div>
    </div>

<?php
    require_once './footer.php';
?>

<style>
    .about__tittle__h3{
        margin: 50px;
    }
    .about__tittle{
     margin-top: 30px;
    }

    .about__text{
        margin-top: 25px;
        margin-bottom: 40px;
        justify-content: center;
        text-align: justify;
        font-size: 1.2rem;
        border-bottom: 1px solid #000;

    }

</style>