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
    
    <title>Resource Person Name</title>
</head>
<body>
    <h1 style="text-align:center;color:aqua;">Resource Person</h1>
    <form action="resource.php" method = "post" style="text-align:center;" target="blank">
    <br>
        <label for="resource" style="color:#00008B;"><b>Enter Resource Person Name<b></label>
        <br><br>
        <input type = "text" name="rname" value="" style="width:200px;height:20px;"> <br><br>
        <input type="submit" name="sub" value="submit" style="width:80px;height:30px; color:brown; "> 
    </form>
</body>
</html>
<?php    
}
}
    else
    {
        header("Location:./admin1.php");
    }
?>
