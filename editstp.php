<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","dbpro");
if($con){
	
}
else{
	echo "Not Connected</br>";
}


$rollno=$_GET['id'];
echo "<br> Roll No is $rollno <br><br>";
echo "<button><a href='afterstp.php?vroll=$rollno'>back</a></button>";

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
while($result=$sql->fetch_array()){
	echo "
	<form action='' method='POST' enctype='multipart/form-data'>
	<table align='center'> 
<tr><th>Class</th><td><input name='class' value='$result[6]'/></td></tr>
<tr><th>Name</th><td><input name='name' value='$result[1]'/></td></tr>
<tr><th>Gender</th><td><input name='gender' value='$result[2]'/></td></tr>
<tr><th>cnic</th><td><input name='cnic' value='$result[3]'/></td></tr>
<tr><th>Father Name</th><td><input name='fname' value='$result[4]'/></td></tr>
<tr><th>Date Of Birth</th><td><input type='date' name='dob' value='$result[5]'/></td></tr>
<tr><th>Email</th><td><input name='email' value='$result[7]'/></td></tr>
<tr><th>Image</th><td><input type='file' name='img' value='uploads/$result[8]'/></td></tr>
<tr><th>Record/CGPA</th><td><input name='rec' value='$result[9]'/></td>
<tr><th>Old School Name</th><td><input name='psn' value='$result[10]'/></td>
<tr><th>Address</th><td><input name='address' value='$result[11]'/></td>
<tr><th>Fee Status</th>";
$ch=null;
if($result[12]=='PAID'){
	echo "<td><input type='checkbox' checked='checked' name='fee' value='PAID' >&nbsp&nbspPAID</input></td></tr>";
	$ch=false;
}
else{
echo "<td><input type='checkbox' name='fee' value='PAID' >&nbsp&nbspPAID</input></td></tr>"; 
	$ch=true;
}

echo "
	</table>
	</br></br>
	<button class='enter' name='enter' type='submit' style='margin:0 auto; display:block;'>Update</button>
</form>";
}

$name=$_POST['name'];
$gender=$_POST['gender'];
$cnic=$_POST['cnic'];
$fname=$_POST['fname'];
$dob=$_POST['dob'];
$class=$_POST['class'];
$email=$_POST['email'];
$rec=$_POST['rec'];
$psn=$_POST['psn'];
$address=$_POST['address'];
$img=$_FILES['img']['tmp_name'];
$nimg=$_FILES['img']['name'];
$fee=$_POST['fee'];
if(isset($name,$gender,$cnic,$fname,$dob,$class,$email,$rec,$psn,$address)){

		if($nimg!=null){
$sq="UPDATE `$tablename` SET `name` = '$name', `gender` = '$gender',`cnic` = '$cnic', `fname` = '$fname', `dob` = '$dob',`class` = '$class',
`email` = '$email', `nimg` = '$nimg',`record` = '$rec', `psn` = '$psn',`address` = '$address',`fee` ='$fee'  WHERE `$tablename`.`rollno` = $rollno";
	}
	else{
		$sq="UPDATE `$tablename` SET `name` = '$name', `gender` = '$gender',`cnic` = '$cnic', `fname` = '$fname', `dob` = '$dob',`class` = '$class',
`email` = '$email',`record` = '$rec', `psn` = '$psn',`address` = '$address', `fee` ='$fee' WHERE `$tablename`.`rollno` = $rollno";
	}

if($con->query($sq)){
	if($nimg!=null){
	
	$file=move_uploaded_file($_FILES['img']['tmp_name'],"uploads/$nimg");
	}
		echo "Updated";
		$sq=mysqli_query($con,"select date_format(dob, '%m%d%Y') from $tablename where rollno=$rollno");
		if($ch==true & $fee=="PAID"){
			$month=date("M-Y");
			$mesg="Your Fee for month $month has been Paid.
			\n\n\nRegards, \nThe General School System \nrizwan.mdk.018@gmail.com";
			mail($email,"Fee Status",$mesg);
		}		
		else{
		while($re=$sq->fetch_array()){
		$pass=$re[0];
		}
		$mesg="Your Details Updation request has been approved.\nTo check Detalis Login at SMS Login, your 
		 Login ID is your roll# i.e $rollno and Your Password is $pass.
		\n\n\nRegards, \nThe General School System \nrizwan.mdk.018@gmail.com";
		mail($email,"Updation-Notification",$mesg);
		}
	
	header("Location: afterstp.php?vroll=".$rollno);
}
else{
	echo "Not Updated";
}

}
else{
	echo "ERROR! Completely Fill Form<br>";
}




?>

<html>
<head>
<link rel="stylesheet" href="afterstp.css">

</head>
<body>

</body>

</html>



