<?php

require_once("../../vendor/autoload.php");
require_once("../../app/Config.php");
require_once("../../app/Autor.php");
require_once("../../app/Disco.php");

try {

    $discoID = $_POST['discoID'];

    $disco = App\Disco::find($discoID);
    $disco->delete();

} catch (Exception $e) {

    echo $e->getMessage();    

} finally {
    
    header('Location: ../../app/vistas/listar.php');
}
