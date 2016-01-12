(function(GlobalApp){

  if( typeof GlobalApp !== 'undefined'){
 
    GlobalApp.config(['$routeProvider','$locationProvider',function($routeProvider,$locationProvider) {
      
      //Rutas para usuarios
      $routeProvider.
        when('/usuarios', {
          templateUrl: '/views/layouts/layout_main_modulos',
          controller: 'UsuariosController'
        }).
        when('/usuarios/crear', {
          templateUrl: '/views/usuarios/registrar_usuario',
          controller: 'UsuariosController'
        }).
        when('/usuarios/ver/:param', {
          templateUrl: '/views/usuarios/principal_usuarios',
          controller: 'UsuariosController'
        }).
        when('/usuarios/eliminar/:idUsuario', {
          templateUrl: '/views/usuarios/principal_usuarios',
          controller: 'UsuariosController'
        }).
        when('/usuarios/modificar/:idUsuario', {
          templateUrl: '/views/usuarios/principal_usuarios',
          controller: 'UsuariosController'
        }).

        //Rutas para inventario
        when('/inventario', {
          templateUrl: '/views/layouts/layout_main_modulos',
          controller: 'InventarioController'
        }).

        otherwise({
          redirectTo: function(){

            return '/';
          }
        });

        //$locationProvider.hashPrefix('/'); //Este es usado para darle un pefijo a # de angular
        //$locationProvider.html5Mode(true);
        
    }]);

  }
  else{

    throw new Error( "La app SIMCI no ha sido declarada en AngularJs" );

  }

})(typeof simci === 'undefined' ? undefined : simci);