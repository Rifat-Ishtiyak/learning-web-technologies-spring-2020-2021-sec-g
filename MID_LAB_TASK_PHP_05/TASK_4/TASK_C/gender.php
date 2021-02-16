<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>
    <form method="POST" action="#">
        <fieldset style="width: 200px;">
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male" <?php if(isset($_POST['submit'])){ echo $_POST['gender'];} ?> >Male
            <input type="radio" name="gender" value="Female" <?php if(isset($_POST['submit'])){ echo $_POST['gender'];} ?>>Female
            <input type="radio" name="gender" value="Other" <?php if(isset($_POST['submit'])){ echo $_POST['gender'];} ?>>Other
            <hr>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>
