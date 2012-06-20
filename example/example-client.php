<?php
require_once "../src/JSONResponse.php";

$json_response = new JSONResponse();

$json_response->setStringResponseIn('{"error":{"type":"MethodException","message":"name is required"}}');

if( $json_response->isError() ){
	echo "Fuck name";
	}
	else{
		echo "Yeah baby";
		}
?>