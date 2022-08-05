<?php

error_reporting(0);
$con=mysqli_connect("localhost","root","","dbpro");
if($con){
	echo "conected Successfully<br>";
}
else{
	echo "Not Connected</br>";
}


$result=mysqli_query($con,"select * from admission where cnic='2222222222222'");
while($res=mysqli_fetch_array($result)){
	$name=$res['name'];
}



$name=mysqli_real_escape_string($con,$_POST['name']);
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$gender=$_POST['gender'];

$class=$_POST['class'];
$rec=$_POST['rec'];
$psn=$_POST['psn'];
$address=$_POST['address'];
$img=$_FILES['img']['tmp_name'];
$nimg=$_FILES['img']['name'];

$sql="UPDATE `admission` SET `name` = '$name',`fname` = '$fname'  WHERE `cnic` = '$cni'";

$i=move_uploaded_file($_FILES['img']['tmp_name'],"uploads/$nimg");

if($con->query($sql)){
	echo "Updated Successfully";
}
else{
	echo "Not Updated";
}

$con->close();

?>



<html>

<title>After Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<link rel="stylesheet" href="plogin.css">

<body>

<div class="logo">
</div>

<div class="q" align="left">
<div class="r"><a href="Home.html">Home</a></div>
<div class="w"><a href="Admission.html">Admission</a></div>
<div class="w"><a href="login.html">SMS</a></div>
<div class="w"><a href="Contact.html">Contact Us</a></div>
<div class="w"><a href="sign.html">SIGN IN</a></div>
<input type="text" placeholder="&#128269;search here" align="center" size="25"/>
</div>

 
<div class="box">
<div class="smallbox">
<div class="head">

<h1>Online Addmission Application</h1>
<div class="a">
<form action="afterlogin.php" method="POST" enctype="multipart/form-data">
Name</br></br> <input class="name" name="name" value="<?php  echo $name; ?>"/></br></br>
Gender </br></br>Male <input type="radio" name="gender" value="male"/>   Female <input type="radio" name="gender" value="female" requied/></br></br>

Father Name </br></br><input  class="fname" name="fname" value="<?php include("configur.php"); echo $fname; ?>"/></br></br>

Select Class    <select class="select" type="text" name="class" required>
				<option value="1" name ="class" value="1">Class One </option>
				<option value="2" name ="class" value="2">Class Two </option>
				<option value="3" name ="class" value="3">Class Third </option>
				<option value="4" name ="class" value="4">Class Forth </option>
				<option value="5" name ="class" value="5">Class Fifth </option>
				<option value="6" name ="class" value="6">Class Sixth </option>
				<option value="7" name ="class" value="7">Class Seventh </option>
				<option value="8" name ="class" value="8">Class Eigth </option>
				<option value="9" name ="class" value="9">Class Nineth </option>
				<option value="10" name ="class" value="10">Class Tenth </option>
</select></br></br>
Address </br></br><textarea type="text" name="address" cols="30" rows="5" class="address" value="<?php include("configur.php"); echo $a; ?>"><?php include("configur.php"); echo $a; ?></textarea></br></br>
</div>
<div class="pic">
<div class="picbox">
<?php echo "<img src='uploads/$nimg' width='100%' height='100%'></img>"; ?>
</div>
<input type="file" name="img" accept="image/gif, image/jpeg, image/jpg, image/png" value="<?php echo $nimg; ?>"/></br></br></br>
<div class="b">
Acdamic Record</br></br><input type="text" class="rec" name="rec" placeholder="X CGPA / total %age" value="<?php echo $rec; ?>"/></br></br>
Previous School Name </br></br><textarea type="text" name="psn" cols="30" rows="5" classs="address" value="<?php include("configur.php"); echo $a; ?>"></textarea></br></br>

<div class="submit"><button type="submit" class="submitb">SUBMIT</button>

</div>
</div>
</form>


</div>

</div>

</div>
</div>

<div>

</div>
</body>
</html>

