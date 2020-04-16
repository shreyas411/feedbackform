<?php
session_start();

if(isset($_SESSION["login"]))
{
    if($_SESSION["login"] != true)
    {
        header("Location: ./admin1.php");
    }
    else
    {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>select query</title>
    <style>
    body 
    {
        background-color:darkgray;
    }
    a:hover 
    {
        color : deeppink;
        text-shadow : 2px 2px pink;
    }
    </style>
</head>
<body>
    <form action="logout.php">
<input  type="submit" name="logout" value="Logout" style="text-align:right;margin-right:50px;font-size:20px;color:#ff0000;">
    </form>    
<h1 style="text-align:center; color:red;text-shadow : 2px 2px blue;">ONLINE FEEDBACK FORM</h1>
    <form>
        <nav style= "width:25%; margin-left:25px; padding:0; position:fixed; color:blue;font-size:20px;cursor:pointer; ">
            <a onclick="document.getElementById('f1').src='resource1.php'">Resource Person Name</a><br><br>
            <a onclick="document.getElementById('f1').src='user.html'">Username</a><br><br>
            <a onclick="document.getElementById('f1').src='eventname.html'">Event Name</a><br><br>
            <a onclick="document.getElementById('f1').src='uggraduate.html'">Under Graduation</a><br><br>
            <a onclick="document.getElementById('f1').src='pggraduate.html'">Post Graduation</a><br><br>
            <a onclick="document.getElementById('f1').src='topicname.html'">Topic Name</a><br><br>
            <a onclick="document.getElementById('f1').src='eventdate.html'">Date OF Event</a><br><br>
            <a onclick="document.getElementById('f1').src='rating.html'">Rating</a>
        </nav>
    </form>
    <div style="margin-top:100px; text-align:center;">
        <iframe src="image.html" height="500px" width="60%" id="f1" style="border:none;"></iframe>
    </div>
    
    
    

</body>
</html>

<?php
}
}
else
{
    header("Location: ./admin1.php");
}
?>