<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>

<h2>Enter Your Details</h2>

<form method="post">

    Name:
    <input type="text" name="name">
    <br><br>

    Age:
    <input type="text" name="age">
    <br><br>

    Email:
    <input type="email" name="email">
    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    echo "<h3>Entered Details</h3>";
    echo "Name : $name <br>";
    echo "Age : $age <br>";
    echo "Email : $email <br>";
}
?>

</body>
</html>
