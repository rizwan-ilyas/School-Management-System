<?php

$con=mysqli_connect("localhost","root","","dbpro");
if($con){
	echo "conected Successfully<br>";
}
else{
	echo "Not Connected</br>";
}



$cni=$_GET['cni'];
$q="select * from admission where cnic='$cni'";
$a=mysqli_query($con,$q);
while($res=$a->fetch_array()){
	$name=$res[1];
	$gender=$res[2];
	$cnic=$res[3];
	$fname=$res[4];
	$dob=$res[5];
	$class=$res[6];
	$email=$res[7];
	$nimg=$res[8];
	$rec=$res[9];
	$psn=$res[10];
	$address=$res[11];
}

$tablename="studentid$class";

$sql="INSERT INTO `$tablename` (`name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `nimg`, `record`, `psn`, `address`) 
VALUES ( '$name', '$gender', '$cnic', '$fname', '$dob', '$class','$email' , '$nimg', '$rec', '$psn', '$address'	)";

if($con->query($sql)){
	$sql="DELETE FROM `admission` WHERE `admission`.`cnic` = '$cni' ";
	$q=mysqli_query($con,$sql);
	
	$rol=mysqli_query($con,"select rollno,email,date_format(dob,'%m%d%Y') from $tablename where cnic=$cni");
	while($r=$rol->fetch_array()){
		$rl= $r[0];
		$e=$r[1];
		$pass=$r[2];
	}
	$mesg="Welcome to General School System!\nYour Addmission request has been approved.\nFor SMS Login, your 
		 Login ID is your roll# i.e $rl and Your Password is $pass.
		\n\n\nRegards, \nThe General School System \nrizwan.mdk.018@gmail.com";
		$m=mail($e,"no-reply",$mesg);
	if($q & $m){
	echo "Approved Successfully<br>";
	include("afteradmit.php");
}
}
else{
	echo "Not inserted</br>";
}


?>	