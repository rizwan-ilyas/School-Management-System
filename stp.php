<?php 
error_reporting(0);
$con=mysqli_connect("localhost","root","","dbpro");
if($con){
	
}
else{
	echo "Not Connected</br>";
}

$rollno=$_POST['rollno'];
if($rollno>=1000){
$arr=str_split($rollno,1);
$t="$arr[0]$arr[1]";	
}

else{
$arr=str_split($rollno,1);
$t="$arr[0]";
}
$tablename="studentid$t";

if(isset($rollno)){
	
	$sl="select rollno from $tablename where rollno=$rollno";
	$query=mysqli_query($con,$sl);
	$flage=null;
	while($res=$query->fetch_array()){
		$flage=$res[0];
	}
	
	if(isset($flage)){
		
		header("Location: afterstp.php?vroll=".$flage);
	}
	else{
		echo "RollNo Does Not Exist<br>";
	}
	
}

else{
	echo "Please enter a Roll #<br>";
}





?>

<html>

<head>
<title>Student Portal</title>
<link rel="stylesheet" href="stp.css">

</head>

<body>

<div class="ine">
<div class="b">
</br></br></br>
<form action="" method="POST">
Enter the Roll No of Student.<br><br>
<input type='text' name='rollno' />
</br></br>

<button type="submit" class="enter" name="enter" value="enter">Enter</button>
</form>
</div>
<button type="submit" class="back"><a href="admin.php">Back</a></button>

</div>

</body>
</html>


