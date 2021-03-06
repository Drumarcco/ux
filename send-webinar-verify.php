<?php
setcookie("pathcookie", '', time()+600, "/", "ux.nearsoft.com");
if(
  isset($_POST['email']) &&
        $_SERVER['HTTP_HOST'] == "ux.nearsoft.com" &&
        (strrpos($_SERVER['HTTP_REFERER'], 'ux.nearsoft.com') !== false)) {

    function send_email($email, &$response = null, &$http_code = null) {
      $json = json_encode(array(
          'From' => $email['from'],
          'To' => $email['to'],
          'Subject' => $email['subject'],
          'TextBody' => $email['text_body']
      ));
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://api.postmarkapp.com/email');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Accept: application/json',
          'Content-Type: application/json',
          'X-Postmark-Server-Token: bca4b2db-5f9a-43ed-baac-bf359d077c58'
      ));
      curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
      $response = json_decode(curl_exec($ch), true);
      $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      curl_close($ch);
      return $http_code === 200;
    }

    // Get form data
    if(!isset($_POST['email']) ) {
        died('We are sorry, there appears to be a problem with the form you submitted.');
    }
    $email = $_POST['email']; // required
    $path = $_POST['path']; // not required

    // Build Message
    $email_message = "Form details below.\n\n";
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "\n\nPath:\n".$path."\n";
    $email_message .= "\nSent from:\n".$_SERVER['HTTP_REFERER']."\n";

    $subject = 'Contact Request';
    $body = $email_message;

    $sent = send_email(array(
        'to' => 'svazquez@nearsoft.com',
        'from' => 'Contact Request <avega@nearsoft.com>',
        'subject' => $subject,
        'text_body' => $body
    ), $response, $http_code);

    // Did it send successfully?
    if( $sent ) {
        header( 'Location: http://ux.nearsoft.com/webinar-live/' );
    } else {
        echo 'Your contact request could not be sent due to an error. You can try again or <a href="/contact/">contact us in another way</a>. Sorry for the inconveniences.';
    }

    //Show the response and HTTP code
    echo '<pre>';
    echo 'The JSON response from Postmark:<br />';
    print_r($response);
    echo 'The HTTP code was: ' . $http_code;
    echo '</pre>';
    ?>
<?php
}
?>
