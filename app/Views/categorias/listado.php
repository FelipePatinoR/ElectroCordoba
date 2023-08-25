<?php echo $this->extend('index');
use App\Controllers\Categoria; ?>
<?php echo $this->section('content'); ?>

<div class='container'>
    <h1>Listado de Categorias</h1>

    <a href="<?php echo base_url() ?>categorias/registrar" type="button" class="btn btn-success">Añadir</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $i): ?>
                <tr>
                    <th scope="row">
                        <?php echo $i['id_categoria'] ?>
                    </th>
                    <td>
                        <?php echo $i['nombre'] ?>
                    </td>
             
                        <a type="button" class="btn btn-primary"
                            href="<?php echo base_url() ?>categorias/editar/<?php echo $i['id_categoria'] ?>">Editar</a>

                        <a type="button" class="btn btn-danger"
                            href="<?php echo base_url() ?>categorias/eliminar/<?php echo $i['id_categoria'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php echo $this->endSection(); ?>