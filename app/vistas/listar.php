<?php
require_once("../../vendor/autoload.php");
require_once("../../app/Config.php");
require_once("../../app/Autor.php");
require_once("../../app/Disco.php");
include 'head.php';

if (isset($_POST['pageNumber'])) {
    $pageNumber = $_POST['pageNumber'];
} else {
    $pageNumber = 0;
}
$skip = $pageNumber * 10;
?>

<div class="container">
    <div class="row justify-content-around">
        <col>
        <form method="POST" action="nuevo_autor_form.php">
            <input type="submit" class="btn btn-success" value="Nuevo autor" />
        </form>
        </col>
        <col>
        <form method="POST" action="nuevo_disco_form.php">
            <input type="submit" class="btn btn-primary" value="Nuevo disco" />
        </form>
        </col>
    </div>
</div>

<br>

<table class="table table-md table-dark font-italic text-center">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Año</th>
            <th scope="col">Autor</th>
            <th scope="col">Eliminar albúm</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $discos = App\Disco::orderBy('id', 'Asc')
            ->skip($skip)
            ->take(10)
            ->get();

        foreach ($discos as $disco) {
        ?>
            <tr>
                <td><?= $disco->id ?></td>
                <td><?= $disco->nombre ?></td>
                <td><?= $disco->anyo ?></td>
                <?/*El campo id_autores está relacionado con el campo autores.id, 
                que manera que existe una integridad entre dichas tablas. */ ?>

                <td><?= $autores = App\Autor::where('id', $disco->id_autores)->get('nombre')[0]->nombre ?>
                    <!-- Descomentar si desea que se muestre el atributo id_autores en objetos disco  (id:<?= $disco->id_autores ?>)  -->
                </td>
                <td>
                    <form method="post" action="eliminar_disco.php">
                        <input type="hidden" name="discoID" value=<?= $disco->id ?>>
                        <input type="submit" onclick="return confirm('¿Desa eliminar este registro?')" class="btnDelete btn btn-danger" value="">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<div class="container">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <form method="post" action="listar.php">
                    <input type="hidden" name="pageNumber" value=<?php echo $pageNumber - 1; ?>>
                    <input type="submit" class="btn btn-outline-info" value="Anterior" <?php if ($pageNumber <= 0) {
                                                                                            echo "disabled";
                                                                                        } ?>>
                </form>
            </li>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <li class="page-item">
                <buton class="btn btn-outline-info  disabled">
                    <?php
                    $count = App\Disco::count();
                    $totalPages = round($count / 10);
                    echo $pageNumber + 1;
                    echo " / ";
                    echo $totalPages;
                    ?>
                    </button>
            </li>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <li class="page-item">
                <form method="post" action="listar.php">
                    <input type="hidden" name="pageNumber" value=<?php echo $pageNumber + 1; ?>>
                    <input type="submit" class="btn btn-outline-info" value="Siguiente" <?php if ($pageNumber + 1 == $totalPages) {
                                                                                            echo "disabled";
                                                                                        } ?>>
                </form>
            </li>
        </ul>
    </nav>
</div>

</body>
<?php include 'footer.php'; ?>