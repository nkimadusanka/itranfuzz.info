var main_app = angular.module('app',['ngRoute']);

main_app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: 'anjscontroller',
      }).
      otherwise({
        redirectTo: 'anjscontroller'
      });
  }]);