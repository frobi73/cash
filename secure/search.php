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
   
  

                <?php 
                    include("src/sec_navbar.php");
                    //<!-- Script Cookie-->
                    include("src/cookie.html");
                    //<!-- Script Cookie-->
                    
                ?>


        <div class="jumbotron">    
            <div class="container">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">     
                     <div class="card">
                        <div class="card-body">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text icon" id="grad" id="addon-wrapping"><i  class="fas fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" name="keres" placeholder="Keresés" id="keres" aria-describedby="addon-wrapping">
                            </div>  <!--input group //TODO: valuek átírása--> 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="select_country">  <?=$lang['country'];?> </label>
                                                <select class="form-control" id="select_country" onchange="test(this)"
                                                    name="orszag" placeholder="Ország" required>
                                                    <option selected disabled> <?=$lang['country'];?> </option>
                                                    <option value="Ungarn">Magyar</option>
                                                    <option value="Deutschland"> Deutschland</option>   
                                                    <option value="Osterreich"> Österreich</option>  
                                                </select>      
                                </div> <!--form group-md-6-->
                                <div class="form-group col-md-6">
                                    <label for="placeholder"> <?=$lang['city'];?></label>
                                        <div id="some_div">

                                        </div> <!--some div-->
                                        <div class="form-group" id="select_city" style="margin-bottom: 0px;">
                                            <select class="form-control"  name="varos" id="placeholder">
                                                <option selected disabled> <?=$lang['city'];?></option>
                                            </select>
                                        </div>  <!--from group - select city -->
                                </div><!--from group col-md-6-->
                            </div> <!--from row--> 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Iparag"><?=$lang['ipar'];?></label>
                                        <select class="form-control" id="selection" name="Iparag" placeholder="Iparág">
                                                <option value="0" selected disabled>  <?=$lang['ipar'];?></option>
                                                <option value="1" > <?=$lang['ipar_1'];?> </option>
                                                <option value="2" > <?=$lang['ipar_2'];?></option>
                                                <option value="3" > <?=$lang['ipar_3'];?></option>
                                                <option value="4" > <?=$lang['ipar_4'];?></option>
                                                <option value="5" > <?=$lang['ipar_5'];?></option>
                                        </select>
                                </div> <!--form group-->
                                <div class="form-group col-md-6">
                                    <label for="Eroforras"><option value="4" > <?=$lang['capacity_1'];?></option></label>
                                        <select class="form-control" id="selection" name="Eroforras" placeholder="Erőforrás Típusa">
                                        <option value="0"  selected disabled><?=$lang['capacity_1'];?></option>
                                        <option value="1" ><?=$lang['capacity_1'];?></option>
                                        <option value="2" ><?=$lang['capacity_2'];?></option>
                                        <option value="3" ><?=$lang['capacity_3'];?></option>
                                        <option value="4" ><?=$lang['capacity_4'];?></option>
                                        <option value="5" ><?=$lang['capacity_5'];?></option>
                                        </select>
                                </div><!--form group-->
                            </div>  <!--form row-->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="daterange"><?=$lang['time'];?></label>
                                        
                                        <input type="text" class="form-control" name="daterange" id="daterange" 
                                        value="<?php if(isset($datum)){echo $datum;}else{echo date("Y/m/d");}  ?>" style="text-align:right" />

                                        <script>
                                               var today = new Date();
                                               var tomorrow = new Date();
                                                    tomorrow.setDate(today.getDate()+1);
                                               var next_month = new Date();
                                               var currentMonth = next_month.getMonth();
                                               next_month.setMonth(currentMonth + 2);
                                               $('#daterange').daterangepicker({
                                                    //"format": 'DD/MM/YYYY'
                                                    "startDate": tomorrow,
                                                    "endDate": tomorrow,
                                                    "minDate": tomorrow,
                                                    "maxDate": next_month,
                                                    "opens": "center",
                                                    "locale": {
                                                        "format": "YYYY/MM/DD",
                                                        "separator": " - ",
                                                        "firstDay": 1
                                                    },
                                                    "isInvalidDate": function(date) 
                                                    {
                                                        if (date.format('YYYY-MM-DD') == '2019-08-12') {
                                                            return true; 
                                                        }
                                                    }
                                                }, function(start, end, label) {
                                                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
                                                });
                                        </script>

                                </div><!--form group-->
                                <div class="form-group col-md-6">
                                    <label for="p"></label>   
                                    <p name="p"><i><i></p>
                                </div><!--form group-->
                            </div>  <!--form row-->
                            <!--<button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#myModal">Keresés</button>-->
                            <input type="submit" class="btn btn-block btn-success" id="grad" value =<?=$lang['search'];?>>
                        </div><!-- card-body--> 
                    </div><!-- card-->   
                </form><!-- form-->         

                <div class="kereses_eredmeny jumbotron">

                    <table id="search_table" class="table dt-responsive nowrap"  style="width:100% !important;" >
                        <thead>
                            <th data-class-name="priority" class="priority"> <?=$lang['search_bar_0'];?></th>
                            <th> <?=$lang['search_bar_1'];?></th>
                            <th> <?=$lang['search_bar_2'];?></th>
                            <th> <?=$lang['search_bar_3'];?></th>
                            <th> <?=$lang['search_bar_4'];?></th>
                            <th> <?=$lang['search_bar_5'];?></th>
                            <th> <?=$lang['search_bar_6'];?></th>
                            <th> <?=$lang['search_bar_7'];?></th>
                            
                        </thead>
                        <tbody>
                            <?php 
                                if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['keres']))
                                {
                                    if(!isset($_GET['keres'])) { $text = ""; }
                                    else{ $text = $_GET['keres'];}

                                    if(!isset($_GET['orszag'])) { $Country = ""; }
                                    else{ $Country = $_GET['orszag'];}

                                    if(!isset($_GET['varos'])) {$City = "";}
                                    else{ $City = $_GET['varos'];}
                                    
                                    if(!isset($_GET['Iparag'])){ $Ipar = 0;}
                                    else{ $Ipar = $_GET['Iparag'];}

                                    if(!isset($_GET['Eroforras'])) { $Eroforras = 0;}
                                    else{ $Eroforras=$_GET['Eroforras'];}

                                    if(!isset($_GET['daterange'])) { $datum = date("Y/m/d") + ' - ' + date("Y/m/d");}
                                    else{ $datum=$_GET['daterange'];}

                                    $dates = explode(" - ", $datum);
                                    $startdate = $dates[0];
                                    $enddate = $dates[1];

                                    $format = 'Y-m-d';
                                    $date = DateTime::createFromFormat($format, '2009-02-15');

                                    //echo $text, $Country,$City,$Ipar,$Eroforras, $startdate, " asd ", $enddate;


                                    include("src/db_config.php");

                                    // keresés után regisztáljon
                                    //aznap legyel letiltva
                                    //$sql="SELECT * FROM products INNER JOIN companies ON products.company_id = companies.company_ID WHERE companies.country = products.product_name = '$text' AND products.product_id NOT IN (SELECT products.product_id FROM not_available INNER JOIN products ON products.product_id = not_available.product_id WHERE products.product_name = '$text' AND not_available.product_id = products.product_id AND '$startdate'<= not_available.end_date AND '$enddate' >= not_available.start_date);";
                                    $sql = "CALL GetAvailableResources('$text','$startdate','$enddate','$Country','$City',$Eroforras,$Ipar)";
                                    $result = $con->query($sql);
                                    // product_ID, product_name, industries.Name AS Industry_name, product_type_name, countries.Name AS Country_Name, town_Name, company_name, rating
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {


                                            echo '<tr>';
                                                    echo "<td>";
                                                    echo'<form action="product.php" method="GET">
                                                                <a class="btn btn-block" id="btn-fav-link" href="product.php?_ID=' . $row["product_ID"] . ' &startdate=' . $startdate. ' &enddate=' . $enddate . '">'.  $row["product_name"]  . '</a>
                                                            </form>' ;
                                                    echo "</td>";

                                                    echo "<td>"; 
                                                        echo $row["Industry_name"];
                                                    echo "</td>";

                                                    echo "<td>"; 
                                                        echo $row["product_type_name"];
                                                    echo "</td>";
                                                
                                                    echo "<td>"; 
                                                        echo $row["Country_Name"];
                                                    echo "</td>";

                                                    echo "<td>"; 
                                                        echo $row["town_Name"];
                                                    echo "</td>";

                                                    echo "<td>"; 
                                                        echo $row["company_name"];
                                                    echo "</td>";
                                                
                                                    echo "<td>"; 
                                                        echo $row["rating"] . "/5 &#9733;";
                                                    echo "</td>";

                                                    echo "<td>"; 
                                                    
                                                        echo'<form action="product.php" method="GET">
                                                                <a class="btn btn-success btn-block"  href="product.php?_ID=' . $row["product_ID"] . ' &startdate=' . $startdate. ' &enddate=' . $enddate . '"> Megtekint</a>
                                                        </form>' ;
                                                    echo "</td>";
                                            echo "</tr>";

                                            
                                            
                                        }
                                    } else {
                                        echo "A beírt adatokra nincs találat.";
                                    }
                                    $con->close();
                                }
                        ?>

                        </tbody>
                </table>

                        
                </div>  <!-- div - kereses eredmeny-->   
                </div><!-- container-->     
        </div><!-- jumbotron-->     


    <?php include("src/sec_footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"/>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
 
<script>
    
    $(document).ready(function() {
        $('#search_table').DataTable();
    } );

    $('#search_table').DataTable( {
        language: 
        {
                processing:     "Working",
                search:         "<?=$lang['datatable_1'];?>",
                lengthMenu:     "asd",
                info:           "_END_ / _TOTAL_",
                infoEmpty:     "<?=$lang['datatable_4'];?>",
                infoFiltered:   "( Összesen : _MAX_ elemből)",
                infoPostFix:    "asd",
                loadingRecords: "Betöltés alatt",
                zeroRecords:    "Nincs találat",
                emptyTable:     "<?=$lang['datatable_7'];?>",
                paginate: {
                    first:      "Első",
                    previous:   "Előző",
                    next:       "Következő",
                    last:       "Utolsó"
                }
        },
        responsive: true
} );


</script>