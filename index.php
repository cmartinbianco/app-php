<!DOCTYPE HTML>
<html lang="pt-br">
  
<head>  
  <link rel="shortcut icon" href="https://app-php-my.herokuapp.com/favicon.ico" type="image/x-icon">
	
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <title>Título da Página (Estrutura básica de uma página com HTML 5)</title>
  <link href="css/stylesheet.css" rel="stylesheet"/>
  <script src="scripts/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>  
  
<body>
  
  
	 <header>
	    <nav>
	        <ul>
	            <li>Home</li>
	            <li>Contato</li>
	        </ul>
	    </nav>
	</header>
 
	<section>
	    <article>
	        <header>
	            <h2>O título do artigo é aqui</h2>
	            <p>Publicado em <time datetime="2015-03-09T13:00:24+01:00">09 de Março de 2015</time> por <a href="#">Author</a> - <a href="#comments">30 comentários</a></p>
	        </header>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	    </article>
 
	    <article>
	        <header>
	            <h2>O título do artigo é aqui</h2>
	            <p>Publicado em <time datetime="2015-03-09T13:00:24+01:00">09 de Março de 2015</time> por <a href="#">Author</a> - <a href="#comments">15 comentários</a></p>
	        </header>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	    </article>
	</section>
  
  
<div ng-app="myApp" ng-controller="customersCtrl"> 

<ul>
  <li ng-repeat="x in myData">
    {{ x.nome + ', ' + x.idade }}
  </li>
</ul>

</div>
  
  
	<aside>
	    <h2>Entre em contato</h2>
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	</aside>
 
	<footer>
	    <p>Copyright 2015 Código Fonte©</p>
	</footer>  

  
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
