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


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
 

    <link rel="stylesheet" type="text/css" href="src/data.css"/>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <script src="src/dropzone.js"></script>

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
            <div class="container" style="margin-top:30px">
                <div class="row">
                   
                    <?php 
                        $useragent=$_SERVER['HTTP_USER_AGENT'];

                        function isMobile() {
                            return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
                        }
                        if(!isMobile()){
                            include("src/menu.php");
                        }      
                        if(isset( $_GET["cur_tab"]))
                        {
                            $menupont = $_GET["cur_tab"];
                        }
                        else{
                            $menupont="data";
                        }
                    
                        switch ($menupont) {
                            case "data":
                                    include("src/user_data.php");
                                break;
                            case "new_resource":
                                    include("src/new_resource.php");
                                break;
                            case "my_dates":
                                    include("src/my_dates.php");
                                break;
                            case "delete_resource":
                                    include("src/delete_resource.php");
                                break;
                            case "my_bookings":
                                    include("src/my_bookings.php");
                                break;
                            case "my_resources":
                                    include("src/my_resources.php");
                                break;
                            case "subscriptions":
                                    include("src/subscriptions.php");
                                break;
                            case "favourites":
                                    include("src/favourites.php");
                                break;
                            case "invite_member":
                                include("src/invite_member.php");
                            break;

                            default:
                                include("src/user_data.php");
                        }
                    ?>

            </div>
        </div>
    </div><!-- Container-->


    <?php include("src/sec_footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>