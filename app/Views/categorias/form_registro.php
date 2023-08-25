<?php echo $this->extend('index'); ?>
<?php echo $this->section('content'); ?>

<div class="container">
    <h1>Registro de Categorias</h1>

    <form method="POST" action="<?php echo base_url()?>categorias/registrar">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Categoria</label>
            <input type="text" class="form-control" id="nombre_cat" name="nombre_cat" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
<?php echo $this->endSection(); ?>