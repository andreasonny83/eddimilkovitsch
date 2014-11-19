<?php
require_once( 'captcha/recaptchalib.php' );
$privatekey = '6LfZ1P0SAAAAAKGKKkibNwUb3ND54kBz_zSR6tNP';

$resp = recaptcha_check_answer ( $privatekey,
                                 $_SERVER["REMOTE_ADDR"],
                                 $_POST["recaptcha_challenge_field"],
                                 $_POST["recaptcha_response_field"] );


  if ( !$resp->is_valid ) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
    print("<h1>Cio che figo che te son, te ga rivado a metter dei numeri in fila! :D E adesso?!?</h1>");
  }

?>