
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date of Birth</title>
</head>
<body>
    
    <form method="post" action="#">
        
        <fieldset style="width:200px">
            
            <legend><b>DATE OF BIRTH</b></legend>
            <pre>  dd      mm     yyyy</pre>
            <input type="tel" name="day" size="1" value="<?php if(isset($_POST['day'])){ echo $_POST['day']; }?>"><b> /</b>
              <input type="tel" name="month" size="1" value="<?php if(isset($_POST['month'])){ echo $_POST['month']; }?>"><b> /</b>
              <input type="tel" name="year" size="2" value="<?php if(isset($_POST['year'])){ echo $_POST['year']; }?>">
               <hr>
                
        <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>