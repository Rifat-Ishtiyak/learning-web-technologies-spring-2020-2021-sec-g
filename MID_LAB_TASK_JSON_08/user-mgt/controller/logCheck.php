<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$inp = file_get_contents('../model/user.json');
		$temp = json_decode($inp);
		echo $temp['0']['username'];
		$username = $temp['0']['username'];
		$password = $temp['0']['password'];

		if($_POST['username'] == "" || $_POST['password'] == ""){
			echo "null submission...";
		}else{

			if($username == $_POST['username'] && $password == $_POST['password']){
				$_SESSION['flag'] = true;
				header('location: ../view/home.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>