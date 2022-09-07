<!doctype html>
<html lang="es">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">

    <title>Futbol</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-dark navbar-custom">
            <div class="container">
                <a class="navbar-brand" href="../index.html">Fútbol Argento</a>
                <div class="flex-grow-0 ml-auto" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="../login.php">Volver</a></li>

                        <!-- <li class="nav-item"><a class="nav-link" href="visualMods/galeria.html">Galeria</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /Navbar -->
        <div class="container">
            
            <div class="row mx-auto shadow mt-4" style="max-width: 48rem; border: 1px solid #d0d0d0;">
                <div class="col-12 bg-light" style="border-bottom: 1px solid #d0d0d0;">
                    <h2 class="text-center font-weight-bold">REGISTRO DE REPRESENTANTE</h2>
                </div>
                <div class="col-12 col-md-4 bg-primary position-relative" style="border-right: 1px solid #d0d0d0; background: linear-gradient(135deg, #6f42c1 0%, #007bff 100%);">
                    <img src="../assets/logo.png" alt="logo" class="img-fluid position-absolute imgAbsolute">
                </div>
                <div class="col-12 col-md-8 bg-light py-3" style="border-left: 1px solid #d0d0d0;">
                    <form action="">

                        <div class="form-group">
                            <label for="cometID">Comet ID</label>
                            <input type="text" class="form-control" id="cometID" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="number" class="form-control" id="telefono" required>
                        </div>

                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Acepto los <a href="../pol-priv.php" target="_blank">terminos y condiciones</a>
                            </label>
                        </div>
                        <button class="btn btn-primary rounded-pill" type="submit" name="submit">Registrarse</button>
                        <a href="regRepre.php" class="ml-2">No tengo Comet</a>
                    </form>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        -->
    </body>
</html>