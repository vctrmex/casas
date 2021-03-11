<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('resources/'); ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('resources/'); ?>assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="<?php echo base_url('resources/'); ?>assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url('resources/'); ?>assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url('resources/'); ?>assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('resources/'); ?>assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('resources/'); ?>assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('resources/'); ?>assets/images/favicon.ico" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <h2><?php echo $title; ?></h2> </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <h2><?php echo 'VQ'; ?></h2> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $this->session->userdata('nombre'); ?></p>
                  <p class="designation">
                  
                  <?php 
                  
                  switch ($this->session->userdata('id_role')) {
                        case '1':
                          # code...
                          echo 'Cobranza';
                          break;
                        case '2':
                        # code...
                        echo 'Administrador';
                        break;
                        case '3':
                        # code...
                        echo 'Usuario';
                        break;
                  }
                  
                  
                  ?>
                  
                  </p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Opciones de Menú</li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Dashboard'); ?>">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Aportacion'); ?>">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Aportaciones</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Vivienda'); ?>">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Viviendas</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Ingreso'); ?>">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Ingresos</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Egreso'); ?>">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Egresos</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Usuario'); ?>">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Usuarios</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Login/logout'); ?>">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Cerrar Sesión</span>
              </a>
            </li>

          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            
            <?php echo $body; ?>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © villaquietud.com 2020</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('resources/'); ?>assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?php echo base_url('resources/'); ?>assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?php echo base_url('resources/'); ?>assets/js/shared/off-canvas.js"></script>
    <script src="<?php echo base_url('resources/'); ?>assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?php echo base_url('resources/'); ?>assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>