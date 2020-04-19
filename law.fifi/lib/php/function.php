<?php

function updateUser($data, $id){

	$users = getData("../data/users.json");

		foreach ($users as $i => $user) {
			# code...
			
			if ($i == $id) {

			print_p($i);
	

			// $editData = json_decode(json_encode($_POST));
			// print_p($id);

			$users[$i] = array_merge($user,$data);



			// $getValue = json_decode($addEditedData);
			// echo $editData;
			// print_p($users[$i]);
			if (!is_array($data["classes"])) {
				explode(",", $data["classes"]);

				
	print_p($users);
			}


			}
		}
	file_put_contents("../data/users.json", json_encode($users));

}


function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}


function getData($str){

	return json_decode(file_get_contents($str));
}

include_once "auth.php";
function makeConn(){
	@$conn = new mysqli(...makeAuth()); //...spread operator

	if ($conn->connect_errno) die($conn->connect_errno);

	$conn->set_charset('utf8');

	return $conn;

};

function getRows($conn, $sql){

	$a = [];

	$result = $conn ->query($sql);

	if ($conn->errno) die($conn->error);
		
		while ($row = $result->fetch_object()) {
			# code...
			$a[]= $row;
		}
		return $a;
}

