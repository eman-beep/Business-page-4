<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	  ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'info@misproveedoressrl.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contacto de MISPROVEEDORESSRL.COM - Nuevo mensaje de $name";
$email_body = "Recibiste un nuevo mensaje de la web MISPROVEEDORESSRL.COM.\n\n"."Estos son los detalles:\n\nNombre:\n$name\n\nCorreo:\n$email_address\n\nTelefono:\n$phone\n\nMensaje:\n$message";
$headers = "De: no-responda@misproveedoressrl.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= " ";
mail($to,$email_subject,$email_body,$headers);
return true;			
?>