<?php
    require_once './head.php';
    require_once './menu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="standard_main_title">Intradermoterapia</h1>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-6 col-sm">
          <img src="./imagens/intradermo-1.jpg" class="img-fluid standard__photo" alt="">
        </div>
        <div class="col-md-6 col-sm">
          <h4 class="standard__title"></h4>
            <p class="standard__text">A intradermoterapia é uma técnica pouco invasiva que consiste na utilização de injeções com medicamentos e vitaminas em locais do corpo a serem tratados. É o biomédico esteta que escolhe o que vai utilizar como medicamento, mas tudo vai depender do objetivo de cada tratamento. A técnica — criada em 1952 pelo médico francês Michel Pistor — foi desenvolvida originalmente para o tratamento de doenças vasculares e infecciosas, lesões esportivas e para a melhoria da circulação. Com a descoberta dos efeitos benéficos na aparência da pele, a terapia, antes direcionada para o tratamento de condições médicas, virou um dos procedimentos estéticos mais procurados.</p>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center box">
      <div class="row">
        <div class="col-md-6 col-sm">
            <h4 class="standard__title">Como funciona a intradermoterapia?</h4>
                <p class="standard__text"> A sessão de intradermoterapia dura em torno de 30 a 60 minutos e pode ser aplicado um anestésico local alguns minutos antes do procedimento para garantir mais conforto ao cliente. A técnica usa microagulhas para fornecer uma série de injeções na camada intermediária (mesoderma) da pele. A ideia do tratamento é que ele aja nas causas subjacentes aos problemas estéticos tratados, como má circulação, retenção de líquidos e inflamação dos tecidos conjuntivos, que causam danos à cútis.</p>
            <h4 class="standard__title"></h4>
                <p class="standard__text"></p>
        </div>

        <div class="col-md-6 col-sm">
          <img src="./imagens/intradermo-2.jpg" class="img-fluid standard__photo" alt="">
          <h4 class="standard__title">Como é a recuperação?</h4>
            <p class="standard__text">Como a intradermoterapia não é invasiva, geralmente não há necessidade de afastamento das atividades. Muitas pessoas retornam às suas rotinas imediatamente após a sessão e poucas decidem tirar um dia de folga para se recuperar de eventuais inchaços ou dores nos locais de injeção.</p>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-6 col-sm">
          <img src="./imagens/intradermo-3.jpg" class="img-fluid standard__photo" alt="">
        </div>
        <div class="col-md-6 col-sm">
            <h4 class="standard__title">Contraindicações e efeitos colaterais?</h4>
              <p class="standard__text">Ela é contraindicada para pessoas que têm alergias às substâncias utilizadas ou doenças de pele no local onde será aplicada a técnica; para gestantes, lactantes, cardíacos e pessoas com doenças crônicas. Existe a possibilidade de ocorrerem pequenos hematomas que desaparecem rapidamente e podem ser cobertos com maquiagem. Não é recomendada a exposição ao sol e fontes artificiais de radiação UV durante o tratamento.</p>
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