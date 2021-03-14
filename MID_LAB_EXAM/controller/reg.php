<?php 
    session_start();

    if(isset($_POST['submit'])){
        if($_POST['id'] == "" || $_POST['pass'] == "" ||  $_POST['name'] == ""){
			echo "null value found...";
        }
        else {
            if ($_POST['pass']==$_POST['cpass']) {
                $user = ['username'=> $_POST['id'], 'pass'=> $_POST['pass'], 'name'=>$_POST['name'], 'type'=>$_POST['type']] ;
                
                if(filesize('../model/user.json')==0){
					$json=json_encode($user);
					$myfile=fopen('../model/user.json', 'w');
					fwrite($myfile, '['.$json.']');
				}
				else{
					$inp = file_get_contents('../model/user.json');
					$tempArray = json_decode($inp);
					array_push($tempArray, $user);
					$jsonData = json_encode($tempArray);
					file_put_contents('../model/user.json', $jsonData);
				}
                header('location: ../view/login.html');

            }
            else{
				echo "password & confirm password mismatch...";
			}

        }
    }
?>