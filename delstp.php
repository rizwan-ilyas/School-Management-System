<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","dbpro");
if($con){

}
else{
	echo "Not Connected</br>";
}

$rollno=$_GET['id'];
$vroll=$_POST['vroll'];
if($rollno>=1000){
$arr=str_split($rollno,1);
$t="$arr[0]$arr[1]";	
}
else{
$arr=str_split($rollno,1);
$t="$arr[0]";
}

$tablename="studentid$t";
if($rollno=$vroll){
$sql="DELETE FROM $tablename WHERE `$tablename`.`rollno` = '$rollno';";
$q=mysqli_query($con,$sql);
if($q){
	echo "Deleted Successfully <br>";
}
else{
	echo "Not Deleted<br>";
}
}
else{
	echo "Roll No Does Match TRY AGAIN";
}

echo "
<br><br><button><a href='stp.php'>Back</a></button>
<br><br>
<form action='' method='POST'>
<br>Enter the Roll # Again,<br><br>
<input name='vroll' required/></br>
<br><button type='submit' name='enter'>Enter</button>
</form>";


?>