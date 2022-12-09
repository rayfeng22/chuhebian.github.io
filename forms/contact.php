<?php
if (isset($_REQUEST['email'])) {

  $name = $_REQUEST['name'] ;
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("info@rmbup.com", $name,$subject,
  $message, "From:" . $email);

  echo "Sending";

} else {

  echo "Error,Please send again£¡";

}
?>