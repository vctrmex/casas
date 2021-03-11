<div class="row">
	<div class="col-md-9 ms-sm-auto col-lg-10 px-md-3">

		<div class="row">
			<div class="col-12">
				<h1>Registro de Egreso</h1>
			</div>
		</div>

		<div class="row mb-3 d-flex justify-content-center">
			<div class="col-6">
				<div class="card">
					<div class="card-body">
						<h4>Registro de nuevo egreso</h4>
						<form action="<?php echo base_url('Egreso/add'); ?>" method="POST">
							<div class="mb-3">
								<label for="concepto_egreso" class="control-label"> <span
										class="text-danger">*</span>Concepto egreso</label>
								<div class="form-group">
									<textarea name="concepto_egreso" class="form-control  "
										id="concepto_egreso"><?php echo $this->input->post('concepto_egreso'); ?></textarea>
                                        <?php echo form_error('concepto_egreso','<div class="alert alert-danger mt-1">', '</div>');?>
								</div>
							</div>
							<div class="mb-3">
								<label for="cantidad_egreso" class="control-label"> <span
										class="text-danger">*</span>Cantidad egreso</label>
								<div class="form-group">
									<input type="number" name="cantidad_egreso"
										value="<?php echo $this->input->post('cantidad_egreso'); ?>"
										class="form-control " id="cantidad_egreso" />
                                        <?php echo form_error('cantidad_egreso','<div class="alert alert-danger mt-1">', '</div>');?>
								</div>
							</div>
							
							<div class="mb-3">
								<label for="nota_egreso" class="control-label"> <span class="text-danger">*</span>Nota
									egreso</label>
								<div class="form-group">
									<textarea name="nota_egreso" class="form-control  "
										id="nota_egreso"><?php echo $this->input->post('nota_egreso'); ?></textarea>
                                        <?php echo form_error('nota_egreso','<div class="alert alert-danger mt-1">', '</div>');?>
								</div>
							</div>
							<div class="d-grid">
								<button type="submit" class="btn btn-primary">Guardar</button>
								<a href="<?php echo base_url('Egreso'); ?>" class="btn btn-danger">Cancelar</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
