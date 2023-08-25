<?php echo $this->extend('Tienda/t_navbar.php'); ?>
<?php echo $this->section('navbar'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">CARETA PARA SOLDAR INTELIGENTE FENIX 33 FURIUS</h5>
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="dark">
                    <img src="<?php echo base_url() ?>img/Equipos_de_Soldadura/Accesorios/careta-para-soldar-inteligente-fenix-33-furius.jpg"
                        class="img-fluid" />
                    <br>
                    <a href="" data-mdb-toggle="modal" data-mdb-target="#modal_1">
                        <div class="mask" style="background-color: rgba(250, 250, 250, 0.5); color: black">
                            <br>
                            <br>
                            <br>
                            <b>Vista rapida</b>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="#!" class="btn btn-primary">
                        <i class="fas fa-shopping-cart"></i>
                        Agregar al carrito
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<!-- MODALS (VENTANAS EMERGENTES) -->
<!-- MODAL 1 -->
<div class="modal fade" tabindex="-1" id="modal_1" _mstvisible="0">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row text-start">
                        <h5 class="modal-title">CARETA PARA SOLDAR INTELIGENTE FENIX 33 FURIUS</h5>
                    </div>
                    <div class="row text-start">
                        <label>Referencia:</label>
                    </div>
                </div>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img style="height: 250px;"
                                src="<?php echo base_url() ?>img/Equipos_de_Soldadura/Accesorios/careta-para-soldar-inteligente-fenix-33-furius.jpg"
                                alt="">
                        </div>
                        <div class="col-md-8">
                            <h6>Descripción</h6>
                            <p>Careta para soldar Fotosensible con regulación DIN9-13 con doble alimentación, solar y batería, la hace más versátil y prolonga la vida útil de la batería al tener una fuente alterna de alimentación.</p>
                            
                            <h6>Características</h6>
                            <ul>
                                <li>Doble sensor foto sensible que favorece a una mejor detección del arco.</li>
                                <li>Ligera y confortable, lo que la hace ideal para largas jornadas de trabajo y evitar fatiga y dolores corporales causados por peso excesivo en la careta.</li>
                                <li>Indicador LED de color rojo de baja carga, notifica de una forma sencilla y visible para que la careta no se quede sin baterías.</li>
                            </ul>
                            
                            <h6>Especificaciones Técnicas</h6>
                            <ul>
                                <li>Estandares: CE(1/2/1/2), ECS (1833)</li>
                                <li>Área de visión: 94x34 mm</li>
                                <li>DIN en estado claro: DIN4</li>
                                <li>DIN en estado oscuro: DIN 4/9-13 (REGULABLE)</li>
                                <li>Regulación sensibilidad: Micrométrica</li>
                                <li>Tiempo de reacción: &lt;1/30000 S (ANSI,+23 )</li>
                                <li>Número de sensores: 2</li>
                                <li>Nivel de protección UV/R: DIN16</li>
                                <li>Alimentación de celda: Solar y batería (DUAL)</li>
                                <li>Medidas externas: 21.5 largo x 23.0 ancho x 32.3cm alto</li>
                                <li>Peso: 0.4 kg</li>
                            </ul>
                            <h6>Precio: $130.000</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-shopping-cart"></i>
                    Añadir al Carrito
                </button>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>