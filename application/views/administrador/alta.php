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
                      <a class="nav-link" href="alta-usuarios.html">
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
              
              <div class="row mb-3">
                <div class="col-12">
                  <h1>Alta de Usuarios</h1>
                  <p>Tienes el rol de <b>Administrador</b> por lo que podras dar de alta a otros Administradores o Gestores de Cobranza.</p>
                </div>
              </div>

              <div class="row mb-3 d-flex justify-content-center">
                <div class="col-6">
                  <div class="card">
                    <div class="card-body">
                       <h4>Registro de nuevo usuario</h4>
                       <form action="add" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nombre y Apellido</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Juan Perez" name = 'nombre' require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Numero Celular</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="10 digitos" name="cel" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nombre@correo.com" name="mail" require>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Selecciona un Rol</label>
                                <select class="form-select" aria-label="Default select example" name = 'id_role'>
                                    <option selected>Selecciona una opción</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Cobranza</option>
                                  </select>
                                  <div class="form-text">Un Administrador tendra los mismo privilegios que su cuenta, un Gestor de cobranza solo podra acceder a los cobros y edición de viviendas.</div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                                <a href="user.html" class="btn btn-danger">Cancelar</a>
                            </div>
                       </form>
                    </div>
                  </div>
                </div>
              </div>

             </div>

        </div>
    </main>
   
    <!-- Modal Usuarios-->
    <div class="modal fade" id="myModalData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
            Registro creado correctamente, enviaremos un correo electronico con una contraseña autogenerada para acceder al sistema
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Aceptar</button>
            </div>
        </div>
        </div>
    </div>


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