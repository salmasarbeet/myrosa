<?php
function active($current_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($current_page == $url){
      echo 'active';
  } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROSA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="font-family: Segoe UI;">
    
  <!--HEADER-->
    <?php include("./header.html") ?>
  <!--HEADER-->

<!--CONTENT-->

  <!--CAROUSEL-->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"style="background-color: #BEBEBE">
          <ol class="carousel-indicators" style="gap: 10px">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active indicator1" style="background-color: #fff;width: 5px;height: 5px;border-radius: 50%;"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1" class="indicator2" style="background-color: #fff;width: 5px;height: 5px;border-radius: 50%;"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2" class="indicator3" style="background-color: #fff;width: 5px;height: 5px;border-radius: 50%;"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3" class="indicator3" style="background-color: #fff;width: 5px;height: 5px;border-radius: 50%;"></li>
          </ol>
        <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="img/slide1.jpg" class="d-block w-60" style="height: 500px; float:right">
        <div class="carousel-caption d-none d-md-block">
          <h2>First slide label</h2>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide2.jpg" class="d-block w-60" style="height: 500px; float:right">
        <div class="carousel-caption d-none d-md-block">
          <h2>Second slide label</h2>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/3slide.jpg" class="d-block w-65" style="height: 500px; float:right">
        <div class="carousel-caption d-none d-md-block">
          <h2>Third slide label</h2>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/4slide.jpg" class="d-block" style="height: 500px;width: 750px;float:right">
        <div class="carousel-caption d-none d-md-block">
          <h2>Fourth slide label</h2>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev btn btn-dark" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next btn btn-dark" type="button" data-target="#carouselExampleCaptions" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button></div>

  <!--END CAROUSEL-->
    

  <!--jumbotron--> <hr>
    <div class="jumbotron my-0 text-center p-3" style="background-color:white">
        <h1 class="display-4" id="h1">Bring your entertainment to life.</h1>
        <hr class="my-3" style=" width: 50%; margin: 0 25% 0 25%">
        <p class="lead my-1" id="p1">Unparalleled visual and auditory adventure from the comfort of your living room.</p>
        <p class="lead my-1" id="p1">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p class="lead my-1" id="p1"> It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead my-4" id="p2">Get to know us & Check our best deals below !</p>
        <a class="btn btn-md" href="#" role="button">See Deals Now</a>
    </div><hr>
    <br><br>
  <!--ENDjumbotron-->

  <!--PRODUCTS SLIDER-->
  <h2 class="text-center" style="color:#9E8B94">Lorem ipsum dolor sit amet consectetur:</h2>
  <hr>
  <div id="carouselExampleControls" class="carousel slide my-5 p-5" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-3"><img src="img/1111.jpg" class="d-block" style="height: 250px;width:200px;"></div>
        <div class="col-3"><img src="img/2222.jpg" class="d-block" style="height: 250px;width:200px;"></div>
        <div class="col-3"><img src="img/7777.jpg" class="d-block" style="height: 250px;width:200px;"></div>
        <div class="col-3"><img src="img/8888.jpg" class="d-block" style="height: 250px;width:200px;"></div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-3"><img src="img/9999.jpg" class="d-block" style="height: 250px;width:200px;"></div>
        <div class="col-3"><img src="img/2222.jpg" class="d-block" style="height: 250px;width:200px;"></div>
        <div class="col-3"><img src="img/1111.jpg" class="d-block" style="height: 250px;width:200px;"></div>
        <div class="col-3"><img src="img/7777.jpg" class="d-block" style="height: 250px;width:200px;"></div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-3"><img src="img/8888.jpg" class="d-block" style="height: 250px;width:200px;"></div>
        <div class="col-3"><img src="img/9999.jpg" class="d-block" style="height: 250px;width:200px;"></div>
        <div class="col-3"><img src="img/1111.jpg" class="d-block" style="height: 250px;width:200px;"></div>
        <div class="col-3"><img src="img/2222.jpg" class="d-block" style="height: 250px;width:200px;"></div>
      </div>
    </div>
  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"style="filter: invert(100%);" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"style="filter: invert(100%);" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"style="filter: invert(100%);"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
  <button class="btn-btn">Lorem, ipsum dolor.</button>

<br><br><br>
  <!--ENDPRODUCTS SLIDER-->

  <!--map-->
  <div class="container row w-100 ml-5">
    <div class="my-container col-md-6 p-5 h-100">
      Lorem ipsum dolor sit amet consectetur elit. <br><hr><span class="span">  Deleniti aspernatur repudiandae laudantium ipsa, iste aperiam delectus nostrum molestias ut reiciendis odit assumenda quod totam veniam? Sunt alias atque vel architecto. Lorem ipsum dolor sit amet adipisicing elit. Molestiae amet placeat. Eligendi tempore impedit nulla, dignissimos porro cupiditate rerum eveniet minima doloribus repellat deserunt, fugiat, quod minus.<br> </span> 
    </div>
    
    <div class="my-seccontainer col-md-6 p-5">
      <h4 class="text-center text-light"style="font-family: Segoe UI">LOREM IPSUM DOLOR:</h4>
      <hr>
      <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.0090539984894!2d-7.641737549919712!3d33.57911418064269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d2c3c3fb2e57%3A0x1d1b53597ba65a22!2sMediExperts!5e0!3m2!1sfr!2sma!4v1645432282607!5m2!1sfr!2sma" height="250" allowfullscreen="" loading="lazy"></iframe>
      <br>
      <button class="my-btn btn-block">Lorem ipsum dolor sit amet</button>
    </div>

  </div>
<br>
  <!--END map-->

  <!--PHOTO GALLERY-->
    <div class="grid-container my-5 ml-4 w-100 text-justify p-0">
        <div class="grid-item item1"><img class="grid-img grid-img1" src="img/55.jpg"style=""></div>
        <div class="grid-item item2"><img class="grid-img grid-img2" src="img/44.jpg"style=""></div>
        <div class="grid-item item3"><img class="grid-img grid-img3" src="img/33.jpg"style=""></div>
        <div class="grid-item item4"><img class="grid-img grid-img4" src="img/22.jpg" style=""></div>
        <div class="grid-item item5"><img class="grid-img grid-img5" src="img/66.PNG"style=""></div>
        <p class="my-5 ml-3 p-5" id="font">Lorem, ipsum dolor. <br><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Perspiciatis, necessitatibus eaque.</span></p>
    </div>
  <!--END PHOTO GALLERY-->

<!--PARTNERS-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-4">
          <div class="square-holder">
            <img src="https://www.pmits.co.uk/portals/0/images/partners/solar-communications-200.png" class="d-block w-100">
          </div>
        </div>

        <div class="col-4">
          <div class="square-holder">
            <img src="https://www.pmits.co.uk/portals/0/images/partners/cbf-200.png" class="d-block w-100">
          </div>
        </div>
      
        <div class="col-4">
          <div class="square-holder">
            <img src="https://www.pmits.co.uk/portals/0/images/partners/gxs-200.png" class="d-block w-100">
          </div>
        </div>
        </div>  
      </div>

    <div class="carousel-item">
    <div class="row">
    <div class="col-4">
          <div class="square-holder">
            <img src="https://www.pmits.co.uk/portals/0/images/partners/talk-internet-200.png" class="d-block w-100">
          </div>
        </div>

        <div class="col-4">
          <div class="square-holder">
            <img src="https://www.pmits.co.uk/portals/0/images/partners/solar-communications-200.png" class="d-block w-100">
          </div>
        </div>
      
        <div class="col-4">
          <div class="square-holder">
            <img src="https://www.pmits.co.uk/portals/0/images/partners/solar-communications-200.png" class="d-block w-100">
          </div>
        </div>
        </div>  
      </div>
      </div>  
    </div>

    <div class="carousel-item">
      <div class="row">
      <div class="col-4">
          <div class="square-holder">
            <img src="https://www.pmits.co.uk/portals/0/images/partners/solar-communications-200.png" class="d-block w-100">
          </div>
        </div>

        <div class="col-4">
          <div class="square-holder">
            <img src="https://www.pmits.co.uk/portals/0/images/partners/solar-communications-200.png" class="d-block w-100">
          </div>
        </div>
      
        <div class="col-4">
          <div class="square-holder">
            <img src="https://www.pmits.co.uk/portals/0/images/partners/solar-communications-200.png" class="d-block w-100">
          </div>
        </div>
        </div>  
      </div>
      </div>  
    </div>
  </div>
</div>

<!--ENDPARTNERS-->


<!--ENDCONTENT-->


<!--FOOTER-->
  <?php include("./footer.html") ?>
<!--FOOTER-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>