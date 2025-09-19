<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Modificar Prestamo</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="background">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                    <h1 class="mb-0">Modificar Prestamo</h1>
                    <a href="<?= base_url('prestamos'); ?>" class="btn btn-dark">
                        Volver
                    </a>
                </div>

                <form action="<?= base_url('actualizar_prestamo') ?>" method="post">
                    <label for="txt_numero_prestamo_mod" class="form-label">Numero de Prestamo</label>
                    <input type="number" name="txt_numero_prestamo_mod" id="txt_numero_prestamo_mod" class="form-control" value="<?= $datos['numero_prestamo']; ?>" readonly>

                    <label for="txt_codigo_libro_mod" class="form-label">Codigo de Libro</label>
                    <input type="number" name="txt_codigo_libro_mod" id="txt_codigo_libro_mod" class="form-control" value="<?= $datos['codigo_libro']; ?>">

                    <label for="txt_carne_alumno_mod" class="form-label">Alumno</label>
                    <input type="number" name="txt_carne_alumno_mod" id="txt_carne_alumno_mod" class="form-control" value="<?= $datos['carne_alumno']; ?>">

                    <label for="txt_fecha_prestamo_mod" class="form-label">Fecha de Prestamo</label>
                    <input type="date" name="txt_fecha_prestamo_mod" id="txt_fecha_prestamo_mod" class="form-control" value="<?= $datos['fecha_prestamo']; ?>">

                    <label for="txt_fecha_devolucion_mod" class="form-label">Fecha de Devolucion</label>
                    <input type="date" name="txt_fecha_devolucion_mod" id="txt_fecha_devolucion_mod" class="form-control" value="<?= $datos['fecha_devolucion']; ?>">

                    <select class="form-select mt-4" name="lst_empleado_mod" id="lst_empleado_mod">
                        <option selected>Empleado</option>
                        <?php foreach ($datosEmpleados as $empleado): ?>
                            <option value="<?= esc($empleado['codigo_empleado']); ?>">
                                <?= esc($empleado['nombre'] . ' ' . $empleado['apellido']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <button type="submit" class="form-control btn btn-dark mt-3">Modificar Datos</button>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>