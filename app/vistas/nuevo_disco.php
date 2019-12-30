<?php

use Illuminate\Support\Facades\Auth;

require_once("../../vendor/autoload.php");
require_once("../../app/Config.php");
require_once("../../app/Autor.php");
require_once("../../app/Disco.php");

try {

    $nombre = $_POST['nombre'];
    $anyo = $_POST['anyo'];    
    $autor = $_POST['autor'];

    $disco = new App\Disco;    
    $disco->nombre = $nombre;
    $disco->anyo = $anyo;    
    $disco->id_autores = $autor;   
    $disco->timestamps = false;
    $disco->save();
    //echo $disco;

} catch (Exception $e) {
    echo $disco;
    echo $e->getMessage();

} finally {

   header('Location: listar.php');
}
