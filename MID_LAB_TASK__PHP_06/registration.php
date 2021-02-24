<?php 
    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            echo"name field cannot be empty<br>";
        }
        if(empty($_POST['email'])){
            echo"email field cannot be empty<br>";
        }
        if(empty($_POST['uname'])){
            echo"user name field cannot be empty<br>";
        } 
        if(empty($_POST['pass'])){
            echo"password field cannot be empty<br>";
        }
        elseif (!empty($_POST['pass'])) {
            $pass=$_POST['pass'];
            if ( strpos($pass, '@') || strpos($pass, '#') || strpos($pass, '$') || strpos($pass, '%')){
                //echo"password is taken<br>";
            }
            else {
                echo "Password must contain at least one of the special characters (@, #, $, %)<br>";
            }
            if (empty($_POST['cPass'])) {
                echo "please fillup confirm password field<br>";
            }
            elseif (!empty($_POST['cPass'])) {
                if($pass!=$_POST['cPass']){
                    echo "Password and Confirm pass doesn't match<br>";
                }
            }
        }
        if (empty($_POST['gender'])) {
            echo"please select your gender<br>";
        }
        if (empty($_POST['date'] && $_POST['month'] && $_POST['year'])) {
            echo"please select a date, month and year<br>";
        }
        if (!empty($_POST['name'])) {
            if (strlen($_POST['name'])>15) {
                echo"name must contain less than 15 caharacters<br>";
            }
        }
        if (!empty($_POST['uname'])) {
            $uname=$_POST['uname'];
            if (preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $uname) && strlen($uname)>=4 ) {
               
                echo"form submitted successfully<br>";
            }
            else {
                echo"must contain alpha numeric and '_' and contain atleat 4 character<br>";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form method="POST" action="">
        <fieldset style="width: 400px;">
            <legend><b>REGISTRATION</b></legend>
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td>:
                        <input type="text" name="name" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:
                        <input type="email" name="email" id=""><button title="sample@example.com"><b> i</b></button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td>:
                        <input type="text" name="uname" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:
                        <input type="password" name="pass" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>:
                        <input type="password" name="cPass" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" id="">Male
                            <input type="radio" name="gender" id="">Female
                            <input type="radio" name="gender" id="">Other
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Date Of Birth</legend>
                            <input type="tel" name="date" id="" size="1">/
                            <input type="tel" name="month" id="" size="1">/
                            <input type="tel" name="year" id="" size="1"> <i>(dd/mm/yy)</i>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="reset">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>