<div class="row mb-3">
    <div class="col-md-12">
        <?php echo $this->session->flashdata('alert_msg'); ?>
    </div>
</div>

<div class="row mb-3">




	<div class="col-12 mb-3">
		<h1>Egresos</h1>
	</div>
	<div class="col-4 text-center">
		<div class="card bordes-rojos">
			<div class="card-body">
				<p>Egresos del dia</p>
				<span class="fs-3"><b class="moneda"><?php echo number_format($egreso_al_dia, 2); ?></b></span>
			</div>
		</div>
	</div>
	<div class="col-4 text-center">
		<div class="card bordes-rojos">
			<div class="card-body">
				<p>Egresos ultimos 15 dias del mes</p>
				<span class="fs-3"><b class="moneda"><?php echo number_format($egreso_15_dias, 2); ?></b></span>
			</div>
		</div>
	</div>
	<div class="col-4 text-center">
		<div class="card bordes-rojos">
			<div class="card-body">
				<p>Egresos del Mes</p>
				<span class="fs-3"><b class="moneda">5,000.00</b></span>
			</div>
		</div>
	</div>
</div>

<div class="row my-4">
	<div class="col-12">
		<h4>Egreso Mensual</h4>
		<div class="d-flex">
			<select class="form-control me-3" aria-label="Default select example">
				<option selected>Seleccione Año</option>
				<option value="2021">2021</option>
				<option value="2020">2020</option>
				<option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
			</select>
			<select class="form-control" aria-label="Default select example">
				<option selected>Seleccione Mes</option>
				<option value="1">Enero</option>
				<option value="2">Febrero</option>
				<option value="3">Marzo</option>
				<option value="4">Abril</option>
				<option value="5">Mayo</option>
				<option value="6">Junio</option>
				<option value="7">Julio</option>
				<option value="8">Agosto</option>
				<option value="9">Septiembre</option>
				<option value="10">Octubre</option>
				<option value="11">Noviembre</option>
				<option value="12">Diciembre</option>
			</select>
		</div>
	</div>
</div>

<!--Canvas Charts JS (Estadisticas)-->
<div class="row mb-3">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<canvas id="chLine"></canvas>
			</div>
		</div>
	</div>
</div>

<div class="row my-5">
	<div class="col-12">
		<div class="d-flex justify-content-between">
			<h3>Registro de Egresos</h3>
			<a href="<?php echo base_url('Egreso/add'); ?>" class="btn btn-success"> Registrar
				Egreso</a>
		</div>
		<div class="card mt-4">
			<div class="card-body">
				<table class="table text-center">
					<thead>
						<tr>
							<th>Egreso #</th>
							<th>Concepto</th>
							<th>Gasto</th>
							<th>Fecha</th>
							<th>Nota</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="numeral">02166</td>
							<td>Pago Seguridad</td>
							<td class="moneda">40,000.00</td>
							<td>15/09/2019</td>
							<td>5487778</td>
							<td><a href="editar-egreso.html"><i data-feather="edit"></i> Editar</a></td>
							<td><a href="#"><i data-feather="trash"></i> Borrar</a></td>
						</tr>
						<tr>
							<td class="numeral">02166</td>
							<td>Pago Seguridad</td>
							<td class="moneda">40,000.00</td>
							<td>15/09/2019</td>
							<td>5487778</td>
							<td><a href="editar-egreso.html"><i data-feather="edit"></i> Editar</a></td>
							<td><a href="#"><i data-feather="trash"></i> Borrar</a></td>
						</tr>
						<tr>
							<td class="numeral">02166</td>
							<td>Pago Seguridad</td>
							<td class="moneda">40,000.00</td>
							<td>15/09/2019</td>
							<td>5487778</td>
							<td><a href="editar-egreso.html"><i data-feather="edit"></i> Editar</a></td>
							<td><a href="#"><i data-feather="trash"></i> Borrar</a></td>
						</tr>
						<tr>
							<td class="numeral">02166</td>
							<td>Pago Seguridad</td>
							<td class="moneda">40,000.00</td>
							<td>15/09/2019</td>
							<td>5487778</td>
							<td><a href="editar-egreso.html"><i data-feather="edit"></i> Editar</a></td>
							<td><a href="#"><i data-feather="trash"></i> Borrar</a></td>
						</tr>
						<tr>
							<td class="numeral">02166</td>
							<td>Pago Seguridad</td>
							<td class="moneda">40,000.00</td>
							<td>15/09/2019</td>
							<td>5487778</td>
							<td><a href="editar-egreso.html"><i data-feather="edit"></i> Editar</a></td>
							<td><a href="#"><i data-feather="trash"></i> Borrar</a></td>
						</tr>
						<tr>
							<td class="numeral">02166</td>
							<td>Pago Seguridad</td>
							<td class="moneda">40,000.00</td>
							<td>15/09/2019</td>
							<td>5487778</td>
							<td><a href="editar-egreso.html"><i data-feather="edit"></i> Editar</a></td>
							<td><a href="#"><i data-feather="trash"></i> Borrar</a></td>
						</tr>
						<tr>
							<td class="numeral">02166</td>
							<td>Pago Seguridad</td>
							<td class="moneda">40,000.00</td>
							<td>15/09/2019</td>
							<td>5487778</td>
							<td><a href="editar-egreso.html"><i data-feather="edit"></i> Editar</a></td>
							<td><a href="#"><i data-feather="trash"></i> Borrar</a></td>
						</tr>
						<tr>
							<td class="numeral">02166</td>
							<td>Pago Seguridad</td>
							<td class="moneda">40,000.00</td>
							<td>15/09/2019</td>
							<td>5487778</td>
							<td><a href="editar-egreso.html"><i data-feather="edit"></i> Editar</a></td>
							<td><a href="#"><i data-feather="trash"></i> Borrar</a></td>
						</tr>
						<tr>
							<td class="numeral">02166</td>
							<td>Pago Seguridad</td>
							<td class="moneda">40,000.00</td>
							<td>15/09/2019</td>
							<td>5487778</td>
							<td><a href="editar-egreso.html"><i data-feather="edit"></i> Editar</a></td>
							<td><a href="#"><i data-feather="trash"></i> Borrar</a></td>
						</tr>
						<tr>
							<td class="numeral">02166</td>
							<td>Pago Seguridad</td>
							<td class="moneda">40,000.00</td>
							<td>15/09/2019</td>
							<td>5487778</td>
							<td><a href="editar-egreso.html"><i data-feather="edit"></i> Editar</a></td>
							<td><a href="#"><i data-feather="trash"></i> Borrar</a></td>
						</tr>
						<tr>
							<td class="numeral">02166</td>
							<td>Pago Seguridad</td>
							<td class="moneda">40,000.00</td>
							<td>15/09/2019</td>
							<td>5487778</td>
							<td><a href="editar-egreso.html"><i data-feather="edit"></i> Editar</a></td>
							<td><a href="#"><i data-feather="trash"></i> Borrar</a></td>
						</tr>
						<tr>
							<td class="numeral">02166</td>
							<td>Pago Seguridad</td>
							<td class="moneda">40,000.00</td>
							<td>15/09/2019</td>
							<td>5487778</td>
							<td><a href="editar-egreso.html"><i data-feather="edit"></i> Editar</a></td>
							<td><a href="#"><i data-feather="trash"></i> Borrar</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!--Pagination-->
<div class="row mb-5">
	<div class="col-12 d-flex justify-content-center align-items-center">
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item"><a class="page-link" href="#">Anterior</a></li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
			</ul>
		</nav>
	</div>
</div>
