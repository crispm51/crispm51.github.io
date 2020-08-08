<?php
    $des = 'cristianballesterospm50@gmail.com';
    $Nombre = $_POST['Nombre'];
    $Email = $_POST['Email'];
    $Mensaje = $_POST['Mensaje'];
    $header  = "evnviado de pagina";
    mail($des,$Nombre,$Mensaje,$header);
    echo "<script>alert('exito')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>