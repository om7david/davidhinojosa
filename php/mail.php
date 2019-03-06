<?php 
	$nombre = $_POST['nombre'];
   	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	$formcontent="De: $nombre \r\n";
	$recipient= "info@davidhinojosa.net";
	$subject="Del formulario de contacto David Hinojosa";
	$mailheader = "From: $email \r\n  Mensaje: $mensaje";

	mail($recipient, $formcontent, $mailheader) or die("Parece que algo salio mal. Por favor comunicate con David a info@davidhinojosa.net");
    
    echo "<script>alert('Tu mensaje se envio con exito')</script> ";
    echo "<script>window.location.href='../index.html'</script> ";
?>