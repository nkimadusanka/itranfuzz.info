var main_app = angular.module('app',['ngRoute']);

main_app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: 'anjscontroller',
      }).
      when('/donor_tile', {
        templateUrl: 'anjscontroller/donor_tile',
      }).
      when('/add_cluster', {
        templateUrl: 'anjscontroller/addcluster_tile',
      }).
      when('/update_cluster', {
          templateUrl: 'anjscontroller/updatecluster_tile',
      }).
      when('/remove_cluster', {
          templateUrl: 'anjscontroller/removecluster_tile',
      }).
      when('/view_cluster', {
          templateUrl: 'anjscontroller/viewcluster_tile',
      }).
      otherwise({
        redirectTo: 'anjscontroller'
      });
  }]);