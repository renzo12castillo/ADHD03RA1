<?= $this->extend('layout/templatemenu') ?>

<?= $this->section('contentmenu'); ?>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h1 class="mb-5 mt-5">Menu</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="pe-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= base_url('images/grados.png') ?>" class="card-img-top" alt="Grados Escolares">
                            <div class="card-body">
                                <h5 class="card-title">Grados</h5>
                                <button type="button" class="btn btn-outline-info"><a href="<?= site_url('grados') ?>" class="text-decoration-none">Acceder</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pe-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= base_url('images/estudiantes.png') ?>" class="card-img-top" alt="Estudiantes">
                            <div class="card-body">
                                <h5 class="card-title">Estudiantes</h5>
                                <button type="button" class="btn btn-outline-info"><a href="<?= site_url('estudiantes') ?>" class="text-decoration-none">Acceder</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pe-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= base_url('images/prestamos.png') ?>" class="card-img-top" alt="Prestamos">
                            <div class="card-body">
                                <h5 class="card-title">Prestamos</h5>
                                <button type="button" class="btn btn-outline-info"><a href="<?= site_url('prestamos') ?>" class="text-decoration-none">Acceder</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pe-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= base_url('images/libros.png') ?>" class="card-img-top" alt="Libros">
                            <div class="card-body">
                                <h5 class="card-title">Libros</h5>
                                <button type="button" class="btn btn-outline-info"><a href="<?= site_url('libros') ?>" class="text-decoration-none">Acceder</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EN ESTA PARTE INICIA LA SEGUNDA SECCION DE CARDS-->

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="pe-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= base_url('images/empleados.png') ?>" class="card-img-top" alt="Empleados">
                            <div class="card-body">
                                <h5 class="card-title">Empleados</h5>
                                <button type="button" class="btn btn-outline-info"><a href="<?= site_url('empleados') ?>" class="text-decoration-none">Acceder</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pe-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= base_url('images/estados.png') ?>" class="card-img-top" alt="Estados">
                            <div class="card-body">
                                <h5 class="card-title">Estados</h5>
                                <button type="button" class="btn btn-outline-info"><a href="<?= site_url('estados') ?>" class="text-decoration-none">Acceder</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pe-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= base_url('images/autores.png') ?>" class="card-img-top" alt="Autores">
                            <div class="card-body">
                                <h5 class="card-title">Autores</h5>
                                <button type="button" class="btn btn-outline-info"><a href="<?= site_url('autores') ?>" class="text-decoration-none">Acceder</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pe-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= base_url('images/editoriales.png') ?>" class="card-img-top" alt="Editoriales">
                            <div class="card-body">
                                <h5 class="card-title">Editoriales</h5>
                                <button type="button" class="btn btn-outline-info"><a href="<?= site_url('editoriales') ?>" class="text-decoration-none">Acceder</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

<?= $this->endSection(); ?>