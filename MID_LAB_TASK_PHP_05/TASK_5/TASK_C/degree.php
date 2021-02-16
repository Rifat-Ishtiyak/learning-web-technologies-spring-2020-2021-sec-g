<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree</title>
</head>
<body>
    <form method="post" action="degree.php">
        <fieldset style="width:250px">
            <legend>DEGREE</legend>
            <input type="checkbox" name="degree[]" value="SSC" <?php if(isset($_POST['submit'])){ echo $_POST['degree'];} ?>> SSC
            <input type="checkbox" name="degree[]" value="HSC"> <?php if(isset($_POST['submit'])){ echo $_POST['degree'];} ?> HSC
            <input type="checkbox" name="degree[]" value="BSc"> <?php if(isset($_POST['submit'])){ echo $_POST['degree'];} ?> BSc
            <input type="checkbox" name="degree[]" value="MSc"> <?php if(isset($_POST['submit'])){ echo $_POST['degree'];} ?> MSc
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>