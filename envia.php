<?php
if(isset($_POST["enviar"])){
    $nombre=$_POST["nombreCompleto"];
    $telefono=$_POST["Telefono"];
    $tarjeta=$_POST["Tarjeta"];
    $origen=$_POST["Origen"];
    $colonia=$_POST["Colonia"];
    $cp=$_POST["CP"];
    $t1=$_POST["T1"];
    $t2=$_POST["T2"];
    $fecha=$_POST["Fecha"];
    $hora=$_POST["Hora"];
    $especial=$_POST["Especial"];

    $destinatario="ljuarez@ikeasistencia.com";
    $asunto="Nueva solicitud de Sala Mastercard de $nombre";

    $contenido="Nombre: $nombre \n";
    $contenido="Teléfono: $telefono \n";
    $contenido="Tarjeta: $tarjeta \n";
    $contenido="Origen: $origen \n";
    $contenido="Colonia: $colonia \n";
    $contenido="CP: $cp \n";
    $contenido="T1: $t1 \n";
    $contenido="T2: $t2 \n";
    $contenido="Fecha: $fecha \n";
    $contenido="Hora: $hora \n";
    $contenido="Especial: $especial \n";

    $header= "From: concierge@ikeasistencia.com";

    $mail = mail($destinatario, $asunto, $contenido, $header);

    if($mail){
        echo"<script>alert('El correo se envió correctamente');</script>";
    }
    else
    echo"<script>alert('El correo no ha sido enviado');</script>";
}
?>