<?php 
session_start();

if(isset($_SESSION['lang']))
{
    switch($_SESSION['lang'])
    {
        case "en":
           require('lang/en.php');		
       break;
       
       case "hu":
           require('lang/hu.php');		
       break;
       
       case "de":
           require('lang/de.php');		
       break;	
       
       default: 
           require('lang/hu.php');		
    }
}
else
{
    $_SESSION['lang'] = "hu";
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}
?>
<!doctype html>
<html lang="hu">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="src\css\style.css">
    <link rel="stylesheet" href="src\css\carousel.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   
    <!-- Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

    <title>Capacity Sharing</title>
    <link rel="shortcut icon" href="src/images/ico/favicon.ico">

  </head>
  <body>
   
  

                <?php 
                    include("src/navbar.php");
                    //<!-- Script Cookie-->
                    include("src/cookie.html");
                    //<!-- Script Cookie-->
                    
                ?>



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://bmamissions.org/wp-content/uploads/2019/04/architecture-buildings-factory-247763-e1555609735349-1200x480.jpg" alt="First slide">
      <div class="container">
              <div class="carousel-caption text-left">
                <h1>Capacity Sharing</h1>
                <p><?=$lang['band'];?></p>
                <p><a class="btn btn-lg btn-success" href="login.php" role="button"><?=$lang['reg'];?></a></p>
              </div>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.tifast.com/wp-content/uploads/2019/04/IMG_20190213_145935-1200x480.jpg" alt="Second slide">
      <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p></p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 center_img" src="src\images\sample_01.jpg" alt="Third slide">
      <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 
        <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col col-lg-12">
                            <h2 class="text-center" id="demo">
                            <div id="cont">
                                <p><?=$lang['index-welcome'];?></p>
                             </div>
                            </h2>
                            <hr>
                        <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="center">
                                        <i class="fas fa-chart-line icon" style="font-size:60px;color:#52b6ec"></i>
                                        <h4> <?=$lang['k1'];?> </h4>
                                        </div>
                                </div><!--/.col-md-4-->
                                <div class="col-md-4 col-sm-6">
                                    <div class="center">
                                        <i class="fas fa-globe icon" style="font-size:60px;color:#52b6ec"></i>
                                        <h4 > <?=$lang['k2'];?> </h4>
                                    </div>
                                </div><!--/.col-md-4-->
                                <div class="col-md-4 col-sm-6">
                                    <div class="center">
                                        <i class=" fas fa-industry icon" style="font-size:60px;color:#52b6ec"></i>
                                        <h4> <?=$lang['k3'];?> </h4>
                                    </div>
                                </div><!--/.col-md-4-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="center">
                                        <i class="far fa-clock icon" style="font-size:60px;color:#52b6ec"></i>
                                        <h4> <?=$lang['k4'];?> </h4>
                                    </div>
                                </div><!--/.col-md-4-->
                                <div class="col-md-6 col-sm-12">
                                    <div class="center">
                                        <i class="fas fa-landmark icon" style="font-size:60px;color:#52b6ec"></i>
                                        <h4 > <?=$lang['k5'];?> </h4>
                                    </div>
                                </div><!--/.col-md-4-->
                            </div><!--/.row-->

                    </div><!-- col-->
                </div><!-- box-->
            </div>  <!-- row-->
            <br>
            
        </div><!-- jumbotron-->     

    </div><!-- Container-->

    <?php include("src/footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>