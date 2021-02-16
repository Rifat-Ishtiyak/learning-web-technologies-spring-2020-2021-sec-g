<?php
    if(isset($_POST['submit'])){
        echo "Name: ".$_POST['Name'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Name</title>
</head>
<body>
    
    <form method="post" action="#">
        
        <fieldset style="width: 180px;">
            
        <legend><b>NAME</b></legend>
        <input type="text" name="Name"> <hr>
        <input type="submit" name="submit" value="Submit">
            
        </fieldset>
        
        
    </form>
    
</body>
</html>