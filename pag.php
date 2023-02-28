<?php
    require_once './head.php';
    require_once './menu.php';
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="standard_main_title"></h1>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-6 col-sm">
          <img src="./imagens/" class="img-fluid standard__photo" alt="">
        </div>
        <div class="col-md-6 col-sm">
          <h4 class="standard__title"></h4>
            <p class="standard__text"></p>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center box">
      <div class="row">
        <div class="col-md-6 col-sm">
            <h4 class="standard__title"></h4>
              <p class="standard__text"></p>
            <h4 class="standard__title"></h4>
              <p class="standard__text"></p>
            <h4 class="standard__title"></h4>
              <p class="standard__text"></p>
        </div>

        <div class="col-md-6 col-sm">
          <img src="./imagens/" class="img-fluid standard__photo" alt="">
          <h4 class="standard__title"></h4>
            <p class="standard__text"></p>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-6 col-sm">
          <img src="./imagens/" class="img-fluid standard__photo" alt="">
        </div>
        <div class="col-md-6 col-sm">
            <h4 class="standard__title"></h4>
              <p class="standard__text"></p>
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