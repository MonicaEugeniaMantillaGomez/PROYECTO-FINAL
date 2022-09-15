<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    $_DATA = ($_SERVER["REQUEST_METHOD"] == "POST") 
                ? json_decode(file_get_contents("php://input"), true)
                : (array) ["file"=> "404"];
    extract($_DATA);
    unset($_DATA);

    include "modulos/conexion.php";
    include "modulos/$file.php";
    echo match ($file) {
        'menu' => Menu::get()->disenoMenu(),
        'icono' => Icono::get()->iconoMenu(),
        'inicio' => Inicio::get()->seccionInicio(),
        'abouttitulo' => Abouttitulo::get()->secciontituloabout(),
        'about' => About::get()->seccionabout(),
        'tituloservices' => Tituloservices::get()->secciontituloservices(),
        'services' => Services::get()->seccionservices(),
        'tituloskills' => Tituloskills::get()->secciontituloskills(),
        'services' => Services::get()->seccionservices(),
        '404' => header("Content-Type: text/html"),
    }; 


?>