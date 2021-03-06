<!--Bloque 1 -> Tabla Principal-->
<div class="ui two column doubling stackable grid container">
    <div class="ui container centered grid">
        <div class="column">
            <table class="ui selectable celled table capitalize" datatable="" dt-options="opciones_tabla_proveedores"
                   dt-columns="columnas_tabla_proveedores" dt-instance='tabla_proveedores' width="100%"></table>
        </div>
    </div>
</div>

<!--Bloque 2. Mostrar elemento-->
<div class="ui modal" id="modal_ver_proveedor">
    <div class="header">Datos del proveedor</div>
    <div class="content">
        <table class="ui celled table capitalize">
            <tbody>
            <tr>
                <td colspan="5">
                    <b>Razon Social:</b>

                    <p><% data_proveedor.razon_social %></p>
                </td>

                <td colspan="3">
                    <b>Doc. Identificacion:</b>

                    <p><% data_proveedor.doc_identificacion %></p>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <b>Telfono Movil: </b>

                    <p><% data_proveedor.telefono_movil1 %></p>
                </td>

                <td colspan="2">
                    <b>Telefono Movil (Opcional): </b>

                    <p><% data_proveedor.telefono_movil2 | default_value%></p>
                </td>

                <td colspan="2">
                    <b>Telefono Fijo: </b>

                    <p><% data_proveedor.telefono_fijo1 %></p>
                </td>

                <td colspan="2">
                    <b>Telefono Fijo (Opcional): </b>

                    <p><% data_proveedor.telefono_fijo2 | default_value %></p>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <b>Estado: </b>

                    <p><% data_proveedor.estado %></p>
                </td>

                <td colspan="2">
                    <b>Ciudad: </b>

                    <p><% data_proveedor.ciudad %></p>
                </td>

                <td colspan="2">
                    <b>Municipio: </b>

                    <p><% data_proveedor.municipio %></p>
                </td>

                <td colspan="2">
                    <b>Parroquia: </b>

                    <p><% data_proveedor.parroquia %></p>
                </td>
            </tr>

            <tr>
                <td colspan="8">
                    <b>Direccion:</b>

                    <p><% data_proveedor.direccion %></p>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <b>Creado:</b><br>
                    <p>2016/04/28</p>
                </td>
                <td colspan="4">
                    <b>Actualizado:</b><br>
                    <p>2016/06/28</p>
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

<!--Bloque 3 -> Modal Modificar proveedor-->


<div class="ui modal" id='modal_modificar_proveedor'>
    <div class="ui centered dividing header"> Actualizar Datos del Proveedor</div>
    <div class="content">

        <div ng-if="mostrar_mensaje">
            <div class="ui icon <% mensaje_validacion.color %> message">
                <i class="<% mensaje_validacion.icono %> icon"></i>

                <div class="content">
                    <div class="header"><% mensaje_validacion.titulo %></div>
                    <ul class="list">
                        <li ng-repeat=" mensaje in mensaje_validacion.mensajes track by $index"><% mensaje | capitalize
                            %>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
        </div>

        <div class="ui form">
            <form class="ui form" id="formulario_modificar_proveedor">

                <div class="field">
                    <div class="two fields">
                        <div class="field">
                            <label>Razon social</label>
                            <input type="text" name="razon_social" placeholder="Razon Social"
                                   ng-model="DatosForm.razon_social">
                        </div>
                    </div>
                </div>

                <div class="field">
                    <div class="two fields">
                        <div class="nine wide field">
                            <label>Documento de Identificacion</label>
                            <input type="text" name="doc_identificacion" placeholder="Documento de Identificacion"
                                   ng-model="DatosForm.doc_identificacion">
                        </div>

                        <div class="seven wide field">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Direccion Electronica"
                                   ng-model="DatosForm.email">
                        </div>
                    </div>
                </div>

                <br>

                <div class="field">
                    <div class="four fields">
                        <div class="field">
                            <label>Telefono movil 1</label>
                            <input type="text" name="telefono_movil1" placeholder="Telefono Movil 1"
                                   ng-model="DatosForm.telefono_movil1">
                        </div>

                        <div class="field">
                            <label>Telefono movil 2</label>
                            <input type="text" name="telefono_movil2" placeholder="Telefono Movil 2"
                                   ng-model="DatosForm.telefono_movil2">
                        </div>
                        <div class="field">
                            <label>Telefono fijo 1</label>
                            <input type="text" name="telefono_fijo1" placeholder="Telefono Fijo 1"
                                   ng-model="DatosForm.telefono_fijo1">
                        </div>

                        <div class="field">
                            <label>Telefono fijo 2</label>
                            <input type="text" name="telefono_fijo2" placeholder="Telefono Fijo 2"
                                   ng-model="DatosForm.telefono_fijo2">
                        </div>
                    </div>
                </div>

                <br>

                <h3 class="ui centered dividing header">Datos de Ubicacion</h3>

                <div class="field">
                    <div class="fields">
                        <div class="fourteen wide field">
                            <label>Direccion</label>
                            <textarea name="descripcion" placeholder="Direccion del proveedor"
                                      ng-model="DatosForm.direccion" rows="2"></textarea>
                        </div>
                    </div>
                </div>

                <br>
        <!--
                <div class="field">
                    <div class="two fields">
                        <div class="field">
                            <label>Codigo del Estado</label>
                            <select class="ui dropdown"></select>
                        </div>

                        <div class="field">
                            <label>Codido de la Ciudad</label>
                            <select class="ui dropdown"></select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <div class="two fields">
                        <div class="field">
                            <label>Codigo del Municipio</label>
                            <select class="ui dropdown"></select>
                        </div>

                        <div class="field">
                            <label>Codido de la Parroquia</label>
                            <select class="ui dropdown"></select>
                        </div>
                    </div>
                </div>
          -->
            </form>
        </div>
    </div>
    <div class="actions">
        <div class="ui negative button">
            Cerrar
        </div>
        <button class="ui positive button" ng-click="procesar_modificar();" id="btn-modificar">
            Actualizar
        </button>
        <div class="ui chackmark icon"></div>
    </div>
</div>
<!--Fin De Bloques-->

<script>
    $('.ui.dropdown').dropdown();
</script>
