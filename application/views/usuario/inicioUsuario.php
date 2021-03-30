<header>
	<div class="container">
		<div class="row mb-2">
			<div class="col-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container-fluid">
						<a class="navbar-brand" href="#">
							<img src="<?php echo base_url('resources/assets/images/logooficial.svg') ?>" alt="" class="img-fluid" id="logo-menu">
						</a>

						<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
							data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">

							<div class="me-auto mb-2 mb-lg-0 lh-1">
								<div class="fs-6"><?php echo $vecino['nombre']; ?></div>
								<div class="fs-6 fw-bold"><?php echo $casadelvecino['calle']; ?></div>
								<div class="fs-6">#<?php echo sprintf('%06d', $vecino['id']); ?></div>
								<a download="<?php echo base_url() . "resources/qrcodes/".'qr_code_' . sprintf('%06d', $vecino['id']).'.png' ?>" href="<?php echo base_url() . "resources/qrcodes/".'qr_code_' . sprintf('%06d', $vecino['id']).'.png' ?>" title="<?php echo base_url() . "resources/qrcodes/".'qr_code_' . sprintf('%06d', $vecino['id']).'.png' ?>"> Descargar QR</a>
							</div>


							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="<?php echo base_url('Usuario/verUsuario/'.sprintf('%06d', $vecino['id'])); ?>" class="nav-link"><i data-feather="user"></i> Mis Datos</a>
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
		<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3 d-flex">
			<div class="card col d-flex align-items-center">
                <i class="fas fa-calendar mt-3" style="font-size: 2em;"></i>
				<div class="card-body text-center">
					<h3>Septiembre</h3>
					<p>Se muestran los resultados del último corte</p>
					<h3>Ingresos / Egresos</h3>
					<div>
						<span class="moneda"><?php echo number_format($total_ingresos,2); ?></span>/<span class="moneda"><?php echo number_format($total_egresos,2); ?></span>
					</div>
					<div class="d-grid mt-3">
						<a href="<?php echo base_url('Usuario/balanceDeIngresosEgresos'); ?>" class="btn btn-info">Ver más</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3 d-flex">
			<div class="card col d-flex align-items-center">
            <i class="fas fa-house-user mt-3" style="font-size: 2em;"></i>
				<div class="card-body text-center">
					<h3>Total de Aportaciones</h3>

					<p>
						<span><?php echo $total_viviendas; ?></span> Viviendas de <span>1002</span>
					</p>
					<!-- 
					<div class="d-grid mb-5">
						<a href="aportaciones.html" class="btn btn-info">Ver más</a>
					</div>
-->
				</div>
			</div>
		</div>
		<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3 d-flex">
			<div class="card col d-flex align-items-center">
            <i class="fas fa-truck mt-3" style="font-size: 2em;"></i>
				<div class="card-body text-center">
					<h3>Vehiculos Registrados</h3>
					<p><span><?php echo $cantidad_carros_del_vecino; ?></span> Vehiculos</p>
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
					<div><b>Usted Pertenece a: <?php echo $chat_whats; ?> </b></div>
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
							
							<?php if($ultima_aportacion_del_vecino == false){ ?>
								<div class="alert alert-danger">No se registraron aportaciones.</div>
							<?php }else{?>
								<tr>
								<td><?php echo $ultima_aportacion_del_vecino['anio_aportacion']; ?></td>
								<td><?php echo $ultima_aportacion_del_vecino['mes_aportacion']; ?></td>
								<td><span class="moneda"><?php echo number_format($ultima_aportacion_del_vecino['cantidad'],2); ?></span></td>
								<td><?php echo $ultima_aportacion_del_vecino['fecharegistro']; ?></td>
								<td><?php echo $ultima_aportacion_del_vecino['comentario_aportacion']; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<div class="d-grid mt-3">
						<a href="<?php echo base_url('Usuario/verMisAportaciones'); ?>" class="btn btn-info">Ver más</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<h5>Redes Sociales</h5>
			<a href="#" class="me-3 btn btn-primary"><i class="fa fa-facebook-f"></i> Facebook</a>
			<a href="#" class="btn btn-primary"><i class="fa fa-twitter"></i> Twitter</a>
		</div>
	</div>
</main>



<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!--Feather Icon Replace-->
<script>
	feather.replace()

</script>
