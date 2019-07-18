<?php 
ob_start();
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

    <link rel="stylesheet" href="src\css\catchpa.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   
    <!-- Scripts-->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
    include("src/cookie.html");
    //<!-- Script Cookie-->
?>
  
<div class="jumbotron">
                <div class="container">
                
                <div class="card-deck">
                  <div class="card">
                          <div class="card-header">Login</div>
                          <div class="card-body">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                            <div class="input-group">
                              <label for="login_email">
                                        <i class="fas fa-user"></i>
                              </label>
                                <input id="login_email" type="text" class="form-control" name="login_email" placeholder="E-mail Cím" required>
                            </div>
                            <div class="input-group">
                              <label for="login_password">
                                        <i class="fas fa-lock"></i>
                                      </label>
                                <input id="login_password" type="password" class="form-control" name="login_password" placeholder="Password" required>
                            </div>

                            <div class="input-group">
                                <input type="submit" value="Login" name="login_user" class="btn btn-block btn-success"> 
                            </div>
                            <div class="input-group">
                                  <div class="container error center">
                                    <?php
                                        if(isset($_POST['login_user'])) 
                                        {
                                          include('secure/src/db_config.php');

                                          //session_start();
                                          // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
                                            if ($stmt = $con->prepare('SELECT account_ID, password FROM accounts WHERE email = ?')) 
                                            {
                                              // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
                                              $stmt->bind_param('s', $_POST['login_email']);
                                              $stmt->execute();
                                              // Store the result so we can check if the account exists in the database.
                                              $stmt->store_result();
                                              
                                            }

                                            if ($stmt->num_rows > 0) 
                                            {
                                              $stmt->bind_result($id, $password);
                                              $stmt->fetch();
                                              $email = $_POST['login_email'];
                                              echo $email;
                                              $sql =  "CALL ACT_CODE('$email');";
                                              $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
                                              if($result["activation_code"] != "activated") 
                                              {
                                                  $message = "User is not activated";
                                              }  
                                              else
                                              {
                                                echo "1";
                                                  // Account exists, now we verify the password.
                                                  if (password_verify($_POST['login_password'], $password)) 
                                                  {
                                                    echo "2";
                                                    // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
                                                    session_regenerate_id();
                                                    $_SESSION['loggedin'] = TRUE;
                                                    $_SESSION['name'] = $_POST['login_email'];
                                                    $_SESSION['id'] = $id;
                                                    //echo 'Welcome ' . $_SESSION['name'] . '!';
                                                    header('Location: secure/home.php');
                                                    $message = "Siker";
                                                  } 
                                                  else 
                                                  {
                                                    $message = 'Incorrect email or password!';
                                                  }
                                              }
                                            } 
                                            else 
                                            {
                                              $message = 'Incorrect email or password!';
                                            }
                                            echo "<div class=\"error\">";
                                              echo $message;
                                            echo "</div>";

                                          $stmt->close();
                                        }
                                      ?>
                                  </div> <!-- error -->      
                                      
                              </div> <!-- input group -->   
                    </form>
                          </div>  <!--card body-->
                          <div class="card-footer"> <a href="forgot_password.php">Forgot Password ?</a></div>
                  </div> <!-- card-->

                  <div class="card">
                          <div class="card-header">Register</div>
                          <div class="card-body">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                            <div class="input-group">
                              <label for="reg_email">
                                        <i class="fas fa-at"></i>
                              </label>
                                <input id="reg_email" type="email" class="form-control" name="reg_email" placeholder="E-mail" Required>
                            </div>
                            <div class="input-group">
                              <label for="reg_password">
                                        <i class="fas fa-lock"></i>
                                      </label>
                                <input id="reg_password" type="password" class="form-control" name="reg_password" placeholder="Password" Required>
                            </div>
                            <div class="input-group">
                              <label for="reg_password_again">
                                        <i class="fas fa-unlock"></i>
                                      </label>
                                <input id="reg_password_again" type="password" class="form-control" name="reg_password_again" placeholder="Password again" Required>
                            </div>

                            <div class="input-group">

                               <div style="padding-left:15px"> A <a href="user_agreements"> felhasználási feltételeket</a> elolvastam, és elfogadom </div>
                                    
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="check" value="agree" Required>
                            </div>

                            <div>  

                                    <script>
                                    // Resize reCAPTCHA to fit a specific size. We're scaling using CSS3 transforms ||| captchaScale = containerWidth / elementWidth

                                    function scaleCaptcha(elementWidth) {
                                      // Width of the reCAPTCHA element | 640 
                                      var reCaptchaWidth = 340;
                                      // Get the containing element's width
                                      var containerWidth = $('.container').width();
                                      
                                      // Only scale the reCAPTCHA if it won't fit inside the container
                                      if(reCaptchaWidth > containerWidth) {
                                        // Calculate the scale
                                        var captchaScale = containerWidth / reCaptchaWidth;
                                        // Apply the transformation
                                        $('.g-recaptcha').css({
                                          'transform':'scale('+captchaScale+')'
                                        });
                                      }
                                    }

                                    $(function() { 
                                    
                                      // Initialize scaling
                                      scaleCaptcha();
                                      
                                      // Update scaling on window resize
                                      // Uses jQuery throttle plugin to limit strain on the browser
                                      $(window).resize( $.throttle( 100, scaleCaptcha ) );  
                                    });
                                    </script>
                                <div class="g-recaptcha center " data-sitekey="6Lepw60UAAAAAKW5PrIq_oZTn6Xp2GzKo1NBUGV1"
                                 
                                ></div>
                            </div>

                            <div class="input-group">
                                <input type="submit" value="Register" name="reg_user" class="btn btn-block btn-success"> 
                            </div>
                            <div class="input-group">
                                  <div class="container error center">
                                    <?php
                                     $message = "";
                                        if(isset($_POST['reg_user'])) 
                                        {
                                          if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
                                          {
                                                $secret = '6Lepw60UAAAAAAviBRWVpMQEMVYcZyIdrVv5ZE6T';
                                                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
                                                $responseData = json_decode($verifyResponse);
                                                if($responseData->success)
                                                {
                                                    $succMsg = 'Your contact request have submitted successfully.';

                                                    include('secure/src/db_config.php');
                                                    if (!isset($_POST['reg_email'],$_POST['reg_password'],$_POST['reg_password_again'])) // ha valamit nem töltött ki
                                                    {
                                                        // Could not get the data that should have been sent.
                                                        $message =  'Please fill every field and accept the user agreements';
                                                    } // isset
                                                    else // ha minden kitöltött, és megnyomta a checkboxot is
                                                    {
                                                      if($_POST['reg_password'] != $_POST['reg_password_again']) // ha a jelszavak nem egyeznek
                                                      {
                                                          $message = 'The passwords do not match!';
                                                      } // pwd egyezés
                                                      else // ha a jelszvaka megegyeznek
                                                      {
                                                        if ($stmt = $con->prepare('SELECT email FROM accounts WHERE email = ?'))  // e-mail lekérdezés
                                                        {
                                                          $stmt->bind_param('s', $_POST['reg_email']);
                                                          $stmt->execute();
                                                          $stmt->store_result();
                                                            if ($stmt->num_rows == 0)  // ha nincs ilyen e-mail, akkor be is regisztrálja
                                                            {
                                                              $email = $_POST['reg_email'];
                                                              //$password_1 = $_POST['password'];
                                                              $password = password_hash($_POST['reg_password'], PASSWORD_DEFAULT);
                                                              $uniqid = uniqid();
                                                              echo $email,$password ; echo "<br>";
                                                              $sql =  "CALL REG_USER('$email', '$password','$uniqid');";
                                                              $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
                                                          
                                                              include("src/send_email.php");
                                                             

                                                            } // stmt- num rows - email check
                                                            else // ha van ilyen e-mail
                                                            {
                                                              $message = "ilyen e-mail már van";
                                                            } 
                                                        } // else stmt - email check - email lekérdezés
                                                      } // leszvaka egyzése if - else
                                                    } // ha minden stimmel, és ki van töltve
                                                }
                                                else
                                                {
                                                    $message = 'Robot verification failed, please try again.';
                                                }
                                          }
                                           
                                        } // reg user meg van nyomva
                                          
                                          echo "<div class=\"error\">";
                                          echo $message;
                                          echo "</div>";

                                       // $stmt->close();
                                      ?>
                                  </div> <!-- error -->      
                                      
                              </div> <!-- input group -->   
                    </form>
                          </div>  <!--card body-->
                          <div class="card-footer">Footer</div>
                  </div> <!-- card-->

                </div> <!-- card deck-->


                </div> <!-- container--> 
 </div> <!-- jumbotron-->
 <?php include("src/footer.html"); ?>

  
</body>
</html>