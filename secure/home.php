<?php 
    session_start();

    if( $_SESSION['loggedin'] != TRUE)
    {
        session_unset();
        session_destroy();
        header('Location:'. base_url(TRUE));   
    }

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

    <link rel="stylesheet" href="src\style.css">
    <link rel="stylesheet" href="src\carousel.css">


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

    <title>Capacity Sharing - Home</title>
    <link rel="shortcut icon" href="src/images/ico/favicon.ico">

  </head>
  <body>
   
    
                <?php 
                    include("src/sec_navbar.php");
                    //<!-- Script Cookie-->
                    include("src/cookie.html");
                    //<!-- Script Cookie-->
                    
                ?>


        <div class="jumbotron">
            <div class="container">
                <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" id="kep" src="https://lh3.googleusercontent.com/cWya94a6c4wHBHh-cRL7j0-ZyKojkayvlgVw6YJYvkzYnXgHHb2woDLAT7nEuYLQ7Ua3SJS7RxCYlYqiJ1JcfYS8=w640-h480-p" alt="01 img">
                                <div class="card-body">
                                    <h5 class="card-title"> <?=$lang['t1'];?> </h5>
                                    <p class="card-text" >  <?=$lang['d1'];?> </p>
                                    <a href="upload.php" class="btn btn-primary btn-block"> Keress </a>
                                </div>
                            </div> <!-- card-->
                            <div class="card">
                                <img class="card-img-top" id="kep" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/W_50_L_Blau.jpg/280px-W_50_L_Blau.jpg" alt="02 img">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$lang['t2'];?> </h5>
                                    <p class="card-text">  <?=$lang['d2'];?> </p>
                                  <a href="upload.php" class="btn btn-primary btn-block"> Upload </a>
                                </div>
                            </div><!-- card-->
                            <div class="card">
                                <img class="card-img-top" id="kep" src="https://cdn-images-1.medium.com/max/814/1*pempph-OAqpRKG5v1-yisg@2x.png" alt="03 img">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$lang['t3'];?> </h5>
                                    <p class="card-text">  <?=$lang['d3'];?> </p>
                                    <a href="prices.php" class="btn btn-primary btn-block"> Upload </a>
                                    
                                </div>
                            </div><!-- card-->
                </div> <!-- card deck-->
            </div><!-- Container-->
        </div><!-- jumbotron--> 


    <?php include("src/sec_footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>