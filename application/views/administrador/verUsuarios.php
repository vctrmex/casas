<div class="row">
	<div class="col-12">
		<h1>Usuarios</h1>
	</div>
</div>

<div class="row mb-3">
	<div class="col-12">
        <a href="<?php echo base_url('Usuario/add'); ?>" role="button" class="btn btn-primary">Agregar Usuario</a>
	</div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php echo $this->session->flashdata('alert_msg'); ?>
    </div>
</div>

<div class="row">
	<div class="col-12">
		<h3>Usuarios Registrados</h3>
		<div class="card text-center mt-3">
			<div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="tablajaja">
                        <thead>
                            <tr>
                                <th>ID Usuarios</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Cel</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($usuarios as $usuario) {?>
                            <tr>
                                <td><a href="<?php echo base_url('Usuario/verUsuario/'.sprintf('%06d', $usuario['id'])); ?>"> #<?php echo sprintf('%06d', $usuario['id']); ?></a></td>
                                <td><?php echo $usuario['nombre']; ?></td>
                                <td><?php echo $usuario['mail']; ?></td>
                                <td><?php 
                                
                                switch ($usuario['id_role']) {
                                    case '1':
                                      # code...
                                      echo 'Cobranza';
                                      break;
                                    case '2':
                                    # code...
                                    echo 'Administrador';
                                    break;
                                    case '3':
                                    # code...
                                    echo 'Usuario';
                                    break;
                              }?></td>
                                <td> <?php echo $usuario['cel']; ?></td>
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