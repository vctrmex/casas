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
                                <th>No. Ext</th>
                                <th>No. Int</th>
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
                                <td>
                                <?php $noint = ""; foreach ($ubicaciones as $ubicacion) {
                                    if($ubicacion['id_usuario'] == $vivienda['id_usuario']){
                                        foreach ($direcciones as $direccion) {
                                            if($direccion['id_direcciones'] == $ubicacion['calle']){ $noint = $direccion['numeroint_direcciones'];
                                        ?>
                                        <a href="<?php echo base_url('Usuario/verUsuario/'.sprintf('%06d', $vivienda['id_usuario'])); ?>"><?php echo $direccion['nombre_direcciones']; ?></a>
                                        <?php
                                        }
                                        }
                                    }
                                } ?>
                                </td>
                                <td> #<?php echo $vivienda['piso']; ?></td>

                                <td> #<?php echo $noint; ?></td>
                            </tr>
                            <?php }?>
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
