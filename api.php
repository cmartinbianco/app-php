<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_GET['name']))
{
	$name=$_GET['name'];
	// $price = get_price($name);
	
$json_str = '{"empregados": '.
		'[{"nome":"Jason Jones", "idade":38, "sexo": "M", "dependentes": ["Sedna Jones", "Ian Jones"]},'.
		'{"nome":"Ada Pascalina", "idade":35, "sexo": "F"},'.
		'{"nome":"Delphino da Silva", "idade":26, "sexo": "M"}'.
		'],
		"data": "15/12/2012"}';
	
	$price = json_decode($json_str);
	
	if(empty($price))
	{
		response(200,"Product Not Found",NULL);
	}
	else
	{
		response(200,"Product Found",$price);
	}
	
}
else
{
	response(400,"Invalid Request",NULL);
}

function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}
