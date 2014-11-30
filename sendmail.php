<?php
// start session
session_start();
$MAIL_SENT=false;

// set page instance id
if (!isset($_SESSION['page_instance_id'])) {
    $_SESSION['page_instance_id'] = uniqid('', true);
}

if (!isset($_POST['page_instance_id']))
	$_POST['page_instance_id'] = "";

// form processing logic
if ($_POST['page_instance_id'] == $_SESSION['page_instance_id']){
    unset($_SESSION['page_instance_id']);
    // do form processing
	//send confirmation email (or insert into database, etc...) 
    if (get_magic_quotes_gpc())
    {
      $nom	     	= stripslashes(trim($_POST['name']));
      $mail			= stripslashes(trim($_POST['email']));
      $comments		= stripslashes(trim($_POST['comments']));
    }
    else
    {
      $nom		    = trim($_POST['name']);
      $mail			= trim($_POST['email']);
      $comments		= trim($_POST['comments']);
	}
	
$to="centredelavannerie@gmail.com";
$ccmail="Patrick Doidy <centrelavannerie@wanadoo.fr>";
$bccmail="psaucy-67@yahoo.fr";
$subject = "Contact de $nom <$mail>";
$comments = "Message de $nom (email: $mail) :
<hr>
<BR>$comments";

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/html; charset=utf-8";
$headers[] = "From: Centre La Vannerie <centrelavannerie54@gmail.com>";
$headers[] = "Cc: $ccmail";
$headers[] = "Bcc: $bccmail";

$GLOBALS['MAIL_SENT']=mail($to,$subject,$comments,implode("\r\n", $headers));
}

?>
