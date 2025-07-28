<?php
// rutas disponibles de la aplicación
$ruta = new Ruta();
$ruta->controladores(array(
    "/"=>"ControladorPrincipal",
    "/usuarios"=>"ControladorUsuarios"
));