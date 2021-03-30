<div class="row">
	<div class="col-md-9 ms-sm-auto col-lg-10 px-md-3">

		<div class="row">
			<div class="col-12">
				<h1>Editar Usuario</h1>
			</div>
		</div>

		<div class="row mb-3 d-flex justify-content-center">
			<div class="col-6">
				<div class="card">
					<div class="card-body">
						<h4>Edición de nuevo usuario</h4>
						<form action="<?php echo base_url('Usuario/editarUsuario/'.sprintf('%06d', $id_usuario)); ?>" method="POST">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Nombre y Apellido</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="Juan Perez" name='nombre' value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $vecino['nombre']); ?>">
                                <?php echo form_error('nombre', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Numero Celular</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="10 digitos" name="cel" value="<?php echo ($this->input->post('cel') ? $this->input->post('cel') : $vecino['cel']); ?>">
                                    <?php echo form_error('cel', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
								<input type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="nombre@correo.com" name="mail" value="<?php echo ($this->input->post('mail') ? $this->input->post('mail') : $vecino['mail']); ?>">
                                    <?php echo form_error('mail', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>

							<div class="mb-3">
								<label for="exampleInputEmail22" class="form-label">Contacto Secundario</label>
								<input type="text" class="form-control" id="exampleInputEmail22"
									aria-describedby="emailHelp" placeholder="Juan Perez" name='nombre2' value="<?php echo ($this->input->post('nombre2') ? $this->input->post('nombre2') : $vecino['nombre2']); ?>">
                                <?php echo form_error('nombre2', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail33" class="form-label">Numero Celular Contacto Secundario</label>
								<input type="text" class="form-control" id="exampleInputEmail33"
									aria-describedby="emailHelp" placeholder="10 digitos" name="cel2" value="<?php echo ($this->input->post('cel2') ? $this->input->post('cel2') : $vecino['cel2']); ?>">
                                    <?php echo form_error('cel2', '<div class="alert alert-danger mt-1">', '</div>'); ?>
							</div>

							<?php if($this->session->userdata('id_role') == 2){ ?>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Selecciona un Rol</label>
								<select class="form-control" aria-label="Default select example" name='id_role'>
									<option value="">Selecciona una opción</option>
									

									<?php  
 
                          foreach($roles as   $rol)
                          { 
                              $selected = ($vecino['id_role'] == $rol['id']) ? ' selected="selected"' : "";
                            
                              echo '<option value="'.$rol['id'].'" '.$selected.'>'.$rol['nombre'].'</option>'; 
                          } 
                          ?>
								</select>
                                <?php echo form_error('id_role', '<div class="alert alert-danger mt-1">', '</div>'); ?>
								<div class="form-text">Un Administrador tendra los mismo privilegios que su cuenta, un
									Gestor de cobranza solo podra acceder a los cobros y edición de viviendas.</div>
							</div>
							<?php } ?>
							<div class="d-grid">
								<button name="btnEditar" type="submit" class="btn btn-primary">Guardar</button>
								<a onClick="window.history.back();" class="btn btn-danger">Cancelar</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
