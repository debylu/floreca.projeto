<?php
    require_once './head.php';
    require_once './menu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="standard_main_title">Como é e como funciona Radiofrequência</h1>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-6 col-sm">
          <img src="./imagens/radiofrequencia-1.jpg" class="img-fluid standard__photo" alt="demonstração de radiofrequencia antes e depois">
        </div>
        <div class="col-md-6 col-sm">
          <h4 class="radio__frequency__title">Você sabe o que é a radiofrequência?</h4>
            <p class="radio__frequency__text">Trata-se de um procedimento da área de estética em que se utiliza a temperatura (de até 42 graus) para estimular a produção de colágeno e elastina no organismo. Pode ser aplicada tanto no rosto como em todo o corpo, e é um tratamento estético não invasivo. </p>
            
        </div>
      </div>
    </div>

    <div class="container-fluid text-center box">
      <div class="row">
        <div class="col-md-6 col-sm">
            <h4 class="standard__title">Quais os seus benefícios?</h4>
                <p class="standard__text">A radiofrequência diminui estrias, celulites e flacidez, além de combater a gordura localizada, proporcionando mais definição ao corpo e realçando as curvas.</p>
            <h4 class="standard__title">Como funciona?</h4>
                <p class="standard__text">Utiliza-se um aparelho que aumenta a temperatura da derme, a qual, uma vez aquecida, provoca a eliminação da 
                gordura corporal.</p>
        </div>

        <div class="col-md-6 col-sm">
          <img src="./imagens/radiofrequencia-2.jpg" class="img-fluid standard__photo" alt="demonstração de radiofrequencia antes e depois">
          <h4 class="standard__title">Quanto tempo duram as sessões de radiofrequência?</h4>
            <p class="standard__text">As sessões duram, em média, 30 minutos, e normalmente são indicadas em torno de 10 sessões, uma vez por semana, para ter bons resultados.</p>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-6 col-sm">
          <img src="./imagens/radiofrequencia-3.jpg" class="img-fluid standard__photo" alt="demonstração de radiofrequencia antes e depois">
        </div>
        <div class="col-md-6 col-sm">
            <h4 class="standard__title">Cuidados pós-procedimento</h4>
                <p class="standard__text">Depois de uma sessão de radiofrequência, normalmente a pele fica mais avermelhada, e o local tratado, um pouco inchado, dependendo da pessoa. O ideal é que o paciente não tome sol na região tratada durante um período e aplique protetor solar uma hora depois do procedimento.</p>
        </div>
      </div>
    </div>


<?php
    require_once './footer.php';
?>

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