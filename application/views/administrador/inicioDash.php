
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
				<span class="fs-3"><b class="moneda"><?php echo number_format($cantidad_ingresos_al_dia,2); ?></b></span>
			</div>
		</div>
	</div>
	<div class="col-4 text-center">
		<div class="card bordes-verdes">
			<div class="card-body">
				<p>Ingresos ultimos 15 dias del mes</p>
				<span class="fs-3"><b class="moneda"><?php echo number_format($cantidad_ingresos_15_dias,2); ?></b></span>
			</div>
		</div>
	</div>
	<div class="col-4 text-center">
		<div class="card bordes-verdes">
			<div class="card-body">
				<p>Ingresos del dia</p>
				<span class="fs-3"><b class="moneda"><?php echo number_format($cantidad_ingresos_al_dia,2); ?></b></span>
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
				<span class="fs-3"><b><?php echo $total_vecinos_que_aportaron_hoy; ?></b></span>
			</div>
		</div>
	</div>
	<div class="col-4 text-center">
		<div class="card bordes-azules">
			<div class="card-body">
				<p>Vecinos que aportarón en los ultimos 15 dias del mes</p>
				<span class="fs-3"><b><?php echo $total_vecinos_aportaron_15_dias; ?></b></span>
			</div>
		</div>
	</div>
	<div class="col-4 text-center">
		<div class="card bordes-azules">
			<div class="card-body">
				<p>Total de vecinos que aportaron en el mes</p>
				<span class="fs-3"><b><?php echo $total_vecinos_aportaron_al_mes; ?></b></span>
			</div>
		</div>
	</div>
	<div class="col-4 text-center mt-3">
		<div class="card bordes-azules">
			<div class="card-body">
				<p>Viviendas registradas/de</p>
				<span class="fs-3"><b><?php echo $total_viviendas; ?>/1400</b></span>
			</div>
		</div>
	</div>
	<div class="col-4 text-center mt-3">
		<div class="card bordes-azules">
			<div class="card-body">
				<p>Cantidad de vehiculos registrados</p>
				<span class="fs-3"><b><?php echo $total_autos; ?></b></span>
			</div>
		</div>
	</div>
</div>
