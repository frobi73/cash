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

    <link rel="stylesheet" href="src\css\style.css">
        
    <link rel="stylesheet" href="src\css\features.css">

    <link rel="stylesheet" type="text/css" href="src\datepicker\daterangepicker.css" />

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

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>

    <script type="text/javascript" src="src/varos.js"></script>

    <script type="text/javascript" src="src\datepicker\moment.min.js"></script>

    <script type="text/javascript" src="src\datepicker\daterangepicker.js"></script>
    

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

        <div class="jumbotron">
            <div class="container">

            <!-- Projects section v.3 -->
                    <section class="my-5">

                    <!-- Section heading -->
                    <h2 class="h1-responsive font-weight-bold text-center my-5">Milyen előnyöket kínálunk önnek ?</h2>
                    <!-- Section description -->
                    <p class="grey-text text-center w-responsive mx-auto mb-5"></p>

                    <!-- Grid row -->
                    <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-5 mb-lg-0 mb-5">
                        <!--Image-->
                        <img src="https://image.shutterstock.com/image-photo/business-partnership-meeting-concept-image-600w-407664883.jpg" alt="Sample project image" class="img-fluid z-depth-4 rounded">
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-7">

                        <!-- Grid row -->
                        <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fas fa-book fa-2x cyan-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3"> Új megbízások szerzése </h5>
                            <p class="grey-text">  
                                                Új üzleti partner, beszállító szerzése.
                                                Új szaktudás, vagy kompetencia elérése
                        </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fas fa-globe fa-2x red-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Globális, nemzetközi piacra lépés lehetősége</h5>
                            <p class="grey-text">
                                                    Új iparágak felé történő nyitás, és innovatív technológiák kipróbálásának lehetősége
                                                    </p>
                        </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                        <div class="col-md-1 col-2">
                            <i class="fas fa-users fa-2x deep-purple-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Üzleti közösség</h5>
                            <p class="grey-text mb-0">  Véleményével alakíthatja, befolyásolhatja az üzleti közösséget, valamint jelenlegi és jövőbeni üzleti trendeket ismerhet meg. </p>
                        </div>
                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <hr class="my-5">

                    <!-- Grid row -->
                    <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-7">

                        <!-- Grid row -->
                        <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fas fa-business-time fa-2x indigo-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Jobb időbeosztás</h5>
                            <p class="grey-text">Ajánlatkérések megválaszolására fordított idő a töredékére csökken</p>
                        </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fas fa-handshake fa-2x pink-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3"> Több lehetőség</h5>
                            <p class="grey-text">Új ügyfelek, megbízások szerzése leegyszerűsödhet.</p>
                        </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row mb-lg-0 mb-5">
                        <div class="col-md-1 col-2">
                            <i class="fa fa-thumbs-up fa-2x blue-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3"> Eredményesebb Munkavégzés </h5>
                            <p class="grey-text mb-0">Munkatársait folyamatosan tudja foglalkoztatni, eszközeit eredményesebben tudja kihasználni.</p>
                        </div>
                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-5">
                        <!--Image-->
                        <img src="https://image.shutterstock.com/image-photo/close-industrial-view-oil-refinery-600w-549195883.jpg" alt="Sample project image" class="img-fluid z-depth-4 rounded">
                    </div>
                    <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    </section>
                    <!-- Projects section v.3 -->
            <div class="row">
                    <div class="box">
                        <div class="col col-lg-12">
                                <h2 class="text-center">
                                    
                                </h2>
                                <hr>
                            <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="center">
                                        <ul>
                                                  
                                                    
                                            </ul>
                                        </div>
                                    </div><!--/.col-md-4-->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="center">
                                            <ul>
                                                   
                                                    <li> </li>
                                                    <li> </li>
                                                    <li> </li>
                                            </ul>
                                        </div>
                                    </div><!--/.col-md-4-->
                                </div><!--/.row-->

                        </div><!-- col-->
                    </div><!-- box-->
                </div>  <!-- row-->    
            </div><!-- container-->     
        </div><!-- jumbotron-->     



    <?php include("src/footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>