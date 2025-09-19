<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Libros</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="background">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                    <h1 class="mb-0">Libros</h1>
                    <a href="<?= base_url('menu'); ?>" class="btn btn-dark">
                        Volver al Menú
                    </a>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Nuevo Libro
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Libro</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('agregarLibro'); ?>" method="post">
                                    <label for="txt_codigo_libro_add" class="form-label">Codigo de Libro</label>
                                    <input type="number" name="txt_codigo_libro_add" id="txt_codigo_libro_add" class="form-control">

                                    <label for="txt_codigo_autor_add" class="form-label">Codigo de Autor</label>
                                    <input type="number" name="txt_codigo_autor_add" id="txt_codigo_autor_add" class="form-control">

                                    <select class="form-select mt-4" name="lst_editorial_add" id="lst_editorial_add">
                                        <option selected>Editorial</option>
                                        <?php foreach ($datosEditoriales as $editorial): ?>
                                            <option value="<?=$editorial['codigo_editorial'];?>"> <?=$editorial['nombre'];?> </option>
                                        <?php endforeach; ?>
                                    </select>

                                    <label for="txt_titulo_add" class="form-label">Titulo</label>
                                    <input type="text" name="txt_titulo_add" id="txt_titulo_add" class="form-control">

                                    <label for="txt_precio_add" class="form-label">Precio</label>
                                    <input type="number" name="txt_precio_add" id="txt_precio_add" class="form-control">

                                    <select class="form-select mt-4" name="lst_estado" id="lst_estado">
                                        <option selected>Estado</option>
                                        <?php foreach ($datosEstados as $estado): ?>
                                            <option value="<?=$estado['codigo_estado'];?>"> <?=$estado['nombre'];?> </option>
                                        <?php endforeach; ?>
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
                            <th>Codigo de Libro</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                            <th>Titulo</th>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($datos->getResult() as $libro) : ?>
                            <tr>
                                <td><?= $libro->codigo_libro; ?></td>
                                <td><?= $libro->codigo_autor; ?></td>
                                <td><?= $libro->Editorial; ?></td>
                                <td><?= $libro->titulo; ?></td>
                                <td><?= $libro->precio; ?></td>
                                <td><?= $libro->estado; ?></td>
                                <td>
                                    <a href="<?= base_url('eliminar_libro/') . $libro->codigo_libro; ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                    <a href="<?= base_url('buscar_libro/') . $libro->codigo_libro; ?>" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
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