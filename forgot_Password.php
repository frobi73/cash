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

	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   
    <!-- Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    
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
						<h1>Forgot Password?</h1>
						
						<div class="input-group">
							<label for="email"><i class="fas fa-at"></i></label>
							<input id="email" type="email" class="form-control" name="email" placeholder="E-mail" Required>
						</div>
						
						<div class="input-group">
							<div>
								<input type="submit" name="btn-forgot" id="forgot-password" 
								value="Elküld" class="btn btn-success "></div>
						</div>

						<div class="error">
										<?php
										$error_message = "";
										if($_SERVER['REQUEST_METHOD'] == 'POST') 
										{
											include('secure/src/db_config.php');
										
											$email = $_POST["email"];
											$sql = 'SELECT username,email FROM accounts WHERE email = \'' . $email .'\'; ';
											$result = $con->query($sql);
											
											if ($result->num_rows >= 0) 
											{
												echo $email;
													//require("password_recovery_mail.php");
													$sql = ('UPDATE accounts SET pwd_reset_token = ? WHERE email = ?');
													if ($stmt = $con->prepare($sql)) 
													{
														$uniqid = uniqid();
														//$stmt->bind_param('ssss', $_POST['username'], $password, $_POST['email'], $uniqid);
														$stmt->bind_param('ss', $uniqid, $email); // beállítja a pwd_reset_token-t az adatbázisban
														$stmt->execute();
	
														$from    = 'noreply@hostinger.hu';
														$subject = 'Reset your Cash account password';
														
														$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . 
														"\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
														
														$activate_link = 'fr-demo.xyz/cash/src/reset_password.php?email=' . $_POST['email'] . '&code=' . $uniqid; 
														
														$content = '
														<html>
														<head>
															<title>Capacity Sharing</title>
														</head>
														<body>
															<p>Password Reset</p>
															
														<p>
															Please click the following link, to reset password.
														</p>
														<p>
															<a class="btn" href="' . $activate_link . '">  Aktiválás </a>
														</p>
														
														</body>
														</html> ';
													
														mail($email, $subject, $content, $headers);
														echo "<script type='text/javascript'>alert('". $lang['reset_pwd_msg']. "');</script>";
														$stmt->close();
													} 
													else 
													{
														// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
														echo 'Could not prepare statement!';
														
													}
											}
											else 
											{
												$error_message = 'No User Found';
											}
										}
									echo $error_message;
										
									?>
						</div>
					</form>

    		</div><!-- Container-->
		</div><!-- jumbotron-->    

    <?php include("src/footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>