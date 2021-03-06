<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Links Estilos CSS -->
    <link rel="stylesheet" href="styles/styles.css">
    <!--Feather Icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <title>Sistema de Administración Villa Quietud</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="assets/logo vq.svg" alt="" class="img-fluid" id="logo-menu">
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                <div class="me-auto mb-2 mb-lg-0 lh-1">
                                    <div class="fs-6">Germán Sanchez</div>
                                    <div class="fs-6 fw-bold">Hda Santa Ursula 81</div>
                                    <div class="fs-6">#0010525</div>
                                </div>


                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link"><i data-feather="home"></i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="user-data.html" class="nav-link"><i data-feather="user"></i> Mis Datos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/vq" class="nav-link"><i data-feather="x-square"></i> Salir</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 my-3">
                <h1>Datos generales de la asociación</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3 d-flex">
                <div class="card col d-flex align-items-center">
                    <i data-feather="calendar" class="icon-lg"></i>
                    <div class="card-body text-center">
                        <h3>Septiembre</h3>
                        <p>Se muestran los resultados del último corte</p>
                        <h3>Ingresos / Egresos</h3>
                        <div>
                            <span class="moneda">120,000.00</span>/<span class="moneda">110,000.00</span>
                        </div>
                        <div class="d-grid mt-3">
                            <a href="ingresos-egresos.html" class="btn btn-info">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3 d-flex">
                <div class="card col d-flex align-items-center">
                    <i data-feather="home" class="icon-lg"></i>
                    <div class="card-body text-center">
                        <h3>Total de Aportaciones</h3>
                        
                            <p>
                                <span>357</span> Viviendas de <span>1400</span>
                            </p>
                            <div class="d-grid mb-5">
                                <a href="aportaciones.html" class="btn btn-info">Ver más</a>
                            </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3 d-flex">
                <div class="card col d-flex align-items-center">
                    <i data-feather="truck" class="icon-lg"></i>
                    <div class="card-body text-center">
                        <h3>Vehiculos Registrados</h3>
                        <p><span>2300</span> Vehiculos</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3 d-flex">
                <div class="card col">
                    <div class="card-body">
                        <h3>Grupos de Whatsapp</h3>
                        <div><b>Villa Quietud:</b> 55 4875 7523</div>
                        <div><span><b>Santa Ursula:</b></span><span> 55 7587 9636</span> </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Ultima aportación registrada</h3>
                        <table class="table text-center">
                            <thead>
                              <tr>
                                <th scope="col">Año</th>
                                <th scope="col">Mes</th>
                                <th scope="col">Aportacion</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Aporto</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>2017</td>
                                <td>Septiembre</td>
                                <td><span class="moneda">220.00</span></td>
                                <td>15/Febrero/2021</td>
                                <td>Jose Sanchez</td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="d-grid mt-3">
                            <a href="aportaciones-usuario.html" class="btn btn-info">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h5>Redes Sociales</h5>
                <a href="#" class="me-3"><i data-feather="facebook"></i> Facebook</a> 
                <a href="#"><i data-feather="twitter"></i> Twitter</a>
            </div>
        </div>
    </main>



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

    <!--Feather Icon Replace-->
    <script>
        feather.replace()
    </script>
</body>

</html>