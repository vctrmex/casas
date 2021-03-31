<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<h3>Editar Aportación</h3>
                <br>
				<form action="<?php echo base_url('Aportacion/editarAportacion/'.$aportacion['id']); ?>" method="post">
                    <div class="form-group">
                        <label for="">Cantidad</label>
                        <input value="<?php echo $aportacion['cantidad']; ?>" required type="number" step="0.01" name="cantidad_aportacion" id="" class="form-control"
						placeholder="$">
                    </div>
					

					<div class="form-group">
                        <label for="">Mes Aportación</label>
						<select name="mes_aportacion" required class="form-control" aria-label="Default select example">
							<option value="">Mes</option>
							<option value="01" <?php echo $aportacion['mes_aportacion'] == 1 ? 'selected' : ''; ?>>Enero</option>
							<option value="02" <?php echo $aportacion['mes_aportacion'] == 2 ? 'selected' : ''; ?>>Febrero</option>
							<option value="03" <?php echo $aportacion['mes_aportacion'] == 3 ? 'selected' : ''; ?>>Marzo</option>
							<option value="04" <?php echo $aportacion['mes_aportacion'] == 4 ? 'selected' : ''; ?>>Abril</option>
							<option value="05" <?php echo $aportacion['mes_aportacion'] == 5 ? 'selected' : ''; ?>>Mayo</option>
							<option value="06" <?php echo $aportacion['mes_aportacion'] == 6 ? 'selected' : ''; ?>>Junio</option>
							<option value="07" <?php echo $aportacion['mes_aportacion'] == 7 ? 'selected' : ''; ?>>Julio</option>
							<option value="08" <?php echo $aportacion['mes_aportacion'] == 8 ? 'selected' : ''; ?>>Agosto</option>
							<option value="09" <?php echo $aportacion['mes_aportacion'] == 9 ? 'selected' : ''; ?>>Septiembre</option>
							<option value="10" <?php echo $aportacion['mes_aportacion'] == 10 ? 'selected' : ''; ?>>Octubre</option>
							<option value="11" <?php echo $aportacion['mes_aportacion'] == 11 ? 'selected' : ''; ?>>Noviembre</option>
							<option value="12" <?php echo $aportacion['mes_aportacion'] == 12 ? 'selected' : ''; ?>>Diciembre</option>
						</select>
					</div>

					<div class="form-group">
                    <label for="">Año Aportación</label>
						<select name="anio_aportacion" required class="form-control"
							aria-label="Default select example">
							<option value="">Año</option>
							<option value="2021" <?php echo $aportacion['anio_aportacion'] == 2021 ? 'selected' : ''; ?>>2021</option>
							<option value="2020" <?php echo $aportacion['anio_aportacion'] == 2020 ? 'selected' : ''; ?>>2020</option>
							<option value="2019" <?php echo $aportacion['anio_aportacion'] == 2019 ? 'selected' : ''; ?>>2019</option>
							<option value="2018" <?php echo $aportacion['anio_aportacion'] == 2018 ? 'selected' : ''; ?>>2018</option>
							<option value="2017" <?php echo $aportacion['anio_aportacion'] == 2017 ? 'selected' : ''; ?>>2017</option>
						</select>
					</div>

                    <label for="">Quien realizó el pago</label>
                    <input value="<?php echo $aportacion['comentario_aportacion']; ?>" required type="text" name="comentarios_aportacion" id="" class="form-control mb-3"
						placeholder="Persona quien realiza el pago">

                    <input type="hidden" name="id_vecino" value="<?php echo $aportacion['id_usuario']; ?>">

					<div class="d-grid">
                        <button type="submit" class="btn btn-primary">Editar Aportación</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
