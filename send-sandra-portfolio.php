<?php
setcookie("pathcookie", '', time()+600, "/", "ux.nearsoft.com");
//only send if hosted in production site
if(isset($_POST['email']) && $_SERVER['HTTP_HOST'] == "ux.nearsoft.com") {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "svazquez@nearsoft.com";
    $email_subject = "Portfolio Request";


    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // check if name and email are received
    if(!isset($_POST['email'])) {
        died('We are sorry, there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name'];           // required
    $email = $_POST['email'];         // required
    $path = $_POST['path']; // not required



    // validate email
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
    died($error_message);
    }
    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "\n\nPath:\n".$path."\n";
    $email_message .= "\nSent from:\n".$_SERVER['HTTP_REFERER']."\n";



    // create email
    $headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    // send email
    @mail($email_to, $email_subject, $email_message, $headers);

    // redirect to thank you page
    header( 'Location: http://ux.nearsoft.com/contact-thank-you/' ) ;?>
<?php
}
?>
