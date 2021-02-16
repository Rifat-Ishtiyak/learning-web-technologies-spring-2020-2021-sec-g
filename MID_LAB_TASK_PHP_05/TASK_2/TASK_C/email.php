
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email</title>
</head>
<body>
    
    <form method="post" action="#">
        
        <fieldset style="width: 190px;">
            
            <legend><b>EMAIL</b></legend>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; }?>">
        <button title="hint:Sample@example.com" style="color: blue; font-size: 12px;"><b>i</b></button>
        <hr>
        <input type="submit" name="submit" value="Submit">
            
        </fieldset>
        
        
    </form>
    
</body>
</html>