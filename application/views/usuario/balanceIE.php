<div class="row">
	<div class="col-12">
		<h1>Balance</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
    <h4>Ingresos</h4>
		<div class="card">
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#Ingreso</th>
							<th scope="col">Cantidad</th>
							<th scope="col">Fecha Ingreso</th>
						</tr>
					</thead>
					<tbody>
                        <?php foreach ($ingresos as $ingreso) { ?>
						<tr>
							<th scope="row"><?php echo $ingreso['id'] ?></th>
							<td>$<?php echo number_format($ingreso['cantidad'],2); ?></td>
							<td><?php echo $ingreso['fecharegistro'] ?></td>
						</tr>
                        <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-6">
        <h4>Egresos</h4>
		<div class="card">
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
                            <th scope="col">#Egreso</th>
							<th scope="col">Cantidad</th>
							<th scope="col">Fecha Egreso</th>
						</tr>
					</thead>
					<tbody>
                        <?php foreach ($egresos as $egreso) { ?>
						<tr>
							<th scope="row"><?php echo $egreso['id_egreso'] ?></th>
							<td>$<?php echo number_format($egreso['cantidad_egreso'],2); ?></td>
							<td><?php echo $egreso['fecha_egreso'] ?></td>
						</tr>
                        <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<br><br>
<div class="row">
    <div class="col text-center">
            Balance: <br>
            <?php $balance = $total_ingresos - $total_egresos; ?>

            <?php $color = $balance < 0 ? 'red' : 'green'; ?>

            <label style="font-size: 190%; color: <?php echo $color; ?>"><?php echo number_format($balance, 2); ?></label>
    </div>
</div>