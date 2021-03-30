<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Villa Quietud</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('resources'); ?>/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('resources'); ?>/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="<?php echo base_url('resources'); ?>/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url('resources'); ?>/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url('resources'); ?>/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('resources'); ?>/assets/css/shared/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo base_url('resources'); ?>/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center text-center error-page bg-primary">
          <div class="row flex-grow">
            <div class="col-lg-7 mx-auto text-white">
              <div class="row align-items-center d-flex flex-row">
                <div class="col-lg-6 text-lg-right pr-lg-4">
                  <h1 class="display-1 mb-0">404</h1>
                </div>
                <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                  <h2>Disculpa!</h2>
                  <h3 class="font-weight-light">Parece que la pagina que buscas no se encuentra.</h3>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-12 text-center mt-xl-2">
                <?php 
                  
                  switch ($this->session->userdata('id_role')) {
                        case '1':
                          # code...
                          ?>
                        <a class="text-white font-weight-medium" href="<?php echo base_url('Dashboard') ?>">Volver a mi Inicio</a>
                          <?php
                          break;
                        case '2':
                        # code...
                        ?>
                        <a class="text-white font-weight-medium" href="<?php echo base_url('Dashboard') ?>">Volver a mi Inicio</a>
                        <?php
                        break;
                        case '3':
                        # code...
                        ?>
                        <a class="text-white font-weight-medium" href="<?php echo base_url('Home') ?>">Volver a mi Inicio</a>
                        <?php
                        break;
                        default:
                        ?>
                        <a class="text-white font-weight-medium" href="<?php echo base_url('') ?>">Volver al inicio</a>
                        <?php
                        break;
                  }
                  ?>
                  
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-12 mt-xl-2">
                  <p class="text-white font-weight-medium text-center">Copyright © villaquietud.com 2020</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('resources'); ?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?php echo base_url('resources'); ?>/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?php echo base_url('resources'); ?>/assets/js/shared/off-canvas.js"></script>
    <script src="<?php echo base_url('resources'); ?>/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <script src="<?php echo base_url('resources'); ?>/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>