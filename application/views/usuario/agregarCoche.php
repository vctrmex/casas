<div class="row">
	<div class="col-md-9 ms-sm-auto col-lg-10 px-md-3">

		<div class="row">
			<div class="col-12">
				<h1>Alta de Usuarios</h1>
			</div>
		</div>

		<div class="row mb-3 d-flex justify-content-center">
			<div class="col-6">
				<div class="card">
					<div class="card-body">
						<h4>Registro de nuevo usuario</h4>
						<form action="<?php echo base_url('Usuario/agregarCoche/'.sprintf('%06d', $id_usuario)); ?>" method="POST">
							<div class="mb-3">
								<label for="marca" class="form-label">Marca</label>
								<input type="text" class="form-control" id="marca"
									aria-describedby="emailHelp" placeholder="Toyota" name='marca' value="<?php echo set_value('marca'); ?>">
                                <?php echo form_error('marca', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>
							<div class="mb-3">
								<label for="modelo" class="form-label">Modelo</label>
								<input type="text" class="form-control" id="modelo"
									aria-describedby="emailHelp" placeholder="Vento" name="modelo" value="<?php echo set_value('modelo'); ?>">
                                    <?php echo form_error('modelo', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>
							<div class="mb-3">
								<label for="anio" class="form-label">Año</label>
								<input type="number" class="form-control" id="anio"
									aria-describedby="emailHelp" placeholder="2015" name="anio" value="<?php echo set_value('anio'); ?>">
                                    <?php echo form_error('anio', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>

							<div class="mb-3">
								<label for="color" class="form-label">Color</label>
								<input type="text" class="form-control" id="color"
									aria-describedby="emailHelp" placeholder="Rojo" name='color' value="<?php echo set_value('color'); ?>">
                                <?php echo form_error('color', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>
							<div class="mb-3">
								<label for="placas" class="form-label">Placas</label>
								<input type="text" class="form-control" id="placas"
									aria-describedby="emailHelp" placeholder="EER-123-ASD" name="placas" value="<?php echo set_value('placas'); ?>">
                                    <?php echo form_error('placas', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>

                            <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">

							<div class="d-grid">
								<button type="submit" class="btn btn-primary">Guardar</button>
								<a href="<?php echo base_url('Usuario/verAutomoviles/'.sprintf('%06d', $id_usuario)); ?>" class="btn btn-danger">Cancelar</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
