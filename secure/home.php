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

                <!--Projects section v.4-->
                        <section>

                        <!--Section heading-->
                        <h2 class="h1-responsive font-weight-bold text-center my-5"> </h2>
                        <!-- Section description -->
                        <p class="grey-text text-center w-responsive mx-auto mb-5"> </p>

                        <!--Grid column-->
                        <div class="col-md-12 mb-4">
                                <div class="card card-image" id="kep" style="background-image: url(https://img.freepik.com/free-vector/beautiful-watercolor-background_62951-42.jpg?size=626&ext=jpg);">
                                <h3 class="card-title py-3 font-weight-bold center" style="color:black"><strong> Hírek </strong></h3>
                                            

                                            <table class="table" style="color:black">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Verzió</th>
                                                            <th scope="col">Működik</th>
                                                            <th scope="col">Ismert hibák</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                    <tr>
                                                        <td>0.9.5</td>
                                                            <td> JS not avaible részleg működik nem bugos, features.php átrendezése, stílusváltás </td>
                                                            <td>reset password hiba, aktiválás működik, de a user nem lát belőle sokat, néha bugos</td>
                                                        </tr>
                                                        <td>0.9.4</td>
                                                            <td> JS not avaible részleg! működik - 7-es ID-nél bugos </td>
                                                            <td>reset password hiba, aktiválás működik, de a user nem lát belőle sokat, néha bugos</td>
                                                        </tr>
                                                        <td>0.9.3</td>
                                                            <td>Keresőmotor működik - 100%, kedvencek elmentése 100% </td>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>0.9.0</td>
                                                            <td>Feltöltés, törlés, user adatok módosítása, kinézetek</td>
                                                            <td>új user adatok feltöltés bug, képfeltöltés bug</td>
                                                        </tr>
                                                        <tr>
                                                            <td>0.8.5</td>
                                                            <td>Keresőmotor, product.php kinézetek, funkciók, work.php  </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>0.8.0</td>
                                                            <td>Keresőmotor tesztelésre kész, feltöltés 50%, kedvencek elmentése </td>
                                                            <td>reset password hiba, aktiválás működik, de a user nem lát belőle sokat, néha bugos</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                </div>
                            </div>
                            <!--Grid column-->
                        <!--Grid row-->
                        <div class="row mx-1">

                            <!--Grid column-->
                            <div class="col-md-12 mb-4">
                                <div class="card card-image" id="kep" style="background-image: url(https://momentumdevelopments.ca/wp-content/uploads/2018/07/andrew-seaman-552850-unsplash.jpg);">
                                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                        <div>
                                            <h1><i class="fas fa-search"></i><strong>  <?=$lang['t1'];?> </strong></h1>
                                            <h3 class="card-title py-3 font-weight-bold"><strong><?=$lang['d1'];?> </strong></h3>
                                            <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                                Odit sed qui, dolorum!</p>
                                            <a class="btn btn-success btn-rounded btn-lg " href="search.php" id="grad"><i class="far fa-clone left"></i> Keresés </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-4">
                                <div class="card card-image"id="kep" style="background-image: url(https://cdn.pixabay.com/photo/2015/05/21/03/10/lights-776457_960_720.jpg);">
                                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                        <div>
                                            <h6 class="pink-text"><i class="fas fa-upload"></i><strong> <?=$lang['t2'];?></strong></h6>
                                            <h3 class="card-title py-3 font-weight-bold"><strong><?=$lang['d2'];?></strong></h3>
                                            <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                                Odit sed qui, dolorum!</p>
                                            <a class="btn btn-success btn-rounded btn-lg"  href="profil.php?cur_tab=new_resource" id="grad"><i class="far fa-clone left"></i> Feltöltés</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-4">
                                <div class="card card-image" id="kep" style="background-image: url(https://images.pexels.com/photos/949587/pexels-photo-949587.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=627&w=1200);">
                                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                        <div>
                                            <h6 class="green-text"><i class="far fa-eye"></i><strong><?=$lang['t3'];?></strong></h6>
                                            <h3 class="card-title py-3 font-weight-bold"><strong><?=$lang['d3'];?> </strong></h3>
                                            <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                                Odit sed qui, dolorum!</p>
                                            <a class="btn btn-success btn-rounded btn-lg" id="grad"><i class="far fa-clone left"></i> Előfizetés</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        </section>
                        <!--Projects section v.4-->
            </div><!-- Container-->

            
        </div><!-- jumbotron--> 


    <?php include("src/sec_footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>