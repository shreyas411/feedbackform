<?php
# submit button calling
if(isset($_POST['sub']))
{
    session_start();
    $_SESSION['cname'] = $_POST['cname'];
    $_SESSION['cyear'] = $_POST['cyear'];
    $_SESSION['sem'] = $_POST['sem'];
    $_SESSION['pgdept'] = $_POST['pgdept'];

    $cname = $_SESSION['cname'];
    $cyear = $_SESSION['cyear'];
    $sem = $_SESSION['sem'];
    $dept = $_SESSION['pgdept'];
     #resource person name 

    $con = mysqli_connect("localhost","root","","feedback"); #connect the database

    if($con) #checking the database is connected or not
    {
        ?>
       <form action="exportpggraduate.php" method="post">
       <input name="download" type="submit" value="Download" style="margin-left:50px; margin-top:50px;">
        </form>
        <?php

         $sql = "SELECT * FROM `paper` where cname = '$cname' && cyear = '$cyear' && sem = '$sem'  && pgdept = '$dept'"; #select query where resource person name
        $ret = mysqli_query($con,$sql);
        ?>
        <style>
             table,th,tr 
            {
                border : 2px solid green;
                background-color : black;
            }

            tr 
            {
                border : 2px solid blue;
                background-color : khaki;
                
            }
            td{
                color : blue;
                font-family : arial;
            }
            th 
            {
                color : blueviolet;
                background-color : azure;
                font-family : verdana;
            }
        </style>
        <table>
            <tr>
                <th>College Name</th>
                <th>Event</th>
                <th>Graduation</th>
                <th>Year of Study</th>
                <th>Semester</th>
                <th>Department</th>
                <th>Reource Person Name </th>
                <th>User Name</th>
                <th>E-Mail Id</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Topic Name</th>
                <th>Date Of Event</th>
                <th>Suggestion</th>
                <th>How was the Session</th>
                <th>Whether He/She Make The Session Interactive</th>
                <th>Understandable</th>
                <th>How long the session</th>
                <th>How Was Sitting Arrangement</th>
                <th>Useful or Not Useful</th>
                <th>Rating</th>
            <tr>
        <?php
            if($ret)
            {

            while($row = mysqli_fetch_assoc($ret))
            {
            echo '<tr>
                <td>'.$row['cname'].'</td>
                <td>'.$row['event'].'</td>
                <td>'.$row['grad'].'</td>
                <td>'.$row['cyear'].'</td>
                <td>'.$row['sem'].'</td>
                <td>'.$row['pgdept'].'</td>
                <td>' .$row['rname'].' </td>
                <td>'. $row['uname'].' </td>
                <td>' .$row['mail']. '</td>
                <td>'.$row['phone'].'</td>
                <td>'.$row['gender'].'</td>
                <td>'.$row['tname'].'</td>
                <td>'.$row['date'].'</td>
                <td>'.$row['sug'].'</td>
                <td>'.$row['session'].'</td>
                <td>'.$row['interact'].'</td>
                <td>'.$row['convey'].'</td>
                <td>'.$row['time'].'</td>
                <td>'.$row['seat'].'</td>
                <td>'.$row['useful'].'</td>
                <td>'.$row['rate'].'</td>
                <tr>' ;
            }
        }
        else{
            echo "the code is failed";
        }
    }
    else{
        echo "Connection Failure";
    }
    
}
else{
    echo  "<a href='select.php'>Go Back</a>";

}
?>