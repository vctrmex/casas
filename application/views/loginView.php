<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Links Estilos CSS -->
    <link rel="stylesheet" href="styles/styles.css">
    <!--Feather Icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <title>Villa Quietud</title>
  </head>
  <body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="d-flex justify-content-center">
                    <img src="assets/logo vq.svg" alt="" class="img-fluid">
                </div>
                <h1 class="text-center">¡Agiliza el pago en caseta!</h1>
                <p class="text-center">Podra pagar más rápidamente sus cuotas y llevar un registro de todas sus aportaciones mediante el sistema de Villa Quietud</p>
                <div class="card card-body my-3">
                    <form role="form" action="<?php echo site_url('Login/signin');?>" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Correo Electrónico</label>
                            <input type="email" name="userName" id="" placeholder="nombre@correo.com" class="form-control" value="<?php echo set_value('userName'); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Contraseña</label>
                            <input type="password" name="password" id="" placeholder="Introduzca su contraseña" class="form-control" require>
                        </div>
                        <div class="d-grid mb-5">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                        
                        <a href="<?php echo site_url('perdi-mis-accesos');?>"> <p class="text-center">Olvide mi contraseña</p></a>
                    </form>
                </div>
                <?php echo form_error('userName', '<div class="alert alert-warning" role="alert">', '</div>'); ?> 
                <p class="text-center">
                    Para registrarse en el sistema acuda a la caseta de cobro ubicada en Hacienda Los Morales esquina Hacienda Texmelucan de Lunes a Viernes de 9am a 6pm, Sabados 9am a 3pm.
                </p>
            </div>
        </div>
    </div>

    

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!--Feather Icon Replace-->
    <script>
        feather.replace()
      </script>
  </body>
</html>