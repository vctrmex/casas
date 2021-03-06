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
    <main class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary sidebar collapse" style="height: 100vh;">
                <div class="position-sticky pt-3">

                  <div class="d-flex flex-column align-items-center text-center">
                    <a href="index.html"><img src="assets/logo vq.svg" alt="" id="logo-menu"></a>
                    <a href="user.html">
                      <p class="m-0">Luis Muñoz</p>
                      <span><b>Admin</b></span>
                    </a>
                  </div>

                  <hr>
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.html">
                        <span data-feather="home"></span>
                        Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="aportaciones.html">
                        <span data-feather="dollar-sign"></span>
                        Aportaciones
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="viviendas.html">
                        <span data-feather="users"></span>
                        Viviendas
                      </a>
                    </li>
                    <hr>
                    <li class="nav-item">
                      <a class="nav-link" href="ingresos.html">
                        <span data-feather="arrow-right"></span>
                        Ingresos
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="egresos.html">
                        <span data-feather="arrow-left"></span>
                        Egresos
                      </a>
                    </li>
                    <hr>
                    <li class="nav-item">
                      <a class="nav-link" href="altausuarios">
                        <span data-feather="user-check"></span>
                        Alta Usuarios
                      </a>
                    </li>
                    <hr>
                    <li class="nav-item">
                      <a class="nav-link" href="login.html">
                        <span data-feather="log-out"></span>
                        Salir
                      </a>
                    </li>
                  </ul>
                </div>
            </nav>

            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
              
              <!-- Buscador General -->
              <div class="container-fluid">
                <div class="input-group my-3">
                  <input type="text" name="" id="" class="form-control" placeholder="Buscar">
                  <span class="input-group-text">
                    <i data-feather="search"></i>
                  </span>
                </div>
              </div>
              
              <div class="row">
                <div class="col-12">
                  <h1>Dashboard</h1>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-12 mb-3">
                  <h3>Ingresos</h3>
                </div>
                <div class="col-4 text-center">
                  <div class="card bordes-verdes">
                    <div class="card-body">
                      <p>Ingresos del dia</p>
                      <span class="fs-3"><b class="moneda">5,000.00</b></span>
                    </div>
                  </div>
                </div>
                <div class="col-4 text-center">
                  <div class="card bordes-verdes">
                    <div class="card-body">
                      <p>Ingresos ultimos 15 dias del mes</p>
                      <span class="fs-3"><b class="moneda">15,000.00</b></span>
                    </div>
                  </div>
                </div><div class="col-4 text-center">
                  <div class="card bordes-verdes">
                    <div class="card-body">
                      <p>Ingresos del dia</p>
                      <span class="fs-3"><b class="moneda">5,000.00</b></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-3">
                  <h3>Estadisticas</h3>
                </div>
                <div class="col-4 text-center">
                  <div class="card bordes-azules">
                    <div class="card-body">
                      <p>Vecinos que aportarón hoy</p>
                      <span class="fs-3"><b>25</b></span>
                    </div>
                  </div>
                </div>
                <div class="col-4 text-center">
                  <div class="card bordes-azules">
                    <div class="card-body">
                      <p>Vecinos que aportarón en los ultimos 15 dias del mes</p>
                      <span class="fs-3"><b>105</b></span>
                    </div>
                  </div>
                </div>
                <div class="col-4 text-center">
                  <div class="card bordes-azules">
                    <div class="card-body">
                      <p>Total de vecinos que aportaron en el mes</p>
                      <span class="fs-3"><b>236</b></span>
                    </div>
                  </div>
                </div>
                <div class="col-4 text-center mt-3">
                  <div class="card bordes-azules">
                    <div class="card-body">
                      <p>Viviendas registradas/de</p>
                      <span class="fs-3"><b>856/1400</b></span>
                    </div>
                  </div>
                </div>
                <div class="col-4 text-center mt-3">
                  <div class="card bordes-azules">
                    <div class="card-body">
                      <p>Cantidad de vehiculos registrados</p>
                      <span class="fs-3"><b>2250</b></span>
                    </div>
                  </div>
                </div>
              </div>
              

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