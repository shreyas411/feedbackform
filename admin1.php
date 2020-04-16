<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        div
        {
            margin :180px 430px 200px 430px;
            border:solid 2px aqua;
            background-color :lightcyan;
           
        }
        body
        {
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    
    <div style="text-align:center">
    <h1 style="text-align:center;color:blue;">Admin Login Page</h1>
    <form method="post" action="admin.php" >
        <input type="email" name="email" id="email" placeholder="Email...." style="width:200px;height:20px;">
        <br><br>
        <input type="password" name="password" id="password" placeholder="Password...." style="width:200px;height:20px"><br><br>
        <input type="submit" name="sub" value="Login" style="width:80px;height:30px;">
    </form>
    </div>
</body>
</html>

