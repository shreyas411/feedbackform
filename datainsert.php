<?php
$con = mysqli_connect("localhost","root","","feedback");
if($con)
{
	$var19 = $_POST['event'];
	$var1 = $_POST['uname'];
	$var2 = $_POST['mail'];
	$var3 = $_POST['phone'];
	$var4 = $_POST['gender'];
	$var5 = $_POST['cname'];
	$var6 = $_POST['grad'];
	$var7 = $_POST['cyear'];
	$var21 = $_POST['sem'];
	$var20 = $_POST['dept'];
	$var22 = $_POST['pgdept'];
	$var8 = $_POST['tname'];
	$var9 = $_POST['rname'];
	$var10 = $_POST['date'];
	$var11= $_POST['sug'];
	$var12 = $_POST['session'];
	$var13= $_POST['interact'];
	$var14= $_POST['convey'];
	$var15 = $_POST['time'];
	$var16= $_POST['seat'];
	$var17= $_POST['useful'];
	$var18= $_POST['rate'];

    $insert = "INSERT INTO paper(event, uname, mail, phone, gender, cname, grad, cyear,sem, dept, pgdept, tname, rname, date, sug, session, interact, convey, time, seat, useful, rate) VALUES ('$var19','$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var21','$var20','$var22' , '$var8','$var9','$var10','$var11','$var12','$var13','$var14','$var15','$var16','$var17','$var18')";
	$store = mysqli_query($con,$insert);
	if($store)
	{
		echo "<h1>Thanks for your Feedback  $var1<h1>";
		
	}
	else{
		echo "record not inserted";
	}

	
	
}
else
{
	echo "connection failed";
}