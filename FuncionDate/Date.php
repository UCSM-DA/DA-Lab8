<?php 
    $dia=date("d"); 
    if ($dia>10) { 
        echo "Sitio activo"; 
    } else { 
        echo "Sitio fuera de servicio";
    }
?>