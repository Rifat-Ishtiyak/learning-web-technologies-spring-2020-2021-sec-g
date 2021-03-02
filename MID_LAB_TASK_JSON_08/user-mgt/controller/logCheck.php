<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$inp = file_get_contents('../model/user.json');
		$temp = json_decode($inp, true);

		if($_POST['username'] == "" || $_POST['password'] == ""){
			echo "null submission...";
		}
		else{
			$f=0;
			foreach ($temp as $key1 => $value1) {
				if ($temp[$key1]["username"]==$_POST['username'] and $temp[$key1]["password"]==$_POST['password']) {
					$f=1;
				}
			
			}
			if($f==1){
				$_SESSION['flag'] = true;
				header('location: ../view/home.php');
			}
			else{
				echo"invaild user";
			}
		}
	}

	
?>