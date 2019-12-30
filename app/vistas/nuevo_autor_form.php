<?php
include_once 'head.php';
?>

<div class="container">
    <div class="row justify-content-around">
        <form class="form" method="post" action="nuevo_autor.php">            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                </div>
                <input type="text" class="form-control" name="nombre" aria-label="nombre" aria-describedby="basic-addon1" value="" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Estilo</span>
                </div>
                <input type="text" class="form-control" name="estilo" aria-label="estilo" aria-describedby="basic-addon1" value="" required>
            </div>
            <input type="submit" class="btn btn-success" value="Añadir autor">
        </form>
    </div>
    <div class="row justify-content-around">
        <form method="post" action="listar.php">
            <input type="submit" class="btn btn btn-warning" value="Volver a Listar" />
        </form>
    </div>
</div>
<?php
include 'footer.php';
?>