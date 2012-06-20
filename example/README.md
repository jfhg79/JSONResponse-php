Example Api
============

	<?php
	require_once "../src/JSONResponse.php";

	// Ok Response
	// http://localhost/JSONResponse-php/example/example-api.php?name=paulo
	// Return: {"message":"Excellent paulo"}
	
	// Error Response
	// http://localhost/JSONResponse-php/example/example-api.php
	// Return: {"error":{"type":"MethodException","message":"name is required"}}
	
	$name = ( isset( $_GET['name'] ) ) ? @$_GET['name'] : NULL;
	
	$json_response = new JSONResponse();
	
	if( !is_null( $name ) ){
		$response = new StdClass();
		$response->message = "Excellent " . $name;
		$json_response->makeResponse( $response );
		}
		else{
			$json_response->makeError( "MethodException", "name is required" );
			}
	
	echo $json_response->getStringResponseOut();
	?>

Example Client
============

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