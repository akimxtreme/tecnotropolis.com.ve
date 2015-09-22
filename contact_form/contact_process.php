<?php

include dirname(dirname(__FILE__)).'/mail.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'email_validation.php';

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$subject = stripslashes($_POST['subject']);
$message = stripslashes($_POST['message']);


$error = '';

// Check name

if(!$name)
{
$error .= 'Ingrese su nombre.<br />';
}

// Check email

if(!$email)
{
$error .= 'Ingrese su correo electrónico.<br />';
}

if($email && !ValidateEmail($email))
{
$error .= 'Ingrese una dirección de correo electrónico válida.<br />';
}

// Check message (length)

if(!$message || strlen($message) < 10)
{
$error .= "Ingrese su mensaje. Debe tener mínimo 10 caracteres.<br />";
}


if(!$error)
{
$mail = mail(CONTACT_FORM, $subject, $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());


if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>