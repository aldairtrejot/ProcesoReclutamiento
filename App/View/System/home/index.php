<?php
include '../../nav-menu.php';
?>

<div class="container-fluid bg-image nav-padding">
    <br>
    <div class="card border-light shadow-lg">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-auto">
                        <div class="vertical-line"></div>
                    </div>
                    <div class="col padding-left-0">
                        <h4>¡HOLA, <?php echo $nombre ?>!</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="card border-light">
        <div class="card-body">
            <!--
            <h3 class="card-title tittle-card-index">SISTEMA INTEGRAL DE RECURSOS HUMANOS</h3>
-->

            <div class="row">
                <div class="container">
                    <div class="alert alert-warning" role="alert">
                        This is a warning alert—check it out!
                    </div>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="container">

                    <div class="col-12 col-md-12 col-lg-12 col-xl-8 mb-8">
                        <div class="card font-size-modulo shadow-lg">
                            <h5 class="card-header text-center background-modal color-text-tittle">Mi información</h5>
                            <div class="card-body">
                                <?php include 'mostrar.php' ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <?php if (false) { ?> <!-- ROLE_CENTRAL -->
                <div class="row">
                    <div class="col">
                        <?php include 'CardCentral.php' ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (false) { ?> <!-- ROLE_CENTRAL -->
                <div class="row">
                    <div class="col">
                        <?php include 'CardHraes.php' ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (false) { ?> <!-- ROLE_CENTRAL -->
                <div class="row">
                    <div class="col">
                        <?php //include 'CardHraes.php' ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (false) { ?> <!-- ROLE_CENTRAL -->
                <div class="row">
                    <div class="col">
                        <?php include 'CardHraes.php' ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <br>

    <!--
    <div class="card border-light shadow-lg">
        <div class="card-body">
            <div class="btn-container">
                <div class="row">
                    <div class="col-12">
                        <button id="button_cat" style="background:white" type="button"
                            class="btn btn-light btn-block btn-with-shadow">
                            <i class="fa fa-building"></i><br>
                            Banco
                        </button>
                        <button id="button_cat" style="background:white" type="button"
                            class="btn btn-light btn-block btn-with-shadow">
                            <i class="fa fa-id-badge"></i><br>
                            Puesto
                        </button>
                        <button id="button_cat" style="background:white" type="button"
                            class="btn btn-light btn-block btn-with-shadow">
                            <i class="fa fa-align-left"></i><br>
                            Conceptos
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

            -->

            <input type="hidden" value="<?php echo $id_postulantes ?>" id="id_postulantes">

</div>
<!--
<script src="../../../../js/Global/Inicio/Inicio.js"></script>
            -->

<?php include '../../librerias.php' ?>
<?php include 'AgregarEditar.php'; ?>
<script src="../../../../js/Global/Inicio/postulacion.js"></script>