

<?php

    $v1=$_POST['v1'];
    $v2=$_POST['v2'];
    $opciones=$_POST['opciones'];
    



   if ($_POST["opciones"] == "suma")
    {
        echo "El resultado es: ".($v1+$v2);
        
    }
    else if ($_POST["opciones"] == "resta")
    {
        echo "el resultado es: ".($v1-$v2);
    }
    else if ($_POST["opciones"] == "multiplicacion")
    {
        echo "El resultado es: ".($v1*$v2);
    }
    else if ($_POST["opciones"] == "division")
    {
        echo "El resultado es: ".($v1/$v2);
    }

    print ('<br /> <a href="index.html">Volver</a>');

?>

