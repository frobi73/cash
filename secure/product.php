<?php 
    session_start();

    if( $_SESSION['loggedin'] != TRUE)
    {
        session_unset();
        session_destroy();
        header('Location:'. base_url(TRUE));   
    }
    else
    {
        if(isset($_GET["_ID"])) // ha megkapja a get-tel a változókat
        {
            $atadott_id = $_GET["_ID"];
        }   
        else // ha nem kapja meg, akkor az error.php-ra irányítja át
        {
            header('Location: error.php');
        }

        if(isset($_GET["startdate"])) // ha megkapja a get-tel a változókat
        {
            $def_start = $_GET["startdate"];
        }   
        else // ha nem kapja meg, akkor az error.php-ra irányítja át
        {
            header('Location: error.php');
        }

        if(isset($_GET["enddate"])) // ha megkapja a get-tel a változókat
        {
            $def_end = $_GET["enddate"];
        }   
        else // ha nem kapja meg, akkor az error.php-ra irányítja át
        {
            header('Location: error.php');
        }
        if(isset($_SESSION['lang'])) // -> nyelvi beállítás <- lehet nem ide kell, hanem előrébb, mivel újra tölti az oldalt -> nézd meg, hátha a password php-nál is ez a baj !!!!
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
    <link rel="stylesheet" type="text/css" href="src\datepicker\daterangepicker.css" />

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

    <title>Capacity Sharing - Product </title>
    <link rel="shortcut icon" href="src/images/ico/favicon.ico">

  </head>
  <body>
                <?php 
                    
                    include("src/sec_navbar.php");     
                    
                    include("src/db_config.php");
                    $sql = 'CALL(PRODUCT_DATA(?)';
                    if ($stmt = $con->prepare('CALL PRODUCT_DATA(?)')) 
                    {
                      $stmt->bind_param('i', $atadott_id);
                      $stmt->execute();
                      $stmt->store_result(); 
                    }
                    if ($stmt->num_rows > 0) 
                    {
                            $stmt->bind_result( $company_Name, $company_ID, $Country,$rating,$town ,$product_ID,
                                                $product_Name,$product_type,$information );
                            $stmt->fetch();
                    }
                    else 
                    {
                        printf("Query failed: %s\n", $con->error);
                    }
                ?>

        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    
                    <div class="col col-md-4 order-md-1 card">
                        <!-- kepek-->

                        <div class="card">
                            <img src="primary_image">
                            <!-- itt alatta 4 másik - ugya a négy megengedett - modal gallery formában <-> alatta az árak, stb -->
                        </div>
                        
                        <div class="">
                            <?php
                                echo '
                                    <div>
                                            <h4 style="margin-top:20px !important">Price: ' . $product_type.' $/day </h4>
                                            <hr style="margin-top:0px;margin-bottom:0px;">

                                    </div>
                                    ';
                            ?>
                        </div>

                    </div>

                    <div class="col-md-8 order-md-1 card">
                        
                        <?php
                            echo '
                                <div>
                                        <h4 style="margin-top:20px !important">' .$product_Name . '</h4>
                                        <hr style="margin-top:0px;margin-bottom:0px;">
                                        <p class="text-muted">' . $Country . ', ' . $town . ', ' . $company_Name . ' - ' .  $rating. '/5 &#9733; </p>

                                        <p style="text-align:justify"> '.$information.'</p>
                                </div>
                                ';
                        ?>

                    </div>
                   
                </div> <!-- row-->

                <div class="row">
               
                <div class="col-md-8 order-md-1 card">
                        <div class="form-group ">
                                        <label for="daterange">Időszak</label>
                                        
                                        <input type="text" class="form-control" name="daterange" id="daterange" 
                                        value="<?php echo $def_start, $def_end;?>" style="text-align:right" />

                                        <script>
                                               var today = new Date();
                                               var next_month = new Date();
                                               var currentMonth = next_month.getMonth();
                                               next_month.setMonth(currentMonth + 2);
                                               var some_date_range = [
                                                        '2019-08-14',
                                                        '2019-08-20',
                                                        '2019-08-21',
                                                        '2019-08-22'
                                                        ];
                                               $('#daterange').daterangepicker({
                                                    //"format": 'DD/MM/YYYY'
                                                    "alwaysShowCalendars": true,
                                                    "inline": true,
                                                    "startDate": "<?php echo $def_start; ?>",
                                                    "endDate": "<?php echo $def_end; ?>",
                                                    "minDate": today,
                                                    "maxDate": next_month,
                                                    "opens": "center",
                                                    "locale": {
                                                        "format": "YYYY/MM/DD",
                                                        "separator": " - ",
                                                        "firstDay": 1
                                                    },
                                                    //onSelect: triggerOnStartSelect(),
                                                    "isInvalidDate": function(date) 
                                                    {
                                                        for(var i = 0; i < some_date_range.length; i++)
                                                        {
                                                            if (date.format('YYYY-MM-DD') == some_date_range[i])
                                                            {
                                                                return true;
                                                            }
                                                        }
                                                    }
                                                    
                                                    }, function(start, end, label) {
                                                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
                                                });

                                                //TODO: Ellenőrzés a disabled dátumokra
                                        </script>

                                </div><!--form group-->
                            </div>
                     <div class="col col-md-4 order-md-1 card">
                       
                        
                        <div class="">
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"> 
                            <?php
                                echo '
                                    <div>
                                            <h4 style="margin-top:20px !important">Price: ' . $product_type.' $/day </h4>
                                            <hr style="margin-top:0px;margin-bottom:0px;">

                                    </div>
                                    ';
                                      
                                    include("src/db_config.php");

                                    if ($stmt = $con->prepare('CALL WISHLIST_CHECK(?,?);')) 
                                            {
                                                $stmt->bind_param('ii', $_ID, $product_ID);
                                                $stmt->execute();
                                                $stmt->store_result(); 
                                            }
                                            if ($stmt->num_rows > 0) 
                                            {
                                                    $stmt->bind_result( $result);
                                                    $stmt->fetch();
                                            }
                                            else 
                                            {
                                                printf("Query failed:", $con->error);
                                            }
                                        if($result == 1)
                                        {
                                            echo '<button type="submit" class="btn btn-success btn-block" name="btn_delete" > 
                                                        Delete from Wishlist
                                                    </button>';
                                        }
                                        else
                                        {
                                            echo '<button type="submit" class="btn btn-success btn-block" name="btn_wish" > 
                                                    Add to Wishlist
                                                    </button>';
                                        }

                                    if($_SERVER['REQUEST_METHOD'] == 'POST') 
                                    {
                                        if (isset($_POST['btn_wish']))
                                        {
                                            $_ID = $_SESSION["id"];
                                            echo $_ID,$product_ID;
                                            if ($stmt = $con->prepare('CALL WISHLIST_INSERT(?,?)')) 
                                            {
                                                $stmt->bind_param('ii', $_ID, $product_ID);
                                                $stmt->execute();
                                                $stmt->store_result(); 
                                            }
                                            else 
                                            {
                                                printf("Query failed:", $con->error);
                                            }
                                        }
                                        if (isset($_POST['btn_delete']))
                                        {
                                            $_ID = $_SESSION["id"];
                                            echo $_ID,$product_ID;
                                            if ($stmt = $con->prepare('CALL WISHLIST_DEL(?,?);')) 
                                            {
                                                $stmt->bind_param('ii', $_ID, $product_ID);
                                                $stmt->execute();
                                                $stmt->store_result(); 
                                            }
                                            else 
                                            {
                                                printf("Query failed:", $con->error);
                                            }
                                        }
                                    }                            
                                ?>


                                </form>
                                    <hr>
                                <button type="submit" class="btn btn-warning btn-block" name="btn_wish" > 
                                     Tovább
                                </button>



                        </div>

                    </div>

                

                </div> <!-- row-->
            </div><!-- Container-->

            
        </div><!-- jumbotron--> 


    <?php include("src/sec_footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>