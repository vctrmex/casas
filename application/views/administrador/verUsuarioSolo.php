<div class="row">
	<div class="col-12">
		<h1>Detalles Usuario</h1>
	</div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php echo $this->session->flashdata('alert_msg'); ?>
    </div>
</div>

<div class="row">
	<div class="col-4 ">
		<div class="card h-100">
			<div class="card-body">
				<h3>Contacto</h3>
				<p><b><?php echo $vecino['nombre']; ?></b></p>
				<p class="m-0"><?php echo $vecino['mail']; ?></p>
				<p><?php echo $vecino['cel']; ?></p>


				<h3>Contacto Secundario</h3>
				<p><b><?php echo $vecino['nombre2']; ?></b></p>
				<p><?php echo $vecino['cel2']; ?></p>
				<div class="d-flex justify-content-end">
					<a class="btn btn-info"
						href="<?php echo base_url('Usuario/editarUsuario/'.sprintf('%06d', $id_usuario)); ?>"><i
							data-feather="edit"></i> Editar</a>
				</div>

			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="card h-100">
			<div class="card-body">
				<h3>Domicilio</h3>
				<p><b><?php echo $casadelvecino['calle']; ?>, No. Ext. <?php echo $casadelvecino2; ?></b></p>

				<h3>Chat de WhatsApp</h3>
				<p><b><?php echo $chat_whats; ?></b></p>

			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="card h-100">
			<div class="card-body">
				<div class="d-flex">
					<a download="<?php echo base_url() . "resources/qrcodes/".'qr_code_' . sprintf('%06d', $vecino['id']).'.png' ?>"
						href="<?php echo base_url() . "resources/qrcodes/".'qr_code_' . sprintf('%06d', $vecino['id']).'.png' ?>"
						title="<?php echo base_url() . "resources/qrcodes/".'qr_code_' . sprintf('%06d', $vecino['id']).'.png' ?>">
						<img style="width: 80%;"
							src="<?php echo base_url() . "resources/qrcodes/".'qr_code_' . sprintf('%06d', $vecino['id']).'.png' ?>"
							title="<?php echo base_url() . "resources/qrcodes/".'qr_code_' . sprintf('%06d', $vecino['id']).'.png' ?>" />
					</a>
					<div class="text-center">
						<h3>QR</h3>
						<p class="fs-3"><b>#<?php echo sprintf('%06d', $vecino['id']); ?></b></p>
						<p>Codigo QR y ID de la vivienda</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row mt-4">
	<div class="col-6">
		<div class="card">
			<div class="card-body">
				<h3>Automoviles Registrados</h3>
				<p>Se muestran los automoviles registrados en la vivienda</p>
				<table class="table text-center">
					<thead>
						<tr>
							<th>Marca</th>
							<th>Modelo</hd>
							<th>Año</th>
							<th>Color</th>
							<th>Placas</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($carros as $carro) { ?>
						<tr>
							<td><?php echo $carro['marca']; ?></td>
							<td><?php echo $carro['modelo']; ?></td>
							<td><?php echo $carro['anio']; ?></td>
							<td><?php echo $carro['color']; ?></td>
							<td><?php echo $carro['placas']; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<div class="d-grid mt-5">
					<a href="<?php echo base_url('Usuario/verAutomoviles/'. sprintf('%06d', $vecino['id'])); ?>" class="btn btn-info">Editar Automoviles</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-6">
		<div class="card">
			<div class="card-body">
				<h3>Otras Aportaciones</h3>
				<p>Aqui se muestran aportaciones hechas en especie o en efectivo por la vivienda.</p>
				<table class="table text-center">
					<thead>
						<tr>
							<th>Aportacion</th>
							<th>Cantidad</th>
							<th>Fechas</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($otrasaportaciones as $otra) { ?>
						<tr>
							<td><?php echo $otra['descripcion']; ?></td>
							<td><?php echo $otra['cantidad']; ?></td>
							<td><?php echo $otra['fecha']; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-12">
		<h3>Ultimas aportaciones registradas</h3>
		<div class="card text-center mt-3">
			<div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="tablajaja">
                        <thead>
                            <tr>
                                <th>Ticket #</th>
                                <th>Vivienda</th>
                                <th>Año</th>
                                <th>Mes</th>
                                <th>Aportación</th>
                                <th>Fecha</th>
                                <th>Pago</th>
                                <th>Comentarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($aportaciones as $aportacion) { ?>
                            <tr>
                                <td class="numeral"><?php echo sprintf('%06d', $aportacion['id']); ?></td>
                                <td>
                                <?php foreach ($ubicaciones as $ubicacion) {
                                    if($ubicacion['id_usuario'] == $aportacion['id_usuario']){
                                        foreach ($direcciones as $direccion) {
                                            if($direccion['id_direcciones'] == $ubicacion['calle']){
                                        ?>
                                        <a href="<?php echo base_url('Usuario/verUsuario/'.sprintf('%06d', $aportacion['id_usuario'])); ?>"><?php echo $direccion['nombre_direcciones']; ?></a>
                                        <?php
                                        }
                                        }
                                    }
                                } ?>
                                </td>
                                <td><?php echo $aportacion['anio_aportacion']; ?></td>
                                <td><?php
                switch ($aportacion['mes_aportacion']) {
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
                ?></td>
                                <td class="moneda"><?php echo number_format($aportacion['cantidad'],2); ?></td>
                                <td><?php $date = date_create($aportacion['fecharegistro']);
                                            echo date_format($date, 'd-m-Y'); ?></td>
                                <td>

                                <?php foreach ($usuarios as $usuario) {
                                    if($usuario['id'] == $aportacion['id_usuario']){
                                        echo $usuario['nombre'];
                                    }
                                } ?>
                                
                                </td>
                                <td><?php echo $aportacion['comentario_aportacion']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    
                </div>
				
			</div>
		</div>
	</div>
</div>