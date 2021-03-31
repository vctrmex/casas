<div class="row">
	<div class="col-12">
		<h1>Aportaciones</h1>
	</div>
</div>

<div class="row mb-3">
	<div class="col-12">
		<h3>Registrar nueva aportación</h3>
		<form action="<?php echo base_url('Aportacion/buscarVecino') ?>" class="col-md-12" method="post">
			<div class="mb-3 d-flex">
				<input value="<?php echo $this->session->flashdata('ultimoid_consultado');?>" type="text" name="idvecino" id="" class="form-control me-3" placeholder="Escanea QR o introduce ID">
				<button type="submit" class="btn btn-primary">Buscar</button>
			</div>
		</form>
	</div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php echo $this->session->flashdata('alert_msg');?>
    </div>
</div>

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
                                <th>Acciones</th>
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
                                    ?>
                                       <a href="<?php echo base_url('Usuario/verUsuario/'.sprintf('%06d', $usuario['id'])); ?>"><?php echo $usuario['nombre']; ?></a>
                                   <?php }
                                } ?>
                                
                                </td>
                                <td><?php echo $aportacion['comentario_aportacion']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('Aportacion/editarAportacion/').$aportacion['id'] ?>"><i data-feather="pencil"></i> Editar</a>
                                    | <a onclick="return confirm('Esta seguro de eliminar la aportacion?')" href="<?php echo base_url('Aportacion/eliminarAportacion/').$aportacion['id'] ?>"><i data-feather="trash"></i> Borrar</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    
                </div>
				
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
$('#tablajaja').dataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false,
    "language": {
            "lengthMenu": "Mostrando _MENU_ records per page",
            "zeroRecords": "No hay coincidencias",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No hay aportaciones registradas",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search":"Buscar"
    }});
});
</script>
