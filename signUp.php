<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crea una cuenta</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Archivo de estilos personalizados -->
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <div class="container text-center">
        <form>
            <div class="row">
                <div class="col">
                    <a href="index.php"><img src="images/logo.png" class="mb-3" alt="Logo" width="160" height="57"></a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h1 class="custom-h2 mb-3">Registrate</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-7 col-lg-5">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Escribe aquí tu correo</label>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-7 col-lg-5">
                    <button class="btn btn-primary w-100 mt-3" type="submit">Continuar</button>
                    <p class="mt-5 mb-3 text-body-secondary"> Al registrate, aceptas los terminos de uso y la política
                        de privacidad de GanttFlow.</p>
                </div>
            </div>

        </form>
    </div>
</body>

</html>