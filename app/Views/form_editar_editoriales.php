<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Modificar Editoriales</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="background">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                    <h1 class="mb-0">Modificar Editorial</h1>
                    <a href="<?= base_url('editoriales'); ?>" class="btn btn-dark">
                        Volver
                    </a>
                </div>

                <form action="<?=base_url('actualizar_editorial')?>" method="post">
                    <label for="txt_codigo_editorial" class="form-label">Codigo de Editorial</label>
                    <input type="number" name="txt_codigo_editorial" id="txt_codigo_editorial" class="form-control" value="<?=$datos['codigo_editorial'];?>" readonly>

                    <label for="txt_nombre" class="form-label">Nombre</label>
                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?=$datos['nombre'];?>">

                    <label for="txt_direccion" class="form-label">Direccion</label>
                    <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" value="<?=$datos['direccion'];?>">

                    <label for="txt_telefono" class="form-label">Telefono</label>
                    <input type="tel" name="txt_telefono" id="txt_telefono" class="form-control" value="<?=$datos['telefono'];?>">

                    <label for="txt_email" class="form-label">Email</label>
                    <input type="email" name="txt_email" id="txt_email" class="form-control" value="<?=$datos['email'];?>">

                    <button type="submit" class="form-control btn btn-dark mt-3">Modificar Datos</button>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>