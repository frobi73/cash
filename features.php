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
        
    <link rel="stylesheet" href="src\features.css">

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
            <div class="row">
                    <div class="col">
                        <div class="center">
                                <h2 class="center">
                                    <?= $lang['demo'];?>
                                </h2><hr>
                                <p class="lead"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo reprehenderit magni.
                                    Sapiente similique assumenda a, praesentium rerum nulla tenetur animi, earum esse culpa explicabo corporis sed eum, commodi qui? 
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae eveniet magni eum commodi quis unde, ea id ipsa nemo tempore 
                                    quod repudiandae quasi sunt recusandae nisi? Alias minima quis veniam?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore deleniti alias quae fugit sunt iste ducimus deserunt iusto quia 
                                    perspiciatis ad, praesentium enim, consequatur distinctio sit, illum recusandae!
                                </p>
                        </div>  <!-- center-->
                    </div><!-- col-->
            </div><!-- row-->
        </div><!-- jumbotron-->     
    </div><!-- Container-->
    <div class="container">
        <div class="jumbotron">    
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">     
                     <div class="card">
                        <div class="card-body">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text icon" id="addon-wrapping"><i class="fas fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" name="keres" placeholder="Keresés" id="keres" aria-describedby="addon-wrapping">
                            </div>  <!--input group-->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="select_country">Ország</label>
                                                <select class="form-control" id="select_country" onchange="test(this)"
                                                    name="orszag" placeholder="Ország" require>
                                                    <option selected disabled>Ország</option>
                                                    <option value="hu">Magyar</option>
                                                    <option value="de">Német</option>   
                                                    <option value="au">Osztrák</option>  
                                                </select>      
                                </div> <!--form group-md-6-->
                                <div class="form-group col-md-6">
                                    <label for="placeholder">Város</label>
                                        <div id="some_div">

                                        </div> <!--some div-->
                                        <div class="form-group" id="select_city" style="margin-bottom: 0px;">
                                            <select class="form-control"  name="varos" id="placeholder">
                                                <option selected disabled>Város</option>
                                            </select>
                                        </div>  <!--from group - select city -->
                                </div><!--from group col-md-6-->
                            </div> <!--from row--> 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Iparag">Iparág</label>
                                        <select class="form-control" id="selection" name="Iparag" placeholder="Iparág">
                                                <option value="0" selected disabled>Iparág</option>
                                                <option value="1" >Járműipar</option>
                                                <option value="2" >Fém és nehéz ipar</option>
                                                <option value="3" >Építőipar</option>
                                                <option value="4" >Feldolgozóipar</option>
                                        </select>
                                </div> <!--form group-->
                                <div class="form-group col-md-6">
                                    <label for="Eroforras">Erőforrás Típusa</label>
                                        <select class="form-control" id="selection" name="Eroforras" placeholder="Erőforrás Típusa">
                                        <option value="0"  selected disabled>Erőforrás típusa</option>
                                        <option value="1" >Emelőgép 1.</option>
                                        <option value="2" >Emelőgép 2.</option>
                                        <option value="3" >Földmunkagép kicsi</option>
                                        <option value="4" >Földmunkagép nagy</option>
                                        <option value="5" >CNC 1.</option>
                                        <option value="6" >CNC 2.</option>
                                        <option value="7" >Toronydarú 1.</option>
                                        <option value="8" >Toronydarú 2.</option>
                                        <option value="9" >Csomagoló gép 1.</option>
                                        <option value="10" >Csomagoló gép 2.</option>
                                        <option value="11" >Ipari robotgép</option>
                                        </select>
                                </div><!--form group-->
                            </div>  <!--form row-->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="daterange">Időszak</label>
                                        
                                        <input type="text" class="form-control" name="daterange" id="daterange" value="" style="text-align:right" />

                                        <script>
                                               var today = new Date();
                                               var next_month = new Date();
                                               var currentMonth = next_month.getMonth();
                                               next_month.setMonth(currentMonth + 2);
                                               $('#daterange').daterangepicker({
                                                    "startDate": today,
                                                    "endDate": today,
                                                    "minDate": today,
                                                    "maxDate": next_month,
                                                    "opens": "center"
                                                }, function(start, end, label) {
                                                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
                                                });
                                        </script>

                                </div><!--form group-->
                                <div class="form-group col-md-6">
                                    <label for="p">Info</label>   
                                    <p name="p"><i>A megjelenített adatok példa értékűek, valós céget, vagy eszközt nem tartalmaznak, mindössze a példa bemutatásként vannak alkalmazva.<i></p>
                                </div><!--form group-->
                            </div>  <!--form row-->
                            <input type="submit" value="Keresés" name="search_btn" class="btn btn-block btn-primary">
                        </div><!-- card-body--> 
                    </div><!-- card-->   
                </form><!-- form-->         
                <div class="kereses_eredmeny">
                        <?php 
                            
                            if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["search_btn"]))
                            {
                                if(!isset($_POST['keres'])) { $text = ""; }
                                else{ $text = $_POST['keres'];}

                                if(!isset($_POST['orszag'])) { $Country = "hu"; }
                                else{ $Country = $_POST['orszag'];}

                                if(!isset($_POST['varos'])) {$City = "Budapest";}
                                else{ $City = $_POST['varos'];}
                                
                                if(!isset($_POST['Iparag'])){ $Ipar = 0;}
                                else{ $Ipar = $_POST['Iparag'];}

                                if(!isset($_POST['Eroforras'])) { $Eroforras = 0;}
                                else{ $Eroforras=$_POST['Eroforras'];}

                                if(!isset($_POST['daterange'])) { $datum = date("d/m/Y") + ' - ' + date("d/m/Y");}
                                else{ $datum=$_POST['daterange'];}

                                echo $text, $Country,$City,$Ipar,$Eroforras, $datum;

                                include("src/db_config.php");
                            }
                        ?>
                </div>  <!-- div - kereses eredmeny-->   
        </div><!-- jumbotron-->     
    </div><!-- Container-->

    <?php include("src/footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>