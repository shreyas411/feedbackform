<?php
if(isset($_POST['download']))
{
  session_start();

  $rname = $_SESSION['rname'];
  $con = mysqli_connect("localhost","root","","feedback");
  $sql = "SELECT * FROM `paper` where rname='$rname'"; 
  $ret = mysqli_query($con,$sql);
$excel = '  <table>
<tr>
    
    <th>Reource Person Name </th>
    <th>Event Name</th>
    <th>User Name</th>
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
    <th>How was Sitting Arrangement</th>
    <th>Useful or Not Useful</th>
    <th>Rating</th>
<tr>';

            while($row = mysqli_fetch_assoc($ret))
            {
            $excel.= '<tr>
            <th>' .$row['rname'].' </th>
            <th>'.$row['event'].'</th>
            <th>'. $row['uname'].' </th>
            <th>' .$row['mail']. '</th>
            <th>'.$row['phone'].'</th>
            <th>'.$row['gender'].'</th>
            <th>'.$row['cname'].'</th>
            <th>'.$row['grad'].'</th>
            <th>'.$row['cyear'].'</th>
            <th>'.$row['dept'].'</th>
            <th>'.$row['tname'].'</th>
            <th>'.$row['date'].'</th>
            <th>'.$row['sug'].'</th>
            <th>'.$row['session'].'</th>
            <th>'.$row['interact'].'</th>
            <th>'.$row['convey'].'</th>
            <th>'.$row['time'].'</th>
            <th>'.$row['seat'].'</th>
            <th>'.$row['useful'].'</th>
            <th>'.$row['rate'].'</th>
            </tr>';
            }
            $excel.='</table>';
        

header("Content-Type:application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=feedback.xls");
header("program: no-cache");
header("Expires: 0");
echo $excel;
 
}
?>