<div class="row">
	<div class="col-12">
		<h1>Viviendas</h1>
	</div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php echo $this->session->flashdata('alert_msg'); ?>
    </div>
</div>

<div class="row">
	<div class="col-12">
		<h3>Viviendas Registradas</h3>
		<div class="card text-center mt-3">
			<div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="tablajaja">
                        <thead>
                            <tr>
                                <th># Vivienda</th>
                                <th>Vecino</th>
                                <th>Dirección</th>
                                <th>Numero</th>
                                <th>Piso</th>
                                <th>Colonia</th>
                                <th>Alcaldia</th>
                                <th>Ciudad</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($viviendas as $vivienda) {?>
                            <tr>
                                <td># Vivienda <?php echo $vivienda['id']; ?></td>
                                <td>

                                <?php foreach ($usuarios as $usuario) {
                                    if($usuario['id'] == $vivienda['id_usuario']){
                                        echo $usuario['nombre'];
                                    }
                                } ?>
                                
                                </td>
                                <td><?php echo $vivienda['calle']; ?></td>
                                <td>#<?php echo $vivienda['numeroext']; ?></td>
                                <td> #<?php echo $vivienda['piso']; ?></td>
                                <td> <?php echo $vivienda['colonia']; ?></td>
                                <td> <?php echo $vivienda['alcaldia']; ?></td>
                                <td> <?php echo $vivienda['ciudad']; ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>

                </div>

			</div>
		</div>
	</div>
</div>
