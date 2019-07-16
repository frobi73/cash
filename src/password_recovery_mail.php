<?php
include('db_connect.php');


$sql = ('UPDATE accounts SET pwd_reset_token = ? WHERE email = ?');
echo "\r\n";


if ($stmt = $con->prepare($sql)) {
    $uniqid = uniqid();
    $email = $_POST['email'];

    echo '************'."\r\n";
    echo $sql;
    echo '************'."\r\n";
    
    //$stmt->bind_param('ssss', $_POST['username'], $password, $_POST['email'], $uniqid);
    $stmt->bind_param('ss', $uniqid, $_POST['email']);

    echo '************'."\r\n";
    echo $email;
    echo '************'."\r\n";

    $stmt->execute();

    $from    = 'noreply@hostinger.hu';
    $subject = 'Reset your Cash account password';
    $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
   // $activate_link = 'http://yourdomain.com/phplogin/activate.php?email=' . $_POST['email'] . '&code=' . $uniqid;
   $activate_link = 'fr-demo.xyz/phpcash/phplogin/reset_password.php?email=' . $_POST['email'] . '&code=' . $uniqid; 
   $message = '<p>Please click the following link or give this in your browser to reset your account password:</p> ' . '<p><a href="' . $activate_link . '">' . $activate_link . '</a></p>';
    mail($_POST['email'], $subject, $message, $headers);
    echo 'Please check your email to reset your password!'; 
    $stmt->close();
} 
else {
    // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
}
/* 
if(!$mail->Send()) {
	$error_message = 'Problem in Sending Password Recovery Email';
} else {
	$success_message = 'Please check your email to reset password!';
} */

?>