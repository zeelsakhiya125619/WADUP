

<html>
<head>
    <title>Login</title>
</head>
<body>

<form 
method="post">
    Username:
    <input type="text" name="name">
    <input type="submit" name="btn" value="Login">
</form>
</body>
</html>


<?php
session_start();

if(isset($_POST['btn']))
{
    $_SESSION["name"] = $_POST["name"];
    header("Location: home.php");
    exit();
}
?>