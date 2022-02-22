<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
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
    <title>Document</title>
    <link rel="stylesheet" href="aboutstyle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php include("header.html") ?>
<div id="back">
    <br><br>
    <h2>ABOUT US</h2>
    <div class="shaped1"></div>
        <section class="row w-100">
            <div class="con col-lg-6 my-5 ml-5 p-2">
                <hr>
                <h3 class="h3 text-center text-light">LOREM IPSUM</h3>
                <hr>
                <img id="hoverme" src="img/team.jpg">
                <hr>
                <h3 id="h3" class="text-center">WHAT WE DO</h3>
                <hr>
                <div class="row text-center w-100">

                    <div class="container alert-light col-md-3 ml-5 p-2"style="border-radius:20px">
                        <img class="iconicon" src="icon/1.png">
                        <hr>
                        <h4 class="lorem text-dark">LOREM IPSUM DOLOR SIT</h4>
                        
                    </div>

                    <div class="container alert-light col-md-3 ml-5 p-2"style="border-radius:20px">
                        <img class="iconicon" src="icon/2.png">
                        <hr>
                        <h4 class="lorem text-dark">LOREM IPSUM DOLOR SIT</h4>
                    
                    </div>

                    <div class="container alert-light col-md-3 ml-5 p-2"style="border-radius:20px">
                        <img class="iconicon" src="icon/3.png">
                        <hr>
                        <h4 class="lorem text-dark">LOREM IPSUM DOLOR SIT</h4>
                    </div>
                <p class="alert alert-light text-center mt-5 ml-2" style="border-radius:20px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum minima suscipit fugit enim! Excepturi accusantium doloribus deserunt nam accusamus quo hic architecto fugit a esse atque nobis nihil recusandae perferendis minus, suscipit optio vero reprehenderit magnam ab. Nam quia aut veritatis, voluptatibus quibusdam, vitae aperiam voluptatum voluptate numquam ex quam?
                </p>

                </div>
                <br>
                <hr>
                <button class="btn btn-block text-center">LOREM IPSUM</button>
                <hr>
            
            </div>
                
        </section>

        <h2>Pourquoi ROSACOLOR?</h2>
        <div class="shaped2"></div>

        <div class="container alert alert my-5 w-75">

            <div class="row my-5 ml-0 p-3"id="ok" style="">

                <div class="col-md-6">
                    <img src="img/ok.png" id="sideimg">
                </div>

                <div class="col-md-6">
                    <h1 class="mytitle">Lorem ipsum dolor sit amet.</h1><br>
                    <h3 class="mysecondtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, error?</h3>
                    <br>
                    <button id="valider">Lorem Ipsum</button>                    
                    <br><br><br>
                    <hr>
                    <br>
                    <h6 id="questions">Lorem ipsum dolor sit amet consectetur?</h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus quod quia repellat fugit amet eos voluptatem perspiciatis dolore rerum fuga?</p>
                    <h6 id="questions">Lorem ipsum dolor sit amet consectetur?</h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus quod Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quo neque inventore quae eaque libero, voluptates harum alias reprehenderit nam ullam delectus ab ducimus sapiente earum consequatur ipsa quas illum vero, dolor dicta? Dolor inventore laborum totam repellat porro nemo esse aliquam ipsum? Ut ipsa architecto quis excepturi perferendis temporibus. quia repellat fugit amet eos voluptatem perspiciatis dolore rerum fuga?</p>
                    <h6 id="questions">Lorem ipsum dolor sit amet consectetur?</h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus Lorem ipsum dolor sit amet consectetur adipisicing elit. Non asperiores assumenda accusantium vel ex, at quas velit labore eveniet soluta unde, tenetur temporibus quaerat dolor alias, explicabo dignissimos a! Nemo, commodi laudantium sit nam nisi pariatur mollitia, aperiam illo porro excepturi, eveniet inventore accusantium alias culpa voluptatibus illum harum possimus enim voluptatum nihil. Assumenda exercitationem impedit, necessitatibus nam, praesentium iste doloribus at vero laborum illo eligendi repellat dicta ab error nisi ipsum! quod quia repellat fugit amet eos voluptatem perspiciatis dolore rerum fuga?</p>
                    <h6 id="questions">Lorem ipsum dolor sit amet consectetur?</h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus quod quia repellat fugit amet eos voluptatem perspiciatis dolore rerum fuga?</p>

                </div>
            </div>
        </div>


        <h2>Qui sommes-nous?</h2>
        <div class="shaped3"></div>
        
        <div class="container my-5 p-3 w-75" style="border: 1px solid #C2CAD0;border-radius:30px;position:relative;right: 150px">

        <header class="text-center py-5">
            <div class="container">
                <h1 id="team" class="font-weight-light">MEET THE TEAM</h1>
                <div class="shapedd"></div>
                <br>
                <p style="font-size:15px; font-family:Segoe UI;color:#705B64">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque deleniti eaque perferendis. Ratione impedit animi delectus quo explicabo accusamus laboriosam tenetur assumenda. Quo quis doloribus nulla temporibus! Beatae molestiae, suscipit error nihil nam ipsum impedit vitae exercitationem iure, culpa praesentium natus voluptatum fuga obcaecati aperiam quod quisquam ad? Expedita, optio.</p>
                <figcaption class="blockquote-footer">
                    <cite title="Source Title" style="font-size: large">Lorem, ipsum dolor.</cite>
                </figcaption>
                <hr>
            </div>
        </header>
        <section class="team pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 text-center">
                    <div class="box">
                        <div class="avtar">
                            <img class="img-fluid" src="img/person1.jpg" alt="">
                        </div>
                        <div class="box_content text-center">
                            <h3 class="title">LOREM IPSUM</h3>
                            <span class="post">Lorem ipsum dolor sit amet.</span>
                        </div>
                        <ul class="icons">
                            <li><a href="#"><i class="fa fa-facebook"><img id="ico" src="icon/facebook.png" alt=""></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"><img id="ico" src="icon/in.png" alt=""></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"><img id="ico" src="icon/pin.png" alt=""></i></a></li>
                        </ul>
                    </div>
                </div>
         
                <div class="col-md-4 col-sm-6 text-center">
                    <div class="box">
                        <div class="avtar">
                            <img class="img-fluid" src="img/person2.jpg" alt="">
                        </div>
                        <div class="box_content text-center">
                            <h3 class="title">LOREM IPSUM</h3>
                            <span class="post">Lorem ipsum dolor sit amet.</span>
                        </div>
                        <ul class="icons">
                            <li><a href="#"><i class="fa fa-facebook"><img id="ico" src="icon/facebook.png" alt=""></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"><img id="ico" src="icon/in.png" alt=""></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"><img id="ico" src="icon/pin.png" alt=""></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 text-center">
                    <div class="box">
                        <div class="avtar">
                            <img class="img-fluid" src="img/person3.jpg" alt="">
                        </div>
                        <div class="box_content text-center">
                            <h3 class="title">LOREM IPSUM</h3>
                            <span class="post">Lorem ipsum dolor sit amet.</span>
                        </div>
                        <ul class="icons">
                            <li><a href="#"><i class="fa fa-facebook"><img id="ico" src="icon/facebook.png" alt=""></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"><img id="ico" src="icon/in.png" alt=""></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"><img id="ico" src="icon/pin.png" alt=""></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        </section>
</div>
<?php include("footer.html") ?>  
</body>
</html>