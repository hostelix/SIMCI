<div class="ui centered grid">
	<div class="six wide tablet twelve wide computer column">
		<div class="ui form">

			<div ng-if="mostrar_mensaje">
				<div class="ui icon <% mensaje_validacion.color %> message">
					<i class="<% mensaje_validacion.icono %> icon"></i>
					<div class="content">
						<div class="header"><% mensaje_validacion.titulo %></div>
						<ul class="list">
							<li ng-repeat=" mensaje in mensaje_validacion.mensajes track by $index"><% mensaje | capitalize %></li>
						</ul>
					</div>
				</div>
				<br>
			</div>

			<h3 class="ui centered dividing header">Mover el stock de los laboratorios.</h3>

			<form id="formulario_mover_stock">

				<br>

				<div class="field">
					<div class="two fields">
						<div class="seven wide field">
							<label>Seleccione un laboratorio</label>
							{{ Form::select_laboratorios(array('name'=>'select_laboratorio', 'id'=>'laboratorio','ng-model'=>'select_laboratorio'))}}
						</div>

						<div class="nine wide field">
							<label>Seleccione el laboratorio al que se movera el stock</label>
							{{ Form::select_laboratorios(array('name'=>'select_laboratorio_destino', 'id'=>'laboratorio','ng-model'=>'select_laboratorio_destino'))}}
						</div>
					</div>
				</div>
			</form>
<<<<<<< HEAD
	    </div>
	
        <br>

        <br>

        <table class="ui celled striped table" width="100%">
            <thead>
                <tr>
                    <th width="40%">Nombre</th>
                    <th width="10%">Cantidad Disponible</th>
					<th width="10%">Cantidad a Mover</th>
					<th width="3%" align="center">Mover</th>
                </tr>
            </thead>
            <tbody>
				<tr ng-repeat="x in [1,2,3,4,5,6]" id='<%x%>'>
					<td>
						<p>Cloruro de Sodio</p>
					</td>
					<td class="align centered">10</td>
					<td>
						<div class="ui input">
							<input type="text" disabled="disabled" size="5">
						</div>
					</td>
					<td>
						<button class="ui icon small inverted blue button" id="btn_actison_item" ng-click="seleccionar_item_tabla($event)" data-id-fila='<%x%>'><i class="checkmark icon" ></i></button>
					</td>
				</tr>

            	<tr ng-if="items_tabla_stock.length == 0">
            		<td colspan="4">
            			<p align="center">No hay elementos para ser agregados</p>
            		</td>
            	</tr>
            </tbody>
        </table>

        <br>

        <br>

        <div class="action">
        	<div class="ui right floated positive button">
                Mover
            </div>
        </div>
    </div>
=======
		</div>

		<br>

		<br>

		<table class="ui celled striped table" width="100%">
			<thead>
			<tr>
				<th width="40%">Nombre</th>
				<th width="30%">Cantidad</th>
				<th width="3%" align="center">Mover</th>
			</tr>
			<tr ng-repeat="x in [1,2,3,4,5,6]" id='<%x%>'>
				<td>
					<p>Cloruro de Sodio</p>
				</td>
				<td>10</td>

				<td>

					<button class="ui icon small inverted blue button" id="btn_actison_item" ng-click="seleccionar_item_tabla($event)" data-id-fila='<%x%>'><i class="checkmark icon" ></i></button>
				</td>
			</tr>
			</thead>
			<tbody>
			<tr ng-repeat="elemento in items_tabla_stock track by $index" id="<% elemento.id_item_stock %>" ng-animate="'animate'" class="animate-repeat">
				<td><% elemento.nombre_objeto | lowercase | capitalize%></td>
				<td><% elemento.cantidad %></td>
				<td><% elemento.nombre_laboratorio | lowercase | capitalize %></td>
				<td>
					<button class="ui icon small button" ng-click="eliminar_stock_tabla(elemento.id_item_stock )">
						<i class="trash outline icon"></i>
					</button>
				</td>
			</tr>

			<tr ng-if="items_tabla_stock.length == 0">
				<td colspan="4">
					<p align="center">No hay elementos para ser agregados</p>
				</td>
			</tr>
			</tbody>
		</table>

		<br>

		<br>

		<div class="action">
			<div class="ui right floated positive button">
				Mover
			</div>
		</div>
	</div>
>>>>>>> 82946ef2fa5d581c3a37fb1e56917485d721aa5b
</div>

<script>
	$('.ui.dropdown').dropdown();

	$('.ui.search').search({
		type          : 'category',
		minCharacters : 3,
		searchDelay: 300,
		onSelect: function(elem_select, response){
			//Guardamos el objeto seleccionado en el input hidden
			$('#select_objeto').val(elem_select.value).trigger('change');
			//Vaciamos el campo de busqueda
			$('#campo_search_objeto').val('');
		},
		apiSettings   : {
			onResponse: function(_Response) {
				var response = {
					results : {}
				};

				$.each(_Response.results, function(index, item) {
					var
							clase_objeto   = item.nombre_clase_objeto || 'Desconocida',
							maxResults = 8
							;
					if(index >= maxResults) {
						return false;
					}

					if(response.results[clase_objeto] === undefined) {
						response.results[clase_objeto] = {
							name    : clase_objeto,
							results : []
						};
					}

					response.results[clase_objeto].results.push({
						title       : item.nombre_objeto.toLowerCase(),
						description : item.especificaciones_objeto,
						value: item.cod_objeto
					});
				});
				return response;
			},
			url: '/api/inventario/mostrar?type=search&query={query}'
		}
	});



</script>

