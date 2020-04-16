<?php
session_start();
if(isset($_SESSION["login"]))
{
    $logout = $_GET['logout'];

    if($logout)
    {
        $_SESSION['login']=false;
        header("Location: ./admin1.php");
    }
    else
    {
     $_SESSION['login']=true;
     echo "logout failed";
    }
}
else
{
    echo "session variable is not set";
}
?>
    