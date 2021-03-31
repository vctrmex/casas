<div class="row">
	<div class="col-12">
		<h1>Coches</h1>
	</div>
</div>

<div class="row mb-3">
	<div class="col-12">
        <a href="<?php echo base_url('Usuario/agregarCoche/'.sprintf('%06d', $id_usuario)); ?>" role="button" class="btn btn-primary">Agregar Coche</a>
	</div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php echo $this->session->flashdata('alert_msg'); ?>
    </div>
</div>

<div class="row">
	<div class="col-12">
		<h3>Coches Registrados</h3>
		<div class="card text-center mt-3">
			<div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="tablajaja">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>marca</th>
                                <th>modelo</th>
                                <th>Año</th>
                                <th>color</th>
                                <th>placas</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($coches as $coche) {?>
                            <tr>
                                <td> <?php echo $coche['id']; ?></td>
                                <td><?php echo $coche['marca']; ?></td>
                                <td><?php echo $coche['modelo']; ?></td>
                                <td> <?php echo $coche['anio']; ?></td>
                                <td> <?php echo $coche['color']; ?></td>
                                <td> <?php echo $coche['placas']; ?></td>
                                <td>
                                <form method="post" action="<?php echo site_url('usuario/editarCoche/'.$coche['id']); ?>">
                                    <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
                                    <button type="submit" class="btn btn-info btn-xs m-2">Editar</button>
                                </form>

                                <form method="post" action="<?php echo site_url('usuario/eliminarCoche/'.$coche['id']); ?>">
                                    <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
                                    <button onclick="return confirm('Esta seguro de eliminar el coche?')" type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                                </form>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>

                </div>

			</div>
		</div>
	</div>
</div>
