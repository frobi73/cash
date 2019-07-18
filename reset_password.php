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

	<link rel="stylesheet" href="src\css\style.css">
	
	<link rel="stylesheet" href="src\css\login.css">


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
                <?php 
                    include("src/navbar.php");
                    //<!-- Script Cookie-->
                    include("src/cookie.html");
                    //<!-- Script Cookie-->
                ?>

        <div class="jumbotron">
        	<div class="container">
					<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" > 

                            <?php

                                    include('secure/src/db_config.php');

                                    $email = htmlspecialchars($_GET['email']);
                                    $code = htmlspecialchars($_GET['code']);

                                    if (isset($_GET['email'], $_GET['code'])) {
                                        if ($stmt = $con->prepare('SELECT * FROM accounts WHERE email = ? AND pwd_reset_token = ?')) 
                                        {
                                            $stmt->bind_param('ss', $_GET['email'], $_GET['code']);
                                            $stmt->execute();
                                            $stmt->store_result();
                                            if ($stmt->num_rows > 0) 
                                            {
                                                echo '<h1>Reset password</h1>

                                                        <div class="input-group">
                                                            <label for="reset-password"><i class="fas fa-lock"></i></label>
                                                            <input type="password" class="form-control" name="reset-password" placeholder="New password" id="reset-password" Required>
                                                        </div> <!-- input group -->
                            
                                                        <div class="input-group">
                                                            <label for="reset-password"><i class="fas fa-lock"></i></label>
                                                            <input type="password" class="form-control name="confirm-password" placeholder="Confirm new password" id="confirm-password" Required>
                                                        
                                                        </div><!-- input group -->
                                                        
                                                        <div class="input-group">
                                                                <input type="submit" name="btn-forgot" id="forgot-password" value="Elküld" class="btn btn-success btn-block">
                                                        </div> <!-- input grup -->';
                                            }
                                            else {
                                                echo 'This account does not exist';
                                            }
                                        }
                                    }

                                    //This code runs if the form has been submitted
                                    if (isset($_POST['submit-password']) && $_SERVER['REQUEST_METHOD'] == 'POST' )
                                    {
                                        if($_POST['reset-password'] != $_POST['confirm-password']) {
                                            die("Password and Confirm Password doesn't match");
                                        }
                                        
                                    // if(!empty($_POST["submit-password"])) { // && (!empty($_POST["reset-password"]) && (!empty($_POST["confirm-password"]))) { 
                                        //&& $_POST['password'] == $_POST['confirm'])) {

                                            //$sql = $mysqli->query("UPDATE users SET password='$pass' WHERE email = '$email'");
                                            
                                            //$sql = ('UPDATE accounts SET password = ?, pwd_reset_token = ' . 'reseted' . 'WHERE email = ?');
                                        // $sql = ('UPDATE accounts SET password = ? WHERE email = ?');
                                        $sql = ('UPDATE accounts SET pwd_reset_token = "reseted", password = ? WHERE email = ?');
                                            Echo 'SQL Command: ' . $sql;
                                            if ($stmt = $con->prepare($sql)) {
                                                //Echo "Update SQL with stmt was prepared";
                                                // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
                                            $password = password_hash($_POST['reset-password'], PASSWORD_DEFAULT);
                                            // $email = 'cash@fr-demo.xyz'; //$_POST["email"];
                                                //Echo "Before bind_param";
                                            $stmt->bind_param('ss', $password,$email);
                                            // $stmt->bind_param('ss', 'frdemo', 'cash@fr-demo.xyz');
                                            Echo "After bind_param";
                                                $stmt->execute();
                                                
                                                /* $sql = 'SELECT * FROM accounts ' . $condition;
                                                $result = mysqli_query($con,$sql);
                                                $user = mysqli_fetch_array($result); */
                                                
                                                echo 'New password created!';
                                                $stmt->close();
                                            } 
                                            else {
                                                Echo "Else Statement Running";
                                            }   
                                    }
                                    ?>
                            <div class="error">

                            </div></div> <!-- error -->
					</form> <!-- input form -->
    		</div><!-- Container-->
		</div><!-- jumbotron-->    

    <?php include("src/footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>



            
</body>
</html>