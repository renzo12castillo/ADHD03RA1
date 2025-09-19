<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Modificar Libros</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="background">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                    <h1 class="mb-0">Modificar Libro</h1>
                    <a href="<?= base_url('libros'); ?>" class="btn btn-dark">
                        Volver
                    </a>
                </div>

                <form action="<?= base_url('actualizar_libro') ?>" method="post">
                    <label for="txt_codigo_libro_mod" class="form-label">Codigo de Libro</label>
                    <input type="number" name="txt_codigo_libro_mod" id="txt_codigo_libro_mod" class="form-control" value="<?= $datos['codigo_libro']; ?>" readonly>

                    <label for="txt_codigo_autor_mod" class="form-label">Codigo de Autor</label>
                    <input type="number" name="txt_codigo_autor_mod" id="txt_codigo_autor_mod" class="form-control" value="<?= $datos['codigo_autor']; ?>" readonly>

                    <select class="form-select mt-4" name="lst_editorial_mod" id="lst_editorial_mod" required>
                        <option disabled selected>Seleccione una editorial</option>
                        <?php foreach ($datosEditoriales as $editorial): ?>
                            <option value="<?= $editorial['codigo_editorial']; ?>"
                                <?= $editorial['codigo_editorial'] == $datos['codigo_editorial'] ? 'selected' : '' ?>>
                                <?= $editorial['nombre']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>


                    <label for="txt_titulo_mod" class="form-label">Titulo</label>
                    <input type="text" name="txt_titulo_mod" id="txt_titulo_mod" class="form-control" value="<?= $datos['titulo']; ?>">

                    <label for="txt_precio_mod" class="form-label">Precio</label>
                    <input type="number" name="txt_precio_mod" id="txt_precio_mod" class="form-control" value="<?= $datos['precio']; ?>">

                    <select class="form-select mt-4" name="lst_estado_mod" id="lst_estado_mod" required>
                        <option disabled selected>Seleccione un estado</option>
                        <?php foreach ($datosEstados as $estado): ?>
                            <option value="<?= $estado['codigo_estado']; ?>"
                                <?= $estado['codigo_estado'] == $datos['estado'] ? 'selected' : '' ?>>
                                <?= $estado['nombre']; ?>
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