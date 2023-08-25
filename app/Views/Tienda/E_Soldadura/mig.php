<?php echo $this->extend('Tienda/t_navbar.php'); ?>
<?php echo $this->section('navbar'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">SOLDADOR HYUNDAI 180 AMP. 110/220 VOL</h5>
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="dark">
                    <img src="<?php echo base_url() ?>img/Equipos_de_Soldadura/P_Mig/soldador-hyundai-180-amp-110220-vol.jpg"
                        class="img-fluid" />
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
                    <a href="<?php echo base_url() ?>/tienda/equipo_de_soldadura/mig" class="btn btn-primary">
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
                        <h5 class="modal-title">SOLDADOR HYUNDAI 180 AMP. 110/220 VOL MIG180D</h5>
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
                                src="<?php echo base_url() ?>img/Equipos_de_Soldadura/P_Mig/soldador-hyundai-180-amp-110220-vol.jpg"
                                alt="">
                        </div>
                        <div class="col-md-8">
                            <h6>Descripción</h6>
                            <p>Soldador Hyundai 180 Amp. 110/220 Vol MIG180D</p>
                            
                            <h6>Especificaciones</h6>
                            <ul>
                                <li>Tecnología inverter IGBT y ahorro de energía</li>
                                <li>Voltaje dual (110V/220V)</li>
                                <li>Protección sobrecalentamiento y sobrecorriente</li>
                                <li>Función MIG/MMA</li>
                                <li>Para uso con y sin gas</li>
                            </ul>
                            
                            <h6>Detalles Técnicos</h6>
                            <ul>
                                <li>Voltaje de entrada (V) 1P AC 110~120V / 220~240V,50/60Hz</li>
                                <li>Corriente de entrada (A) 37 31 33 30</li>
                                <li>Corriente y voltaje de salida 120A/20V 100A/24V 180A/27.2V 160A/27.2V</li>
                                <li>Corriente de salida (A) MIG/50-120 MMA/20-100 MIG/50-180 MMA/20-160</li>
                                <li>Voltaje sin carga (V) 50</li>
                                <li>Ciclo de trabajo (%) 35</li>
                                <li>Eficiencia (%) 85</li>
                                <li>Factor de poder (cosø) 0.73</li>
                                <li>Clase de protección IP21S</li>
                                <li>Clase de aislamiento F</li>
                                <li>Velocidad suministro alambre (m/min) 14</li>
                                <li>Diámetro alambre para soldar (mm) 0.6/0.8/1.0</li>
                                <li>Medidas (mm) 570*275*420</li>
                                <li>Peso neto (kg) 12</li>
                            </ul>
                            
                            <h6>Incluye</h6>
                            <ul>
                                <li>Antorcha MIG</li>
                                <li>Portaelectrodo con cable de 3m</li>
                                <li>Pinza a tierra con cable de 2m</li>
                                <li>Máscara y cepillo</li>
                            </ul>
                            <h6>Precio: $1.800.000</h6>
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