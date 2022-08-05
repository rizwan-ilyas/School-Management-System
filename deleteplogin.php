<?php

$con=mysqli_connect("localhost","root","","dbpro");
if($con){
	echo "conected Successfully<br>";
}
else{
	echo "Not Connected</br>";
}



$cnic=$_GET['id'];
$ql=mysqli_query($con,"select email from admission where cnic=$cnic");
while($res=$ql->fetch_array()){
	$e=$res[0];
	}
	
$sql="DELETE FROM `admission` WHERE `admission`.`cnic` = '$cnic' ";
$q=mysqli_query($con,$sql);
if($q){
	echo "Deleted Successfully<br>";
	$mesg="Sorry, Your request against Admission has been Rejected! \n
		\n\n\nRegards, \nThe General School System \nrizwan.mdk.018@gmail.com";
		$m=mail($e,"no-reply",$mesg);
	include("admission.php");
}
else{
	echo "Not Deleted<br>";
}



?>