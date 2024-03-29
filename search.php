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
                <form action="search.php" method="post">     
                     <div class="card">
                        <div class="card-body">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text icon"  id="grad" id="addon-wrapping"><i class="fas fa-search"></i></span>
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
                                        
                                        <input type="text" class="form-control" name="daterange" id="daterange" 
                                        value="<?php if(isset($datum)){echo $datum;}else{echo date("Y/m/d");}  ?>" style="text-align:right" />

                                        <script>
                                               var today = new Date();
                                               var next_month = new Date();
                                               var currentMonth = next_month.getMonth();
                                               next_month.setMonth(currentMonth + 2);
                                               $('#daterange').daterangepicker({
                                                    //"format": 'DD/MM/YYYY'
                                                    "startDate": today,
                                                    "endDate": today,
                                                    "minDate": today,
                                                    "maxDate": next_month,
                                                    "opens": "center",
                                                    "locale": {
                                                        "format": "YYYY/MM/DD",
                                                        "separator": " - ",
                                                    }
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
                            <button type="button" class="btn btn-block btn-success" id="grad" data-toggle="modal" data-target="#myModal">Keresés</button>
                        </div><!-- card-body--> 
                    </div><!-- card-->   
                </form><!-- form-->         

               

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body">
                                <p>A keresés funkció csak regisztrált felhasználóknak működik.
                                                <br>
                                    <a href="login.php">Kattins ide</a>, hogy regisztálj.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" id="grad" data-dismiss="modal">Close</button>
                            </div>
                        </div><!-- Modal content-->

                    </div><!-- Modal dialog-->
                </div><!-- Modal-->

                </div><!-- container-->     
        </div><!-- jumbotron-->     


    <?php include("src/footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>