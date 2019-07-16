<?php
    $from    = 'noreply@hostinger.hu';
    $subject = 'Capacity Sharing Aktiválás';
    $activate_link = 'fr-demo.xyz/cash/secure/activate.php?email=' . $email . '&code=' . $uniqid; 
    $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . 
    "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";

    $message = '
    <html>
<head>
  <title>Capacity Sharing</title>
</head>
<body>
  <p>Aktiválás</p>
    
  <p>
  Please click the following link or give this in your browser to activate your account:
  </p>
  <p>
    <a href="' . $activate_link . '">  Aktiválás </a>
  </p>

</body>
</html> ';

     $success =mail($email, $subject, $message, $headers);

        if (!$success) {
            $message = error_get_last()['message'];
        }
        else
        {
            echo "Siker";
        }
?>