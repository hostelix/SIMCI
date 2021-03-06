(function (GlobalApp) {

    if (typeof GlobalApp !== 'undefined') {

        GlobalApp.directive("ngModelFile", [function () {
            return {
                scope: {
                    ngModelFile: "="
                },
                link: function (scope, element, attributes) {
                    element.bind("change", function (changeEvent) {
                        var reader = new FileReader();
                        reader.onload = function (loadEvent) {
                            scope.$apply(function () {
                                scope.ngModelFile = loadEvent.target.result;
                            });
                        };
                        reader.readAsDataURL(changeEvent.target.files[0]);
                    });
                }
            }
        }]);

        GlobalApp.directive('ngUpdateHidden', [function () {
            return {
                restrict: 'AE', //attribute or element
                scope: {},
                replace: true,
                require: 'ngModel',
                link: function ($scope, elemento, attr, ngModel) {
                    $scope.$watch(ngModel, function (nuevo_val) {
                        elemento.val(nuevo_val);
                    });
                    elemento.change(function () { //bind the change event to hidden input
                        $scope.$apply(function () {
                            ngModel.$setViewValue(elemento.val());
                        });
                    });
                }
            };
        }]);
       
        GlobalApp.directive('ngOnlyNumber', function () {
            return {
                restrict: 'EA',
                require: 'ngModel',
                link: function (scope, element, attrs, ngModel) {   
                    scope.$watch(attrs.ngModel, function(newValue, oldValue) {
                        var spiltArray = String(newValue).split("");

                        if(attrs.allowNegative == "false") {
                            if(spiltArray[0] == '-') {
                                newValue = newValue.replace("-", "");
                                ngModel.$setViewValue(newValue);
                                ngModel.$render();
                            }
                        }

                        if (attrs.allowDecimal == "false" && spiltArray.length > 1) {
                            newValue = newValue.replace(".", "");
                            ngModel.$setViewValue(newValue);
                            ngModel.$render();
                        }

                        if(spiltArray.length === 0) return;
                        if(spiltArray.length === 1 && (spiltArray[0] == '-' || spiltArray[0] === '.' )) return;
                        if(spiltArray.length === 2 && newValue === '-.') return;
                        
                        if (isNaN(newValue)) {
                          ngModel.$setViewValue(oldValue);
                          ngModel.$render();
                        }
                    });
                }
            };
        });

        GlobalApp.directive('ngShowProgressLoading', ['$rootScope', function ($rootScope) {
            return {
                restrict: 'AE',
                link: function ($scope, $element) {

                    function ocultarProgress() {
                        $rootScope.progressbar.complete();
                    }

                    $scope.$on('$routeChangeStart', function () {
                        $rootScope.progressbar.start();
                    });
                    $scope.$on('$routeChangeSuccess', ocultarProgress);
                    $scope.$on('$routeChangeError', ocultarProgress);
                    // Initially element is hidden
                    ocultarProgress();
                }
            }
        }]);

    }
    else {

        throw new Error("La app SIMCI no ha sido declarada en AngularJs");

    }

})(typeof simci === 'undefined' ? undefined : simci);