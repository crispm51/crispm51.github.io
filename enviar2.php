<?php
    $Nombre = $_POST['Nombre'];
    $Email = $_POST['Email'];
    $Mensaje = $_POST['Mensaje'];
    echo $Nombre. "ha dicho<br/>".$Mensaje;
    if (mail('cristianballesterospm50@gmail.com',$Nombre,$Mensaje) ){
        echo "exito";
    }else{
        echo "no exito";
    }
?>