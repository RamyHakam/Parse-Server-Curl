<?php 
final class ParseCurl{
public function createObject($app_id, $masterkey, $url, $data){
	$cpt = curl_init($url);
	curl_setopt($cpt, CURLOPT_HTTPHEADER, array(
		'X-Parse-Application-Id: '.$app_id,
		'X-Parse-Master-Key: '.$masterkey,
		'Content-Type: application/json'
	));

	curl_setopt($cpt, CURLOPT_POST, 1);
	curl_setopt($cpt, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt_array($cpt, [
		CURLOPT_POSTFIELDS => $data,

	]);

	$result = curl_exec($cpt);


}

public function getObject($app_id, $masterkey, $url, $query=""){
	$cpt = curl_init($url.$query);

	curl_setopt($cpt, CURLOPT_HTTPHEADER, array(
		'X-Parse-Application-Id: '.$app_id,
		'X-Parse-Master-Key: '.$masterkey
	));

	curl_setopt($cpt, CURLOPT_RETURNTRANSFER, 1);

	$result = curl_exec($cpt);
	//return json_decode($result);
		return $result;
}


public function updateObject($app_id, $masterkey, $url, $data){
	$cpt = curl_init($url);
	Log::warning($data);
	curl_setopt($cpt, CURLOPT_HTTPHEADER, array(
		'X-Parse-Application-Id: '.$app_id,
		'X-Parse-Master-Key: '.$masterkey,
		'Content-Type: application/json'
	));

	curl_setopt($cpt, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($cpt, CURLOPT_CUSTOMREQUEST, "PUT");

	curl_setopt_array($cpt, [
		CURLOPT_POSTFIELDS => $data,
	]);

	$result = curl_exec($cpt);

	return json_decode($result);
}



public function queryParse($app_id, $masterkey, $url, $query=""){

	$cpt = curl_init($url.$query);

	curl_setopt($cpt, CURLOPT_HTTPHEADER, array(
		'X-Parse-Application-Id: '.$app_id,
		'X-Parse-Master-Key: '.$masterkey
	));

	curl_setopt($cpt, CURLOPT_RETURNTRANSFER, 1);

	$result = curl_exec($cpt);
	return json_decode($result);
}

public function countParse($app_id, $masterkey, $url, $query=""){
	$cpt = curl_init($url.$query);
	curl_setopt($cpt, CURLOPT_HTTPHEADER, array(
		'X-Parse-Application-Id: '.$app_id,
		'X-Parse-Master-Key: '.$masterkey
	));
	curl_setopt($cpt, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($cpt);
	return json_decode($result);
}

	}
