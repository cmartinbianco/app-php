<!DOCTYPE HTML>
<html lang="pt-br">
  
<head>  
  <link rel="shortcut icon" href="https://app-php-my.herokuapp.com/favicon.ico" type="image/x-icon">
	
  <meta charset="utf-8"/>

  <title>Título da Página (Estrutura básica de uma página com HTML 5)</title>
  <link href="css/stylesheet.css" rel="stylesheet"/>
  <script src="scripts/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>  
  
<body>
  
  
<?php	
	
	$servername = "sql10.freemysqlhosting.net";
	$username = "sql10420853";
	$password = "8uie8DbjXG";
	$dbname = "sql10420853";
	
	$tabela = "product";

try
{	
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
	//Via procedures
	//$pesq = "";
	//$sql = "CALL Nome_da_procedure()";
 
	//Via querys
	//$pesq = "Tatä Caça";
	//$sql = "SELECT * FROM $tabela WHERE name = :nome_param";
	$sql = "SELECT * FROM $tabela";
	
  $stmt = $conn->prepare($sql);
	
  //Definição de parâmetros
  //$stmt->bindParam(":nome_param", $pesq, PDO::PARAM_STR);
	
  $stmt->execute();
	
	echo'<p>'.$sql.'</p><hr>';

	foreach($stmt as $linha)
	{
		echo '<p>';
		echo $linha["name"];
		echo '</p>';
	}
 
	echo '<hr><p>Resultados: '.$stmt->rowCount().'</p>';	

	$conn = null;
	
}
catch(PDOException $erro)
{
	echo $erro->getMessage();
}
	
?> 
  
  
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
