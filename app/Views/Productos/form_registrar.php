<?php echo $this->extend('index'); ?>
<?php echo $this->section('content'); ?>

<div class="container" >
    <h1 >Registro de Productos</h1>

    <form method="POST" action="<?php echo base_url()?>productos/form_registrar" class="text-white">
        <div class="mb-3">
            <label for="nombre" class="form-label" style="color: white;">Nombre Producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" >
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label"style="color: white;" >Cantidad Producto</label>
            <input type="text" class="form-control"  id="cantidad" name="cantidad">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label" style="color: white;">Precio Producto</label>
            <input type="text" class="form-control" id="precio" name="precio">
        </div>
        <div class="mb-3">
            <label for="id_subcategoria" style="color: white;" class="form-label">Categoria Prodcuto</label>
            <input type="text" class="form-control" id="id_subcategoria" name="id_subcategoria">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
<?php echo $this->endSection(); ?>