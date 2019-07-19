<?php
// Convert XML to Array
function xmlToArray($response){
	$xml = simplexml_load_string($response);
	$json = json_encode($xml);
	$arr = json_decode($json,true);

	return $arr;
}
