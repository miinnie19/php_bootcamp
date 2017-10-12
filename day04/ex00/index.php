<?php
session_start();

if ($_GET['submit'] == OK)
{
    $_SESSION['login'] = $_GET["login"];
    $_SESSION['passwd'] = $_GET["passwd"];
}
?>

<html>
<body>
    <form action="index.php" method="GET">
    Username: <input type="username" name="login" value="<?php echo $_SESSION["login"]; ?>" placeholder="enter username" /><br>
    <br /> 
    Password: <input type="password" name="passwd" value="<?php echo $_SESSION["passwd"]; ?>" placeholder="enter password" /><br>
    <input type="submit" name="submit" value="OK"/>
</form>
</body></html>