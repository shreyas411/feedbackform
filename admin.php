<?php
session_start();
if(isset($_POST['sub']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
# 2. Process
$con = mysqli_connect("localhost", "root", "", "feedback");

$query = "SELECT password FROM login WHERE email='$email'";

$res = mysqli_query($con, $query);

$data = mysqli_fetch_assoc($res);

if(empty($data))
{
    echo "No such user!";
}
else
{
    if($data["password"] == $password)
    {
        $_SESSION["login"] = true;
       header("Location:select.php");
    }
    else
    {
        $_SESSION["login"] = false;
        echo "Wrong Password!";
    }
}
}


else
{
    $_SESSION["login"] = false;
    header("Location:admin1.php");
}

?>