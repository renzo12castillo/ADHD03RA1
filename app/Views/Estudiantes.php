<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="background">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                    <h1 class="mb-0">Estudiantes</h1>
                    <a href="<?= base_url('menu'); ?>" class="btn btn-dark">
                        Volver al Menú
                    </a>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Nuevo Grado
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Grado</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('agregarEstudiante'); ?>" method="post">
                                    <label for="txt_carne_alumno_add" class="form-label">Carné del Alumno</label>
                                    <input type="number" name="txt_carne_alumno_add" id="txt_carne_alumno_add" class="form-control">

                                    <label for="txt_nombre_add" class="form-label">Nombre</label>
                                    <input type="text" name="txt_nombre_add" id="txt_nombre_add" class="form-control">

                                    <label for="txt_apellido_add" class="form-label">Apellido</label>
                                    <input type="text" name="txt_apellido_add" id="txt_apellido_add" class="form-control">

                                    <label for="txt_direccion_add" class="form-label">Direccion</label>
                                    <input type="text" name="txt_direccion_add" id="txt_direccion_add" class="form-control">

                                    <label for="txt_tel_add" class="form-label">Telefono</label>
                                    <input type="tel" name="txt_tel_add" id="txt_tel_add" class="form-control">

                                    <label for="txt_email_add" class="form-label">Email</label>
                                    <input type="email" name="txt_email_add" id="txt_email_add" class="form-control">

                                    <label for="txt_fechanacimiento_add" class="form-label">Fecha de Nacimiento</label>
                                    <input type="date" name="txt_fechanacimiento_add" id="txt_fechanacimiento_add" class="form-control">

                                    <select class="form-select mt-4" name="lst_grado" id="lst_grado">
                                        <option selected>Grados</option>
                                        <?php foreach ($datosGrados as $grado) { ?>
                                                    
                                        <option value="<?=$grado['codigo_grado'];?>"> <?=$grado['nombre'];?> </option>
                                        
                                        <?php } ?>
                                    </select>

                                    <button type="submit" class="form-control btn btn-dark mt-3">Guardar</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-dark table-striped mt-5">
                    <thead>
                        <tr>
                            <th>Carné del Alumno</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Grado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($datos->getResult() as $estudiante) : ?>
                            <tr>
                                <td><?= $estudiante->carne_alumno; ?></td>
                                <td><?= $estudiante->nombre; ?></td>
                                <td><?= $estudiante->apellido; ?></td>
                                <td><?= $estudiante->direccion; ?></td>
                                <td><?= $estudiante->fechanacimiento; ?></td>
                                <td><?= $estudiante->grado; ?></td>
                                <td>
                                    <a href="<?= base_url('eliminar_estudiante/') . $estudiante->carne_alumno; ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                    <a href="<?= base_url('buscar_estudiante/') . $estudiante->carne_alumno; ?>" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>