<?php 
	$nombre = $_POST['nombre'];
   	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	$formcontent="De: $nombre \r\n Mensaje: $mensaje";
	$recipient= "design@ai-laik.com";
	$subject="Del formulario de contacto Ai-Laik";
	$mailheader = "From: $email \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Parece que algo salio mal. Por favor comunicate con Ai-Laik a design@ai-laik.com");
    
    echo "<script>alert('Tu mensaje se envio con exito')</script> ";
    echo "<script>window.location.href='../index.html'</script> ";
?>