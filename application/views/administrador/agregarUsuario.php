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
						<form action="<?php echo base_url('Usuario/add'); ?>" method="POST">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Nombre y Apellido</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="Juan Perez" name='nombre' value="<?php echo set_value('nombre'); ?>">
                                <?php echo form_error('nombre', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Numero Celular</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="10 digitos" name="cel" value="<?php echo set_value('cel'); ?>">
                                    <?php echo form_error('cel', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
								<input type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="nombre@correo.com" name="mail" value="<?php echo set_value('mail'); ?>">
                                    <?php echo form_error('mail', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Selecciona un Rol</label>
								<select class="form-control" aria-label="Default select example" name='id_role'>
									<option value="">Selecciona una opción</option>
									<?php foreach ($roles as $rol) {  ?>
									<option value="<?php echo $rol['id']; ?>" <?php echo set_select('id_role',$rol['id']); ?>><?php echo $rol['nombre']; ?></option>
									<?php } ?>
								</select>
                                <?php echo form_error('id_role', '<div class="alert alert-danger mt-1">', '</div>'); ?>
								<div class="form-text">Un Administrador tendra los mismo privilegios que su cuenta, un
									Gestor de cobranza solo podra acceder a los cobros y edición de viviendas.</div>
							</div>
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
