<?php

function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}


function getData($str){

	return json_decode(file_get_contents($str), true);
}



function showUserPage($user){

$classes = $user["classes"];

if (is_array($classes)== true) {
	# code...
$classes = implode(",", $user["classes"]);
}else{
$classes = $user["classes"];

}

echo <<<HTML

<h6>
	<a href="admin/users.php" style="padding-left: 0;">&larr; BACK</a>
</h6>

<div>
<h2>User Details</h2>
</div>

<div>
<h4>Name</h4>
<span>{$user['name']}</span>
</div>

<div>
<h4>Type</h4>
<span>{$user['type']}</span>
</div>

<div>
<h4>Email</h4>
<span>{$user['email']}</span>
</div>

<div>
<h4>Classes</h4>
<span>$classes</span>
</div>

<div class="actions-panel">
	<span> <a href="admin/edit.php?id={$_GET['id']}">Edit</a></span>
	<span><a href="admin/remove.php?id={$_GET['id']}">Remove</a></span>
</div>


HTML;
}



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