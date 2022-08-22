<?php  

// Llamando a los campos
$nombre = $_POST['name'];
$celular = $_POST['celular'];
$correo = $_POST['email'];
$asunto = $_POST['asunto'];
$empresa = $_POST['empresa'];
$message = $_POST['message'];

// Datos para el correo
$destinatario = "admin@opendeinsoft.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $celular \n";
$carta .= "Asunto: $asunto \n";
$carta .= "Empresa: $empresa \n";
$carta .= "Mensaje: $message";

// Enviando Mensaje
$sendMail = True;
$sendMail = mail($destinatario, $asunto, $carta);
if( $sendMail ) {
    header('Location:mensaje-de-envio.html');
}else{
    echo error_get_last();
    print_r(error_get_last());
}


?>