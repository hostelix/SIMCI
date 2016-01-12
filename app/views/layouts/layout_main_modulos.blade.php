<div class="espacio_buttom">
   
   <h3 class="ui center aligned icon header">
      <i class="circular inverted <% modulo.icono.color %> <% modulo.icono.tipo%> icon"></i>
      Modulo <small><% modulo.nombre %></small>
      <div>
         <i>Seleccione una accion</i>
      </div>
   </h3>

   <div class="ui bottom piled segment">

      <div class="ui four column grid ">

         <div class="column" ng-repeat="opcion in modulo.opciones">
            
            <div class="ui fluid card">
               <div class="content">
                  <!--<img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">-->
                  <i class="right floated bordered user icon"></i>

                  <div class="header">
                  <% opcion.nombre | capitalize:true%>
                  </div>
                  
                  <div class="meta">
                     <small>Descripcion</small>
                  </div>
                  
                  <div class="description">
                     <% opcion.descripcion %>
                  </div>
               </div>
                  
               <div class="extra content">
                     <div class="ui two buttons">
                        <a class="ui basic green button" href="<% opcion.url %>">Entrar</a>
                     </div>
               </div>
            </div>

         </div>


      </div>

   </div>

</div>