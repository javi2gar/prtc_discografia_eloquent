<?php

use Illuminate\Support\Facades\Auth;

require_once("../../vendor/autoload.php");
require_once("../../app/Config.php");
require_once("../../app/Autor.php");
require_once("../../app/Disco.php");

try {

    $nombre = $_POST['nombre'];
    $estilo = $_POST['estilo'];

    $autor = new App\Autor;    
    $autor->nombre = $nombre;
    $autor->estilo = $estilo;    
    $autor->timestamps = false;
    $autor->save();
    //echo $autor;

} catch (Exception $e) {

    echo $autor;
    echo $e->getMessage();

} finally {

   header('Location: listar.php');
}
