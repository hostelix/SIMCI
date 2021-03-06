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

			<form class="ui form" id="formulario_crear_laboratorio">
				<h3 class="ui centered dividing header">Registrar Laboratorio</h3>
				<br>
				<div class="field">
					<div class=" two fields">
						<div class="field">
							<label>Nombre del Laboratorio</label>
			        		<input type="text" name="nombre" placeholder="Nombre del Laboratorio" ng-model="DatosForm.nombre">
			        	</div>
				    </div>
				</div>
			  	
			  	<br>

				<div class="field">
		        	<div class="nine wide field ui form">
					  	<div class="field">
					    	<label>Descripcion de Laboratorio</label>
					    		<textarea name="descripcion" placeholder="Descripcion de Laboratorio" ng-model="DatosForm.descripcion" rows="4"></textarea>
					  	</div>
					</div>
		        </div>
			
			<br>

			<div class="ui big right floated submit button green" ng-click="registrar_laboratorio()" id="btn-registrar">Registrar
			</div>
			</form>
		</div>
	</div>
</div>

<script>
	$('.ui.dropdown').dropdown();
</script>
