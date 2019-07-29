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
            </div><!-- container-->     
        </div><!-- jumbotron-->     

        <div class="jumbotron">    
            <div class="container">      
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

                                if(!isset($_POST['daterange'])) { $datum = date("Y/m/d") + ' - ' + date("Y/m/d");}
                                else{ $datum=$_POST['daterange'];}

                                $dates = explode(" - ", $datum);
                                $startdate = $dates[0];
                                $enddate = $dates[1];


                                echo $text, $Country,$City,$Ipar,$Eroforras, $startdate, " - ", $enddate;


                                include("src/db_config_test.php");

                                // keresés után regisztáljon
                                //aznap legyel letiltva
                                $sql="SELECT * FROM products WHERE products.product_name = '$text' AND products.product_id NOT IN (SELECT products.product_id FROM not_available INNER JOIN products ON products.product_id = not_available.product_id WHERE products.product_name = '$text' AND not_available.product_id = products.product_id AND '$startdate'<= not_available.end_date AND '$enddate' >= not_available.start_date);";
                                $result = $con->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo $row["product_name"]. "<br>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                                $con->close();
                            }
                        ?>
                </div>  <!-- div - kereses eredmeny-->   
                </div><!-- container-->     
        </div><!-- jumbotron-->     


    <?php include("src/footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>