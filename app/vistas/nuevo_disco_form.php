<?php
require_once("../../vendor/autoload.php");
require_once("../../app/Config.php");
require_once("../../app/Autor.php");
require_once("../../app/Disco.php");
include_once 'head.php';
?>

<div class="container">
    <div class="row justify-content-around">
        <form class="form" method="post" action="nuevo_disco.php">
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                </div>
                <input type="text" class="form-control" name="nombre" aria-label="nombre" aria-describedby="basic-addon1" value="" required>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Año</span>
                </div>
                <input type="text" class="form-control" name="anyo" aria-label="anyo" aria-describedby="basic-addon1" value="" required>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Autor</label>
                </div>
                <select class="custom-select" id="autor" name="autor" aria-label="autor" aria-describedby="basic-addon1" required>

                    <?php
                    $autores = App\Autor::all();
                    foreach ($autores as $autor) {  ?>
                        <option value="<?= $autor->id ?>"><?= $autor->nombre ?></option>
                    <?php } ?>
                </select>
            </div>

            <input type="submit" class="btn btn-success" value="Añadir disco">

        </form>
    </div>
    <br>
    <div class="row justify-content-around">
        <form method="post" action="listar.php">
            <input type="submit" class="btn btn btn-warning" value="Volver a Listar" />
        </form>
    </div>
</div>

<?php
include 'footer.php';
?>