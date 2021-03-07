<div class="row">
    <div class="col-md-12">
        <?php echo $this->session->flashdata('alert_msg');?>
    </div>
</div>

<div class="row mb-3">

	<div class="col-4">
		<div class="card" style="height:100%">
			<div class="card-body">
				<h4><?php echo $casadelvecino['calle']; ?></h4>
				<p class="m-0"><b>Contacto Principal</b></p>
				<p><?php echo $vecino['nombre']; ?></p>
				<p class="m-0"><b>Automoviles Registrados</b></p>
				<div class="fs-1"><b><?php echo $cantidad_carros_del_vecino; ?></b></div>
			</div>
		</div>
	</div>

	<div class="col-8">
		<div class="card">
			<div class="card-body">
				<h3>Registrar Aportación</h3>
				<form action="<?php echo base_url('Aportacion/agregarAportacionByVecino') ?>" class="" method="post">
					<div class="d-flex my-3">
						<input required type="number" step="0.01" name="cantidad_aportacion" id="" class="form-control" placeholder="$">
						<div class="form-group">
							<select name="mes_aportacion" required class="form-control" aria-label="Default select example">
								<option value="">Mes</option>
								<option value="01">Enero</option>
								<option value="02">Febrero</option>
								<option value="03">Marzo</option>
								<option value="04">Abril</option>
								<option value="05">Mayo</option>
								<option value="06">Junio</option>
								<option value="07">Julio</option>
								<option value="08">Agosto</option>
								<option value="09">Septiembre</option>
								<option value="10">Octubre</option>
								<option value="11">Noviembre</option>
								<option value="12">Diciembre</option>
							</select>
						</div>

						<div class="form-group">
							<select name="anio_aportacion" required class="form-control" aria-label="Default select example">
								<option value="">Año</option>
								<option value="2021">2021</option>
								<option value="2020">2020</option>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
								<option value="2017">2017</option>
							</select>
						</div>
					</div>

					<input required type="text" name="comentarios_aportacion" id="" class="form-control mb-3"
						placeholder="Persona quien realiza el pago">

                    <input type="hidden" name="id_vecino" value="<?php echo $id_vecino; ?>">

					<div class="d-grid">
                        <button type="submit" class="btn btn-primary">Agregar</button>
					</div>

				</form>
			</div>
		</div>

	</div>


	<div class="col-4 my-3">
		<div class="card" style="height:100%">
			<div class="card-body">
				<h4>Ultima Aportación</h4>
				<p class="m-0 fs-4"><b class="moneda"><?php echo number_format($ultima_aportacion_del_vecino['cantidad'], 2); ?></b></p>
				<p class="m-0">Mes: <span><?php
                switch ($ultima_aportacion_del_vecino['mes_aportacion']) {
                    case '1':
                        # code...
                        echo 'Enero';
                    break;
                    case '2':
                        # code...
                        echo 'Febrero';
                    break;
                    case '3':
                        # code...
                        echo 'Marzo';
                    break;
                    case '4':
                        # code...
                        echo 'Abril';
                    break;
                    case '5':
                        # code...
                        echo 'Mayo';
                    break;
                    case '6':
                        # code...
                        echo 'Junio';
                    break;
                    case '7':
                        # code...
                        echo 'Julio';
                    break;
                    case '8':
                        # code...
                        echo 'Agosto';
                    break;
                    case '9':
                        # code...
                        echo 'Septiembre';
                    break;
                    case '10':
                        # code...
                        echo 'Octubre';
                    break;
                    case '11':
                        # code...
                        echo 'Noviembre';
                    break;
                    case '12':
                        # code...
                        echo 'Diciembre';
                    break;
                }
                ?></span></p>
				<p>Año: <span><?php echo $ultima_aportacion_del_vecino['anio_aportacion']; ?></span></p>
			</div>
		</div>
	</div>

	<!-- Esto solo es un registro, no se suma al ingreso y solo aparece en la cuenta del usuario ya que la donacion puede ser tambien  fisica-->
	<div class="col-8 my-3">
		<div class="card">
			<div class="card-body">
				<form action="<?php echo base_url('Aportacion/agregarOtraAportacionByVecino'); ?>" method="post">
					<h3>Donación Monetaria/Fisica</h3>
					<div class="d-flex my-3">
						<input name="unidades" required type="text" class="form-control" placeholder="Unidad(es)">
						<input name="descripcion" required type="text" class="form-control ms-3" placeholder="Cantidad/Descripción Corta">
					</div>
                    <input type="hidden" name="id_vecino" value="<?php echo $id_vecino; ?>">
					<div class="d-grid">
                        <button type="submit" class="btn btn-primary">Registrar</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
