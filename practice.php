<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practice</title>
</head>
<body>
    <form action="practice.php" method="post">
    Red<input type="checkbox" name="color[]" id="color" value="red">
    Green<input type="checkbox" name="color[]" id="color" value="green">
    Blue<input type="checkbox" name="color[]" id="color" value="blue">
    Cyan<input type="checkbox" name="color[]" id="color" value="cyan">
    Magenta<input type="checkbox" name="color[]" id="color" value="Magenta">
    Yellow<input type="checkbox" name="color[]" id="color" value="yellow">
    Black<input type="checkbox" name="color[]" id="color" value="black">
    <input type="submit" value="submit">
</form>
</body>
</html>




<?php

$name = $_POST['color'];

// optional
// echo "You chose the following color(s): <br>";

foreach ($name as $color){ 
    echo $color."<br />";
}

?>