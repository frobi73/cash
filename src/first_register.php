<?php
session_start();

// initializing variables
$firstname = "";
$lastname = "";
$email = "";
$pwd = "";
$pwd2="";
$errors = array(); 

// connect to the database
include('db_config.php');

// REGISTER USER
if (isset($_POST['submit'])) {

  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $pwd_1 = mysqli_real_escape_string($connection, $_POST['password']);
  $pwd_2 = mysqli_real_escape_string($connection, $_POST['password-again']);

  if ($pwd != $pwd2) 
  {
	  array_push($errors, "A két jelszó nem egyezik");
  }

  $user_check_query = "SELECT * FROM accounts WHERE email='$email' LIMIT 1";
  $result = mysqli_query($connection, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) 
  {
    if ($user['email'] === $email) {
      array_push($errors, "Ilyen e-mail már van");
    }
  }
  var_dump($username, $email, $password_1);
  if (count($errors) == 0) {
  	
    include("db_config.php");
    $password = hash($password_1);
    var_dump($username);
    var_dump($password);
    $usernev = $_POST['username'];
    var_dump($usernev);
  	$sql = "INSERT INTO accounts (username, email, pass) 
  			      VALUES('$usernev', '$email', '$password' ";
    if ($connection->query($sql) === TRUE) 
    {
      echo "New record created successfully";
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $connection->error;
    }
    $_SESSION['loggedin'] = true;
      echo '<script> window.location.replace("../secure/home.php") </script>';

      function getBaseUrl() 
      {
          // output: /myproject/index.php
          $currentPath = $_SERVER['PHP_SELF']; 
          
          // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
          $pathInfo = pathinfo($currentPath); 
          
          // output: localhost
          $hostName = $_SERVER['HTTP_HOST']; 
          
          // output: http://
          $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
          
          // return: http://localhost/myproject/
          return $protocol.$hostName.$pathInfo['dirname']."/";
      }
  }
  else
  {
    var_dump($errors);
  }
}