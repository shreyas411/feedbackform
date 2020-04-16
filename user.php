<?php
# submit button calling
if(isset($_POST['sub']))
{
    session_start();
    $_SESSION['uname'] = $_POST['uname'];
    
    $uname = $_SESSION['uname'];    #resource person name 

    $con = mysqli_connect("localhost","root","","feedback"); #connect the database

    if($con) #checking the database is connected or not
    {
        ?>
        <form action="exportuser.php" method="post">
            <input type="submit" name="export" value="Download">
    </form>     
        <?php

         $sql = "SELECT * FROM `paper` where uname = '$uname'"; #select query where resource person name
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
                <th>User Name</th>
                <th>Event</th>
                <th>Reource Person Name </th>
                <th>E-Mail Id</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>College Name</th>
                <th>Graduation</th>
                <th>Year of Study</th>
                <th>Department</th>
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

             while($row = mysqli_fetch_assoc($ret))
             {
                echo  '<tr>
                 <td>' .$row['uname'].' </td>
                 <td>'.$row['event'].'</td>
                 <td>'. $row['rname'].' </td>
                 <td>' .$row['mail']. '</td>
                 <td>'.$row['phone'].'</td>
                 <td>'.$row['gender'].'</td>
                 <td>'.$row['cname'].'</td>
                 <td>'.$row['grad'].'</td>
                 <td>'.$row['cyear'].'</td>
                 <td>'.$row['dept'].'</td>
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

     ?>
     </table>
          <?php
           
    }
    else{
        echo "Connection Failure";
    }
    
}
else{
    echo  "<a href='select.php'>Go Back</a>";

}
?>