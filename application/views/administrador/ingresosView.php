<div class="col-md-12">

<div class="row mb-3">
    <div class="col-md-12">
        <?php echo $this->session->flashdata('alert_msg'); ?>
    </div>
</div>

	<div class="row mb-3">
		<div class="col-12 mb-3">
			<h1>Ingresos</h1>
		</div>
		<div class="col-4 text-center">
			<div class="card bordes-verdes">
				<div class="card-body">
					<p>Ingresos del dia</p>
					<span class="fs-3"><b class="moneda"><?php echo number_format($cantidad_ingresos_al_dia,2); ?></b></span>
				</div>
			</div>
		</div>
		<div class="col-4 text-center">
			<div class="card bordes-verdes">
				<div class="card-body">
					<p>Ingresos ultimos 15 dias del mes</p>
					<span class="fs-3"><b class="moneda"><?php echo number_format($cantidad_ingresos_15_dias,2); ?></b></span>
				</div>
			</div>
		</div>
		<div class="col-4 text-center">
			<div class="card bordes-verdes">
				<div class="card-body">
					<p>Ingresos del mes</p>
					<span class="fs-3"><b class="moneda">5,000.00</b></span>
				</div>
			</div>
		</div>
	</div>

	<div class="row my-4">
		<div class="col-12">
			<h4>Ingreso Mensual</h4>
			<div class="d-flex">
				<select id="select_anio" class="form-control me-3" aria-label="Default select example">
					<option selected>Seleccione Año</option>
					<option value="2021">2021</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					<option value="2018">2018</option>
					<option value="2017">2017</option>
				</select>
				<select id="select_mes" class="form-control" aria-label="Default select example">
					<option selected>Seleccione Mes</option>
					<option value="1">Enero</option>
					<option value="2">Febrero</option>
					<option value="3">Marzo</option>
					<option value="4">Abril</option>
					<option value="5">Mayo</option>
					<option value="6">Junio</option>
					<option value="7">Julio</option>
					<option value="8">Agosto</option>
					<option value="9">Septiembre</option>
					<option value="10">Octubre</option>
					<option value="11">Noviembre</option>
					<option value="12">Diciembre</option>
				</select>
			</div>
		</div>
	</div>

	<!--Canvas Charts JS (Estadisticas)-->
	<div class="row mb-3">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<canvas id="chLine"></canvas>
				</div>
			</div>
		</div>
	</div>

	<div class="row my-5">
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
                                        echo $ubicacion['calle'];
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
                                <td><?php echo $aportacion['fecharegistro']; ?></td>
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

	<!--Pagination
	<div class="row mb-5">
		<div class="col-12 d-flex justify-content-center align-items-center">
			<nav aria-label="Page navigation example">
				<ul class="pagination">
					<li class="page-item"><a class="page-link" href="#">Anterior</a></li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
				</ul>
			</nav>
		</div>
	</div>-->

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type='text/javascript'>

	$('#select_anio').change(function(){
    var sanio = $('#select_anio').val();
	var smes = $('#select_mes').val();
    $.ajax({
     url:'<?=base_url()?>Ingreso/solicitarEstadisticaIngresos',
     method: 'post',
     data: {anio: sanio, mes: smes},
     dataType: 'json',
     success: function(response){

	   //console.log(response);

	   if(response != null){
		   procesarDatos(response);
	   }
     }
   });
  });

  $('#select_mes').change(function(){
    var sanio = $('#select_anio').val();
	var smes = $('#select_mes').val();
    $.ajax({
     url:'<?=base_url()?>Ingreso/solicitarEstadisticaIngresos',
     method: 'post',
     data: {anio: sanio, mes: smes},
     dataType: 'json',
     success: function(response){

	   //console.log(response);
	   if(response != null){
		   procesarDatos(response);
	   }
     }
   });
  });
 </script>

 <script>
 
 function procesarDatos(datosDeBD) {
	 var copiaDeSeguridad = datosDeBD;
	 var datosOficiales = datosDeBD;
	 var labelsDeDias = '';
	 var fechaDistinta = '';
	 var valoresDeLabels = '';
	 var sumaModular = 0;
	 var otrosLabels = '';

	 datosOficiales.forEach(function(elemento, indice, array) {

    	//console.log(elemento, indice);

		var fechaAEvaluar = dejarUnicamenteFecha(elemento.fecharegistro);
		var fechaDespues = ((array.length - 1 === indice)? "0-0-0" : dejarUnicamenteFecha(array[indice+1].fecharegistro));

		if(fechaAEvaluar != fechaDistinta){
			fechaDistinta = fechaAEvaluar;

			labelsDeDias += fechaAEvaluar+",";
			otrosLabels += "'"+fechaAEvaluar+"'"+",";
		}
	 })

	 var copyLabelsDeDias = labelsDeDias;

	 var lb = copyLabelsDeDias.split(',').filter(function(el) {return el.length != 0});

	 lb.forEach(function(elemento, indice, array){
		//console.log(elemento, indice);

		//var fechaDeLosLabels = dejarUnicamenteFecha(elemento.fecharegistro);

		datosOficiales.forEach(function(element, index, arr) {
			var fechaDeLaEvaluacion = dejarUnicamenteFecha(element.fecharegistro);

			if(fechaDeLaEvaluacion == elemento){
				sumaModular += parseInt(element.cantidad, 10);
			}
		})

		valoresDeLabels+= sumaModular+',';
		sumaModular = 0;

	 })

	 //console.log(labelsDeDias);
	 //console.log(valoresDeLabels);

	 cargarGraficoIngreso(labelsDeDias,valoresDeLabels);
 }

 function dejarUnicamenteFecha(textoFechaCompleta){

	var fechaADevolver = '';
	var fh = textoFechaCompleta.split('-');

	fechaADevolver += fh[0]+'-';

	fechaADevolver += fh[1]+'-';

	var ultimaSeccion = fh[2].split(' ');

	fechaADevolver += ultimaSeccion[0];

	return fechaADevolver;
 }

 function cargarGraficoIngreso(labelss, valores) {
	 /* chart.js chart examples */

	 var nuevosLabels = labelss.split(',').filter(function(el) {return el.length != 0});
	 var nuevosValores = valores.split(',').filter(function(el) {return el.length != 0});

	 //console.log(nuevosLabels);

	 //console.log(nuevosValores);

// chart colors
var colors = ['#007bff','#28a745','#333333','#c3e6cb','#dc3545','#6c757d'];

/* large line chart */
var chLine = document.getElementById("chLine");
var chartData = {
  labels: nuevosLabels,
  datasets: [{
    data: nuevosValores,
    backgroundColor: 'transparent',
    borderColor: colors[1],
    borderWidth: 4,
    pointBackgroundColor: colors[1]
  },
 /* Segunda linea de datos
 {
    data: [639, 465, 493, 478],
    backgroundColor: colors[3],
    borderColor: colors[1],
    borderWidth: 4,
    pointBackgroundColor: colors[1]
  }*/
]
};

if (chLine) {
  new Chart(chLine, {
  type: 'line',
  data: chartData,
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: false
        }
      }]
    },
    legend: {
      display: false
    }
  }
  });
}
 }
 

</script>