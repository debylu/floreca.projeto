<?php
    require_once './head.php';
    require_once './menu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="standard_main_title">Peeling Corporal</h1>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-6 col-sm">
          <img src="./imagens/peeling-1.jpg" class="img-fluid standard__photo" alt="mulher no procedimento de peeling corporal">
        </div>
        <div class="col-md-6 col-sm">
          <h4 class="standard__title">O que é?</h4>
            <p class="standard__text">O peeling é um procedimento com foco na esfoliação da pele. Com isso, ele renova e ajuda a regenerar a pele das regiões tratadas. Geralmente, ele é feito no colo,
            braços, mãos, costas, axilas e virilhas, dependendo das necessidades individuais de cada paciente. Sua realização é indicada para clarear manchas e áreas 
            escurecidas da pele, reduzir a oleosidade corporal e suavizar a aparência de cicatrizes. Da mesma forma, ele também pode ser indicado para tratar estrias, 
            melhorar a textura da pele e reduzir a aspereza.</p>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center box">
      <div class="row">
        <div class="col-md-6 col-sm">
            <h4 class="standard__title">Quais são os tipos de peeling existentes</h4>
              <p class="standard__text"><strong>Peeling físico</strong>
              a versão física do peeling é superficial e é semelhante à esfoliação que fazemos em casa. Realizada com microesferas, ela ajuda a renovar a pele e permite que outros ativos, como os hidratantes corporais, penetrem melhor na derme. Sua indicação é, principalmente, para o tratamento de cravos e estrias.</p>
            <h4 class="standard__title"></h4>
              <p class="standard__text">Quem quer reduzir a aparência de estrias pode contar com o <strong>peeling de cristal</strong>.     Afinal, esse tratamento estimula a produção de colágeno, sendo um dos procedimentos mais procurados por quem quer melhorar a aparência da pele de forma geral.</p>
            <h4 class="standard__title"></h4>
              <p class="standard__text">Por último, temos ainda o <strong>peeling de diamante</strong>. Ele também é conhecido como microdermoabrasão e consiste em uma esfoliação profunda da pele, removendo todas as células mortas, clareando manchas e reduzindo a aparência das rugas e linhas finas.</p>
        </div>

        <div class="col-md-6 col-sm">
          <img src="./imagens/peeling-2.jpg" class="img-fluid standard__photo" alt="mulher no procedimento de peeling corporal">
          <h4 class="standard__title">Quais são os benefícios do peeling corporal?</h4>
            <p class="standard__text">Assim como na face, o peeling corporal proporciona diversos benefícios à pele, como a redução de rugas, melhora da flacidez, rejuvenescimento e clareamento de manchas causadas pela exposição solar, além de remover as células mortas e acelerar a produção de novas células. O procedimento, que induz a descamação da pele, pode ser feito utilizando diferentes técnicas — química e mecânica, ou ainda a associação entre elas.</p>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-6 col-sm">
          <img src="./imagens/peeling-3.jpg" class="img-fluid standard__photo" alt="mulher no procedimento de peeling corporal">
        </div>
        <div class="col-md-6 col-sm">
            <h4 class="standard__title">Cuidados antes do peeling</h4>
              <p class="standard__text">O peeling é feito sempre após a avaliação inicial da dermatologista ou de um cirurgião plástico, sendo também realizado por esses profissionais. 
                Além de conhecer melhor as particularidades da sua pele, o encontro inicial tem também o objetivo de entender o que você espera do procedimento. Afinal, as substâncias mais 
                recomendadas podem variar de acordo com as suas expectativas. Portanto, é muito importante que você aproveite o encontro inicial para tirar todas as suas dúvidas.</p>
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