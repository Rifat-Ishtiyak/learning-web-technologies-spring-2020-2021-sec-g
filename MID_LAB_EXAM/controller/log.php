<?php 
    session_start();
    if(isset($_POST['submit'])){
        $inp = file_get_contents('../model/user.json');
		$temp = json_decode($inp, true);

        if($_POST['id'] == "" || $_POST['pass'] == ""){
			echo "null submission...";
		}
		else{
			$f=0;
			foreach ($temp as $key1 => $value1) {
				if ($temp[$key1]["id"]==$_POST['id'] and $temp[$key1]["pass"]==$_POST['pass']) {
					$f=1;
                    $_SESSION['nam']=$temp[$key1]["name"];
                    $type=$temp[$key1]["type"];
				}

			}
			if($f==1){
				$_SESSION['flag'] = true;
				$name=$_POST['username'];
				
				header('location: ../view/home.php');
			}
			else{
				echo"invaild user";
			}
		}
    }

?>