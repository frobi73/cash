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

    <title>Capacity Sharing</title>
    <link rel="shortcut icon" href="src/images/ico/favicon.ico">

  </head>
  <body>
   

 
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="card center" style="text-align:center;">
                    
                    <?php
                        include('src/db_config.php');
                        $email = htmlspecialchars($_GET['email']);
                        $code = htmlspecialchars($_GET['code']);
                        //echo $email,$code;
                        // First we check if the email and code exists...
                        if (isset($_GET['email'], $_GET['code'])) {
                            if ($stmt = $con->prepare('SELECT * FROM accounts WHERE email = ? AND activation_code = ?')) {
                                $stmt->bind_param('ss', $_GET['email'], $_GET['code']);
                                $stmt->execute();
                                // Store the result so we can check if the account exists in the database.
                                $stmt->store_result();
                                if ($stmt->num_rows > 0) {
                                    // Account exists with the requested email and code.
                                    if ($stmt = $con->prepare('UPDATE accounts SET activation_code = ? WHERE email = ? AND activation_code = ?')) {
                                        // Set the new activation code to 'activated', this is how we can check if the user has activated their account.
                                        $newcode = 'activated';
                                        $stmt->bind_param('sss', $newcode, $_GET['email'], $_GET['code']);
                                        $stmt->execute();

                                        $stmt = $con->prepare('SELECT account_ID, username FROM accounts  WHERE email ="' . $email . '" ');
                                        $stmt->execute();
                                                $_SESSION['loggedin'] = TRUE;
                                                $_SESSION['name'] =  $stmt['username'];
                                                $_SESSION['id'] =  $stmt['account_ID'];
                                        echo    'Your account is now activated, you can now login!<br>
                                                <a href="home.php">Login</a>';
                                    }
                                } else {
                                    echo 'The account is already activated or doesn\'t exist!';
                                }
                            }
                        }
                    ?>
                    </div>
                </div>  <!-- row-->            
            </div><!-- Container--> 
        </div><!-- jumbotron-->     


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>