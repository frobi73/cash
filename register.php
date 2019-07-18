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
<!DOCTYPE html>
<html>
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


                <div class="login">
                    <div class="container">
                              <h1>Register</h1>

                                <form action="src/first_register.php" method="post">
                                  
                                  <label for="firstname">
                                    <i class="fas fa-user"></i>
                                  </label>
                                  <input type="text" name="firstname" placeholder="First Name" id="firstname" required>
                                  
                                  <label for="lastname">
                                    <i class="fas fa-users"></i>
                                  </label>
                                  <input type="text" name="lastname" placeholder="Last Name" id="lastname" required>
                                  
                                  <label for="password">
                                    <i class="fas fa-lock"></i>
                                  </label>
                                  <input type="password" name="password" placeholder="Password" id="password" required>
                                  
                                  <label for="password_again">
                                    <i class="fas fa-key"></i>
                                  </label>
                                  <input type="password" name="password_again" placeholder="Password again" id="password_again" required>
                                  
                                  <label for="email">
                                    <i class="fas fa-envelope"></i>
                                  </label>
                                  <input type="email" name="email" placeholder="e-mail" id="email" required>
                                  

                                  <input type="submit" value="Register" name="register_user">
                                
                                
                                </form>

                                <div class="row">
                                  <div class="col col-lg-6 center">
                                    <a href="index.php"> 
                                      <i class="fas fa-arrow-alt-circle-left"></i>
                                      Go back 
                                    </a> 
                                  </div> <!-- col-->
                                <div class="col col-lg-6 center">
                                    <a href="forgotPassword.php">User Agreements 
                                    <i class="fas fa-unlock-alt"></i>
                                    </a> 
                                </div> <!-- col-->
                          
                          <div class="container error center">
                          
                            <?php

                                if(isset($_POST['login_user'])) 
                                {
                                  include('src/db_config.php');

                                  session_start();

                                  // Now we check if the data from the login form was submitted, isset() will check if the data exists.
                                    if ( !isset($_POST['username'], $_POST['password']) ) 
                                    {
                                      // Could not get the data that should have been sent.
                                      die ('Please fill both the username and password field!');
                                    }

                                  // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
                                    if ($stmt = $con->prepare('SELECT account_ID, password FROM accounts WHERE username = ?')) 
                                    {
                                      // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
                                      $stmt->bind_param('s', $_POST['username']);
                                      $stmt->execute();
                                      // Store the result so we can check if the account exists in the database.
                                      $stmt->store_result();
                                      
                                    }

                                    if ($stmt->num_rows > 0) 
                                    {
                                      $stmt->bind_result($id, $password);
                                      $stmt->fetch();

                                      // Account exists, now we verify the password.
                                      if (password_verify($_POST['password'], $password)) 
                                      {
                                        // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
                                        session_regenerate_id();
                                        $_SESSION['loggedin'] = TRUE;
                                        $_SESSION['name'] = $_POST['username'];
                                        $_SESSION['id'] = $id;
                                        //echo 'Welcome ' . $_SESSION['name'] . '!';
                                        header('Location: secure/home.php');
                                      } 
                                      else 
                                      {
                                        $message = 'Incorrect username or password!';
                                      }
                                    } 
                                    else 
                                    {
                                      $message = 'Incorrect username or password!';
                                    }
                                    echo "<div class=\"error\">";
                                      echo $message;
                                    echo "</div>";

                                  $stmt->close();
                                }
                              ?>
                          </div> <!-- error -->
                        </div> <!-- row-->
                    </div> <!-- container-->
                </div> <!-- login-->
  
</body>
</html>