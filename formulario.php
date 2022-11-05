<?php

    $destino = "esteban.chile75@gmail.com";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $numero = $_POST["numero"];
    $mensaje = $_POST["mensaje"];
    $asunto = "Formulario Pagina Web";

    $contenido = "Nombre: " . $nombre . " " . $apellido . "\nNumero: " . $numero . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje; 
                                    
    mail($destino, $asunto, $contenido);
    header("Location:enviado.html");
    
?>