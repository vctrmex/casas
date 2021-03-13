<div class="row">
	<div class="col-md-9 ms-sm-auto col-lg-10 px-md-3">

		<div class="row">
			<div class="col-12">
				<h1>Agregar Dirección</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<?php echo $this->session->flashdata('alert_msg');?>
			</div>
		</div>

		<div class="row mb-3 d-flex justify-content-center">
			<div class="col-6">
				<div class="card">
					<div class="card-body">
						<h4>Registro de nueva dirección.</h4>
						<form action="<?php echo base_url('Usuario/agregarDireccion/'.$id_usuario); ?>" method="POST">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Calles y/o Cruzamientos</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" name='calle' value="<?php echo set_value('calle'); ?>">
                                <?php echo form_error('calle', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">No. Exterior</label>
								<input type="number" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" name="numeroext" value="<?php echo set_value('numeroext'); ?>">
                                    <?php echo form_error('numeroext', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Piso</label>
								<input type="number" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" name="piso" value="<?php echo set_value('piso'); ?>">
                                    <?php echo form_error('piso', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>

                            <div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Colonia</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" name="colonia" value="<?php echo set_value('colonia'); ?>">
                                    <?php echo form_error('colonia', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>

                            <div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Alcaldia</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" name="alcaldia" value="<?php echo set_value('alcaldia'); ?>">
                                    <?php echo form_error('alcaldia', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>

                            <div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Ciudad</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" name="ciudad" value="<?php echo set_value('ciudad'); ?>">
                                    <?php echo form_error('ciudad', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>

                            <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
							
							<div class="d-grid">
								<button type="submit" class="btn btn-primary">Guardar</button>
								<a href="user.html" class="btn btn-danger">Cancelar</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
