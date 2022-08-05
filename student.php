<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","dbpro");
if($con){
	
}
else{
	echo "Not Connected<br>";
}

$rollno=$_GET['roll'];

	if($rollno>=1000){
		$arr=str_split($rollno,1);
		$t="$arr[0]$arr[1]";	
	}

	else{
		$arr=str_split($rollno,1);	
		$t="$arr[0]";
}

$tablename="studentid$t";
$sql=mysqli_query($con,"select * from $tablename where rollno=$rollno");
while($res=$sql->fetch_array()){
	$name=$res[1];
	$fname=$res[4];
	$class=$res[6];
	$nimg=$res[8];
	$fee=$res[12];
}









?>

<html>

<title>For Student</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<link rel="stylesheet" href="student.css">

<body>

<div class="logo">
</div>
<div class="q" align="left">
<h1 align="center" style="font-family:verdana;color:white">SMS PORTAL</h1> 
</div>

 

<div class="smallbox">
<div class="head">
<h1>For Student</h1>
<div class="a">
<h3>Name :</h2>
<div class="name"><?php echo $name ?></div>

<h3>Father Name :</h3>
<div class="fname"><?php echo $fname ?> </div>
<h3>Roll No :<h3>
<div class="rollno"><?php echo $rollno ?></div>
<h3>Class :</h3>
<div class="class"><?php echo $class; ?></div>

</div>
</div>
<div class="b">
<div class="log">
<button class="submitb"><a href="login.php">logout</a></button>

</div>
<div class="picbox"> <?php echo "<img src='uploads/$nimg' width='100%' height='100%'></img>"; ?></div>
<h3>Student Profile</h3></br></br>
<div class="submit"><strong>To get Time Table Details. </strong></br></br><button class="submitb"><a href="timetable.php"> Time Table</a></button></div></br><br>
<div class="submit"><strong>Fee Status</strong><?php if($fee==null){echo " : &nbsp&nbspNOT PAID";} else{echo " : &nbsp&nbsp$fee";} ?></div>

</div>


</div>

</div>

</body>
</html>