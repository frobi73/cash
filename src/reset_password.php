<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title>Register</title>
        <!-- <link href="reset_password.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    
	</head>
	<body>
    <form name="frmReset" id="frmReset" method="post">
        <h1>Reset password</h1>
        
        <input type="reset-password" name="reset-password" placeholder="New password" id="reset-password" required>
        <label for="reset-password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="confirm-password" name="confirm-password" placeholder="Confirm new password" id="confirm-password" required>
        <label for="confirm-password">
            <i class="fas fa-lock"></i>
        </label>
        
        <div class="field-group">
            <div><input type="submit" name="submit-password" id="submit-password" value="Submit" class="form-submit-button"></div>
        </div>	
    </form>

<?php

include('db_connect.php');

//This code runs if the form has been submitted
if (isset($_POST['submit-password']))
{
    if($_POST['reset-password'] != $_POST['confirm-password']) {
        die("Password and Confirm Password doesn't match");
    }
    
 // if(!empty($_POST["submit-password"])) { // && (!empty($_POST["reset-password"]) && (!empty($_POST["confirm-password"]))) { 
       //&& $_POST['password'] == $_POST['confirm'])) {

        //$sql = $mysqli->query("UPDATE users SET password='$pass' WHERE email = '$email'");
        
        //$sql = ('UPDATE accounts SET password = ?, pwd_reset_token = ' . 'reseted' . 'WHERE email = ?');
       // $sql = ('UPDATE accounts SET password = ? WHERE email = ?');
       $sql = ('UPDATE accounts SET pwd_reset_token = "reseted", password = ? WHERE email = "cash@fr-demo.xyz"');
        Echo 'SQL Command: ' . $sql;
        if ($stmt = $con->prepare($sql)) {
            //Echo "Update SQL with stmt was prepared";
            // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
          $password = password_hash($_POST['reset-password'], PASSWORD_DEFAULT);
           // $email = 'cash@fr-demo.xyz'; //$_POST["email"];
            //Echo "Before bind_param";
          $stmt->bind_param('s', $password);
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
            <div><a href="index.php">Login</a></div>
            
</body>
</html>