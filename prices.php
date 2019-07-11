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
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="src\style.css">

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
   
    <div class="brand">
      Capacity Sharing
    </div>
    <div class="brand brand-bar" >
        <?=$lang['band'];?>
    </div>

                    <?php 
                        include("src/navbar.php");
                        //<!-- Script Cookie-->
                        include("src/cookie.html");
                        //<!-- Script Cookie-->
                    ?>

            <div class="container">
                <div class="jumbotron">

                    <div class="box">
                    <div class="center gap">
                            <h2 class="center">
                            <?=$lang['demo'];?>

                            </h2><hr>
                            <p class="lead"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo reprehenderit magni.
                                 Sapiente similique assumenda a, praesentium rerum nulla tenetur animi, earum esse culpa explicabo corporis sed eum, commodi qui? 
                                 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae eveniet magni eum commodi quis unde, ea id ipsa nemo tempore 
                                 quod repudiandae quasi sunt recusandae nisi? Alias minima quis veniam?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore deleniti alias quae fugit sunt iste ducimus deserunt iusto quia 
                                perspiciatis ad, praesentium enim, consequatur distinctio sit, illum recusandae!</p>
                        </div><!--/.center-->
                    </div>

                    <div class="card-deck">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title center">Basic</h5>
                                        
                                        <ul class="plan">
                                            <li class="plan-price">$0.99</li>
                                            <li>15 eszköz egyszeri hirdetése</li>
                                            <li>havi 50 üzlet kötése</li>
                                            <li>Lorem</li>
                                            <li>Ipsum</li>
                                            <li>meg ami kell</li>
                                            <li class="plan-action"><a href="register.php" class="btn btn-primary btn-lg">Előfizetés</a></li>
                                         </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title center">Standard</h5>
                                        <ul class="plan">
                                            <li class="plan-price">$1.99</li>
                                            <li>25 eszköz egyszeri hirdetése</li>
                                            <li>havi 150 üzlet kötése</li>
                                            <li>Lorem</li>
                                            <li>Ipsum</li>
                                            <li>meg ami kell</li>
                                            <li class="plan-action"><a href="register.php" class="btn btn-primary btn-lg">Előfizetés</a></li>
                                         </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title center">Extra</h5>
                                        <ul class="plan">
                                            <li class="plan-price">$3.99</li>
                                            <li>150 eszköz egyszeri hirdetése</li>
                                            <li>havi unlimited üzlet kötése</li>
                                            <li>Lorem</li>
                                            <li>Ipsum</li>
                                            <li>meg ami kell</li>
                                            <li class="plan-action"><a href="register.php" class="btn btn-primary btn-lg">Előfizetés</a></li>
                                         </ul>
                                </div>
                            </div>
                    </div><!-- card deck-->


                    <br>
                    

                </div><!-- jumbotron-->
            </div><!-- Container-->
 



            <?php include("src/footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>