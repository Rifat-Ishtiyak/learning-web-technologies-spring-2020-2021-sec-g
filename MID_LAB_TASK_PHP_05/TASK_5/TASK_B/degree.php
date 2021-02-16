<?php
    if(isset($_POST['degree'])){
        
        $degree = $_POST['degree'];
        
        for($i = 0; $i < count($degree); $i++){   
            echo "Degree: ".$degree[$i]."<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree</title>
</head>
<body>
    <form method="post" action="#">
        <fieldset style="width:250px">
            <legend>DEGREE</legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="BSc"> Bsc
            <input type="checkbox" name="degree[]" value="MSc"> Msc
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>