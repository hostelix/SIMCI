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

			<form class="ui form" id="formulario_crear_objeto">
				<h3 class="ui centered dividing header">Registrar Objeto</h3>
				<br>
				<div class="field centered grid">
					<div class="three fields">
						<div class="field">
							<label>Nombre del Producto</label>
			        		<input type="text" name="nombre_objeto" placeholder="Nombre" ng-model="DatosForm.nombre">
			        	</div>
				    </div>
				</div>

				<div class="field">
					<div class="two fields">
			      		
						 	<div class="field">
						    	<label>Especificacion del Producto</label>
						    	<textarea placeholder="Especificaciones del Producto" ng-model="DatosForm.especificaciones"></textarea>
						  	</div>
						  	
						  	<div class="field">
							    <label>Descripcion del Producto</label>
							    <textarea placeholder="Descripcion del Producto" ng-model="DatosForm.descripcion"></textarea>
							</div>
						
				    </div>
				</div>

				<br>

				<div class="field">
				    <div class="two fields">
				      	<div class="field">
				      		<label>Unidad</label>
				      		{{ Form::select_unidades (array('name'=>'cod_unidad', 'id'=>'unidad','ng-modal'=>'DatosForm.cod_unidad'))}}
			     		</div>

			     		<div class="field">
			     			<label>Tipo de Objeto</label>
			     			{{ Form::select_agrupacion(array('name'=>'cod_tipo_objeto', 'id'=>'tipo_objeto', 'ng-modal'=>'DatosForm.cod_tipo_objeto')) }}
						</div>
				    </div>
				</div>
			
			<br>

			<div class="ui big right floated submit button green" ng-click="registrar_objeto()" id="btn-registrar">Registrar
			</div>
			</form>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	$('#formulario_crear_objeto').form(reglas_formulario_crear_usuario)
	});
</script>
