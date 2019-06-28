<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   
    <!-- Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   
    <title>Capacity Sharing</title>

    <link rel="shortcut icon" href="images/ico/favicon.ico">

</head>
<body>

     
  <div class="brand">
    Capacity Sharing
  </div>
  <div class="brand brand-bar">
      Túrbózza fel vállalkozását egyedi üzleti oldalunkal
  </div>

              <?php 
                  include("navbar.html");
              ?>
     
    <div class="container">
      <div class="jumbotron">
        <div class="row">
          <div class="col col-lg-6">
              <form class="form-signin" action="signer.php">
                      <h3>Jelentkezzen be!</h3>
                      <label for="inputEmail" class="sr-only">Email cím</label>
                      <input type="email" id="inputEmail" class="form-control" placeholder="Email cím" required autofocus>
                      <label for="inputPassword" class="sr-only">Jelszó</label>
                      <input type="password" id="inputPassword" class="form-control" placeholder="Jelszó" required>
                      <div class="checkbox mb-3">
                        <label>
                          <input type="checkbox" value="remember-me"> Emlékezz rám
                        </label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block" type="submit">Bejelenkezés</button>
                      <p class="mt-5 mb-3 text-muted">&copy; Capacity Sharing 2019</p>
              </form>
            </div>  <!-- col-->    

            <div class="col col-lg-6">
                
                <?php
                // define variables and set to empty values
                $nameErr = $emailErr = $taxnumber_Err = $company_name_Err =  $mobile_number_Err = "";
                $name = $email = $taxnumber = $company_name = $mobile_number = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                  if (empty($_POST["name"])) 
                  {
                    $nameErr = "Name is required";
                  } 
                  else 
                  {
                    $name = test_input($_POST["name"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                      $nameErr = "Only letters and white space allowed"; 
                    }
                  }
                  
                  if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                  } 
                  else 
                  {
                    $email = test_input($_POST["email"]);
                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      $emailErr = "Invalid email format"; 
                    }
                  }
                    
                  if (empty($_POST["taxnumber"])) 
                  {
                    $taxnumber_Err = "Adószám helytelen";
                  } 
                  else 
                  {
                    $taxnumber = test_input($_POST["taxnumber"]);

                  }

                  if (empty($_POST["company_name"])) 
                  {
                    $company_name_Err = "Cégnév kötelező";
                  } 
                  else 
                  {
                    $company_name = test_input($_POST["company_name"]);
                  }
                  
                  include("server.php");
                }    
                  function test_input($data) 
                  {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                  }
                ?>

                
                <form method="post" class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                <h3>Regisztrálj!</h3>
                  <label for="name" class="sr-only">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Név" required autofocus value="<?php echo $name;?>">
                  <span class="error"> <?php echo $nameErr;?></span>

                 <input type="text" class="form-control" name="email" placeholder="E-mail Cím" required autofocus value="<?php echo $email;?>">
                  <span class="error"> <?php echo $emailErr;?></span>

                  <input type="number"  class="form-control" name="tax_number" placeholder="Adószám" required autofocus value="<?php echo $taxnumbers;?>">
                  <span class="error"><?php echo $taxnumber_Err;?></span>

                 <input type="text" class="form-control" name="company_name" placeholder="Cég neve" required autofocus><?php echo $company_name;?>
                  <span class="error"><?php echo $company_name_Err;?></span>
                  <input type="submit" name="submit" value="Regisztráció" class="btn btn-lg btn-primary btn-block">  
                </form>

            </div>  <!-- col-->    
        </div>  <!-- row-->    
      </div><!-- jumbotron-->     
    </div><!-- Container-->

    <?php include("footer.html"); ?>
</body>
</html>