<?php
	$username = $_POST ['username'];
	$password = $_POST ['password'];

	$algos = hash_algos();
	$count = count($algos); 
	$id = rand(0, $count - 1);
	$algo = $algos [$id];

	$separators = ['a', 'b', 'c', 'd', 'e', 'f'];
	$separator_id = rand(0, count($separators) - 1);
	$separator = $separators[$separator_id];

	echo "username: $username <br> \n";
	echo "password: $password <br> \n";

	$password_md5 = hash('md5', $password);
	$password = hash('sha256',$id . $separator . hash($algo, $password));

	echo "hashed: $password <br> \n";
	echo "hashed md5: $password_md5 <br> \n";
?>
