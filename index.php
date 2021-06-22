<!DOCTYPE html>
<html>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  
<head>  
<link rel="shortcut icon" href="/favicon.ico/" type="image/x-icon">  
</head>  
<title>CMB app</title> 
  
<body>

  
<div ng-app="myApp" ng-controller="customersCtrl"> 

<ul>
  <li ng-repeat="x in myData">
    {{ x.nome + ', ' + x.idade }}
  </li>
</ul>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
  $http.get("api.php?name=pen").then(function (response) {
      $scope.myData = response.data.data.empregados;
  });
});
</script>

</body>
</html> 
