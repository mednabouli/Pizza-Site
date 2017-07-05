var app = angular.module("pizza", ['ngRoute'])
	
.config(['$routeProvider','$locationProvider', function($routeProvider,$locationProvider) {
  
  $routeProvider.
    when('/home', {   
      templateUrl: 'views/home.php',
	  controller:'WidgetsController'
    }).
    when('/pizza', {
      templateUrl: 'views/pizza.php',
	  controller:'WidgetsController'
    }).
    when('/extra', {
      templateUrl: 'views/extra.php',
	  controller:'WidgetsController'
    }).
	  when('/offre', {
      templateUrl: 'views/offre.php',
	  controller:'WidgetsController'
    }).
      when('/about', {
      templateUrl: 'views/about.php',
	  controller:'WidgetsController'
    }).
      when('/contact', {
      templateUrl: 'views/contact.php',
	  controller:'WidgetsController'
    }).
	when('/en/home', {
      templateUrl: 'en/views/home.php',
    }).
    otherwise({redirectTo: '/home'})
	$locationProvider.html5Mode(true);
	$locationProvider.hashPrefix = '!';

}]);

app.controller('WidgetsController', function($scope) {});
app.controller('MyCtrl', function($scope, $location) {
    $scope.isActive = function(route) {
        return route === $location.path();
    }
});
