<?php
	$con=mysqli_connect("localhost","root","");
session_start();


?>


<html>

<head>
<link rel="stylesheet" href="admin.css">
</head>


<body>
<div class="head">
<div class="logo">
</div>
</div>
<div class="logout"><button class="log"><a href="login.php"><?php session_destroy(); ?>logout</a></button></div>
<div class="box">
<div class="dash" style="background-color:#f44336;">
<div style="color:white;font-size:20px;text-align:center;margin-top:20%;"> Get the List of Students</br> whose Fee status is No Paid
<button style="width:15%;heigth:8%;color:Green;font-weight:bold;font-size:20px;" ><a href="nofee.php">List</a></button>

<div >
</br></br></br></br>Warning! Click only one time in a month</br>
Update Fee Status</br>
To Set Not Paid Status&nbsp&nbsp<a href="updatefee.php">click here</a> </br>
</div>

<div style="color:white;font-size:20px;text-align:center;margin-top:30%;">To Get the List of All Students <br>
<a href="stlist.php">click here</a>
</div>

</div>

</div>

<div class="others">
<div class="student">
<p><a href="stp.php">Student Portal</a>
<ul>
<li class="l"> Get Student Details</li>
<li class="l">Edit Student Details</li>
</ul>
</p>
</div>
<div class="admit">
<p><a href="afteradmit.php">Addmission Portal</a>
<ul>
<li class="l"> Get the List of Applications</li>
</ul>
</p>
</div>

<div class="managemenet">
<p><a href="aftermanag.php">Management Portal</a>
<ul>
<li class="l"> Modify the Time Table</li>
</ul>
</p>
</div>
<div class="noti">
<p><a href="afternoti.php">Notifications Portal</a>
<ul>
<li class="l"> Add a Notification</li>
</ul>
</p>
</div>






</div>
</div>



</body>

</html>