<?php
$con=mysqli_connect("localhost","root","","dbpro");
if($con){

}
else{
	echo "Not Connected</br>";
}

$rollno=$_GET['vroll'];
if($rollno>=1000){
$arr=str_split($rollno,1);
$t="$arr[0]$arr[1]";	
}

else{
$arr=str_split($rollno,1);
$t="$arr[0]";
}

$tablename="studentid$t";
$sql="select * from $tablename where rollno=$rollno";
$q=mysqli_query($con,$sql);
if($q){
	while($res=$q->fetch_array()){
	$rollno=$res[0];
	$name=$res[1];
	$gender=$res[2];
	$cnic=$res[3];
	$fname=$res[4];
	$dob=$res[5];
	$class=$res[6];
	$email=$res[7];
	$nimg=$res[8];
	$address=$res[11];
	$fee=$res[12];
	}
}





?>

<html>
<head>
<link rel="stylesheet" href="afterstp.css">
</head>
<body>
</br></br>
<button><a href="stp.php">Back</a><button>
</br></br>
<div class="picbox">
<?php echo "<img src='uploads/q4.png' width='100%' height='100%'></img>"; ?>

</div>

<div class="tble">

<table width="90%" height="20%" >
 

 <tr><td class="a">Roll#</td><td class="b"><?php echo $rollno; ?></td></tr>
 <tr><td>Name</td><td><?php echo $name; ?></td></tr>
 <tr><td>Gender</td><td><?php echo $gender; ?></td></tr>
 <tr><td>CNIC</td><td><?php echo $cnic; ?></td></tr>
 <tr><td>Father Name</td><td><?php echo $fname; ?></td></tr>
 <tr><td>Date Of Birth<td><?php echo $dob; ?></td></td></tr>
 <tr><td>Class</td><td><?php echo $class; ?></td></tr>
 <tr><td>Email Address</td><td><?php echo $email; ?></td></tr>
 <tr><td>Residence Address</td><td><?php echo $address; ?></td></tr>
 <tr><td>FEE Status</td><td><?php if($fee==null){echo "NOT PAID";} else{echo "$fee";} ?></td></tr>
 <form action="" method="POST">
 <div>
 <button type="submit" name="edit">Edit</button>
 <button type="submit" name="del">Delete</button></div>
 </form>
<?php if(isset($_POST['edit'])){header("Location: editstp.php?id=".$rollno);} 
	  if (isset($_POST['del'])){header("Location: delstp.php?id=".$rollno);}


?>

</table>

</br></br></br>


</div>



</body>


</html>

