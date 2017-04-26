<?php 
final class ParseCurl{


//create a new object 
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

return	$result = curl_exec($cpt);


}
//get an object from a parse server  
public function getObject($app_id, $masterkey, $url, $query=""){
	$cpt = curl_init($url.$query);

	curl_setopt($cpt, CURLOPT_HTTPHEADER, array(
		'X-Parse-Application-Id: '.$app_id,
		'X-Parse-Master-Key: '.$masterkey
	));

	curl_setopt($cpt, CURLOPT_RETURNTRANSFER, 1);

	$result = curl_exec($cpt);
		return $result;
}

//update an object 

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



//delete an object 


public function deleteObject($app_id, $masterkey, $url, $data=" "){
	$cpt = curl_init($url);
	curl_setopt($cpt, CURLOPT_HTTPHEADER, array(
		'X-Parse-Application-Id: '.$app_id,
		'X-Parse-Master-Key: '.$masterkey,
		'Content-Type: application/json'
	));

	curl_setopt($cpt, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($cpt, CURLOPT_CUSTOMREQUEST, "DELETE");

	$result = curl_exec($cpt);

	return $result;
}



//Query  on a parse server

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

//get number of objects

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
