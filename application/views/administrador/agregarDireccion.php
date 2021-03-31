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
							<div class="form-group mb-3">
								<label for="exampleInputEmail1" class="form-label">Dirección</label>
								<select name="calle" id="capturador" class="form-control" data-live-search="true">
									<option value=""> -- Seleccione una opción -- </option>
									<?php foreach ($direcciones as $direccion) { ?>
									<option value="<?php echo $direccion['id_direcciones']; ?>" <?php echo set_select('calle',$direccion['id_direcciones']); ?>>
										<?php echo $direccion['nombre_direcciones']; ?>, Ext. <?php echo $direccion['numeroint_direcciones']; ?>, Int. <?php echo $direccion['numeroext_direcciones']; ?></option>
									<?php } ?>
								</select>
								<?php echo form_error('calle', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Numero Int</label>
								<input type="number" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" name="piso" value="<?php echo set_value('piso'); ?>">
								<?php echo form_error('piso', '<div class="alert alert-danger mt-1">', '</div>'); ?>
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