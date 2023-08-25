<?php echo $this->extend('index'); ?>
<?php echo $this->section('content'); ?>

<div class='container'>
    <h1>Listado de Productos</h1>


    <a href="<?php echo base_url() ?>productos/registrar" type="button" class="btn btn-success">Añadir</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">id_subcategoria</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data2 as $i): ?>
                <tr>
                    <th scope="row">
                        <?php echo $i['id_producto'] ?>
                    </th>
                    <td>
                        <?php echo $i['nombre'] ?>
                    </td>
                    <td>
                        <?php echo $i['cantidad'] ?>
                    </td>
                    <td>
                        <?php echo $i['precio'] ?>
                    </td>
                    <td>
                        <?php echo $i['id_categoria'] ?>
                    </td>
                    <td>
                        <a type="button" class="btn btn-primary">Editar</a>
                        <a type="button" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php echo $this->endSection(); ?>