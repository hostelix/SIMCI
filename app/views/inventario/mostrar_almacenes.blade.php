<!--Bloque 1 -> Tabla Principal-->
<div class="ui two column doubling stackable grid container">
   <div class="ui container centered grid">
      <div class="column">
         <table class="ui selectable celled table capitalize" datatable="" dt-options="opciones_tabla_almacenes" dt-columns="columnas_tabla_almacenes" dt-instance='tabla_almacenes' width="100%"></table>
      </div>
   </div>
</div>

<!--Bloque 2. Mostrar elemento-->
<div class="ui modal" id="modal_ver_almacenes">
    <div class="header">Datos del almacenes</div>
        <div class="content">
            <table class="ui celled table capitalize">
                <tbody>
                    <tr>
                        <td>
                            <b>Responsable:</b>
                              <p>Nombre de Responsable</p>
                        </td>
                        
                    </tr>
					
                    <tr>
                        <td colspam="2">
                            <b>Primer auxiliar:</b>
                                <p>Nombre de auxiliar</p>
                        </td>

                        <td colspam="2">
                            <b>Segundo auxiliar:</b>
                                <p>Nombre de auxiliar.</p>
                        </td> 
                    </tr>
                    
                </tbody>    
            </table>
        </div>
        <div class="actions">
            <div class="ui negative button">
                Cerrar
            </div>
        </div>
    </div>
 
<!--Bloque 3 -> Modal Modificar almacenes-->

<div class="ui modal" id='modal_modificar_almacenes'>
<div class="header">Datos del Almacen</div>
   <div class="content">
      <div class="ui form">
         <form class="ui form" id="formulario_registrar_almacen">
            <h3 class="ui centered dividing header">Actualizar Datos del almacenes</h3>
               <br>
               <div class="field">
                  <div class="two fields">
                     <div class="field">
                        <label>Responsable</label>
                        {{ Form::select_personas(array('name'=>'responsable', 'id'=>'responsable','ng-model'=>'DatosForm.responsable'))}}
                     </div>
                  </div>
               </div>

               <div class="field">
                  <div class="two fields">  
                     <div class="field">
                        <label>Primer Auxiliar</label>
                           {{ Form::select_personas(array('name'=>'primer_auxiliar', 'id'=>'primer_auxiliar','ng-model'=>'DatosForm.primer_auxiliar'))}}
                     </div>

                     <div class="field">
                        <label>Segundo Auxiliar</label>
                           {{ Form::select_personas(array('name'=>'segundo_auxiliar', 'id'=>'segundo_auxiliar','ng-model'=>'DatosForm.segundo_auxiliar'))}}
                     </div>
                  </div>
               </div>

               <div class="field">
                  <div class="one fields">
                     <div class="ten wide field">
                        <label>Descripcion</label>
                        <textarea name="descripcion" placeholder="Descripcion del Almacen" rows="4" ng-model="DatosForm.descripcion"></textarea>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   <div class="actions">
      <div class="ui negative button">
         Cerrar
      </div>
      <button class="ui positive button">
         Actualizar
      </button>
      <div class="ui chackmark icon"></div>
   </div>
</div>
<!--Fin De Bloques-->