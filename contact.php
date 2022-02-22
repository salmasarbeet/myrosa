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
    <link rel="stylesheet" href="contactstyle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <!--HEADER-->
    <?php include("header.html") ?>
    <!--ENDHEADER-->


    <!--CONTENT-->
    <div class="content"style="background-image:url(img/bg.jpg);background-repeat:no-repeat;background-position:top right">
        <br><br>
        <h2>CONTACT US</h2>
        <div class="shape"></div>
        <div class="row">
            <div class="col-md-6" id="container1">
                <div class="container my-5 ml-0 w-75" id="cont1" style="">
                <input type="text" placeholder="Full Name" class="form-control" id="text1"><br>
                <input type="text" placeholder="Email" class="form-control" id="text2"><br>
                <input type="text" placeholder="Phone Number" class="form-control" id="text3"><br>
                <textarea cols="12" rows="5" id="textarea" class="form-control" placeholder="Comment" id="text4"></textarea>
                <button class="btn" id="send">Send</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container my-0 w-50 my-5 ml-5 p-3 text-center" id="cont2">
                    <img class="icons" src="icon/tel.png"> 
                    <p class="info"> 01-281-135-942</p><hr>
                    <img class="icons" src="icon/mess.png"> 
                    <p class="info"> brandname@gmail.com </p><hr>
                    <img class="icons" src="icon/maps.png"> 
                    <p class="info"> 123 Rue 32 Lorem ipsum, <br> Consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, facere?</p>
                </div>
            </div> 
        </div>
        <br>
    </div>
    <!--ENDCONTENT-->


    <!--FOOTER-->
    <?php include("footer.html") ?>
    <!--ENDFOOTER-->
    </div>
</body>
</html>