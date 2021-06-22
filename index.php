<!DOCTYPE html>
<html>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>

  
<div ng-app="myApp" ng-controller="namesCtrl"> 
<ul>
  <li ng-repeat="x in names">
    {{ x.name + ', ' + x.country }}
  </li>
</ul>
</div>

<script src="namesController.js"></script>
  
  
<h1>Developer News</h1>

<?php echo "The Best PHP Examples"; ?>
  
<h2>Developer News</h2>
  
 <?php
$name = "Quincy";
echo "Hi! My name is " . $name . "<br>";
echo "Hi! My name is " . $NAME . "<br>";
echo "Hi! My name is " . $NaMe . "<br>";
?>

</body>
</html> 
