<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","dbpro");
if($con){
	
}
else{
	echo "Not Connected</br>";
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

if(isset($name,$gender,$cnic,$fname,$dob,$class)){
$sql="INSERT INTO `admission` (`name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `img`, `record`, `psn`, `address`) 
VALUES ( '$name', '$gender', '$cnic', '$fname', '$dob', '$class','$email' , '$nimg', '$rec', '$psn', '$address'	);";
	
	$file=move_uploaded_file($_FILES['img']['tmp_name'],"uploads/$nimg");
	
	$flage=false;
	
	if($con->query($sql) && $file){
		echo "Your Response Has been Submitted Successfully.Check Your Mail<br>";
		$sl="select date_format(dob, '%m%d%Y') from  admission where cnic=$cnic";
		$sq=mysqli_query($con,$sl);
		while($result=$sq->fetch_array()){
		$pass=$result[0];
		
		}
		
		$mesg="Thank you for your request.\nPlease Login with your 
		CNIC i.e $cnic and Your Password is $pass.
		\n\n\nRegards, \nThe General School System \nrizwan.mdk.018@gmail.com";
		$m=mail($email,"no-reply",$mesg);
		
		if($m){
			$flage=true;
			$con->close();
		}
		else{
			echo "Mail Not Sent! <br>";
			$con->close();
		}
		
	}
	else{
		echo "Not inserted! Maybe Your CNIC already exist<br> Sign in For Confirmation";
		$flage=false;
		$con->close();
	}
	
}
else{
	echo "Kindly Fill Compelete Form<br>";
	$con->close();
}



	

?>



<html>

<title>online.addmission</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<link rel="stylesheet" href="admission.css">

<body>

<div class="logo">
</div>

<div class="q" align="left">
<div class="r"><a href="Home.php">Home</a></div>
<div class="w"><a href="admission.php">Admission</a></div>
<div class="w"><a href="login.php">SMS</a></div>
<div class="w"><a href="contact.php">Contact Us</a></div>
<div class="w"><a href="sign.php">SIGN IN</a></div>
<input type="text" placeholder="&#128269;search here" align="center" size="25"/>
</div>

 
<div class="box">
<div class="smallbox">
<div class="head">

<h1>Online Addmission Application</h1>
<div class="a">
<form action="admission.php" method="POST" enctype="multipart/form-data">
Name</br></br> <input class="name" name="name" required/></br></br>
Gender </br></br>Male <input type="radio" name="gender" value="male"/>   Female <input type="radio" name="gender" value="female" requied/></br></br>
CNIC </br></br><input type="text" pattern="[0-9]{13}" maxlength="13" placeholder="XXXXXXXXXXXXX"  class="cnic" name="cnic" required/></br></br>
Father Name </br></br><input type="text" class="fname" name="fname" required/></br></br>
Date of Birth</br></br><input type="DATE" class="dob" name="dob" required/></br><br>
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
Email</br></br><input type="email" name="email" placeholder ="Enter your email"/></br></br>
</div>
<div class="pic">
<div class="picbox"></div>
<input type="file" name="img" accept="image/gif, image/jpeg, image/jpg, image/png" required/></br></br></br>
<div class="b">
Acdamic Record</br></br><input type="text" class="rec" name="rec" placeholder="X CGPA / total %age" required/></br></br>
Previous School Name </br></br><textarea type="text" name="psn" cols="30" rows="5" classs="address"></textarea></br></br>
Address </br></br><textarea type="text" name="address" cols="30" rows="5" class="address"></textarea></br></br>
<div class="submit"><button type="submit" name="submitb" class="submitb">SUBMIT</button>

</div>
</div>
</form>
<?php
 if($con->query($sql)==true){
	echo "Inserted Successfully<br>";
	$message="your username is your $cnic and password is $";
	mail($email,"No-Reply",);
}
else{
	echo "";
}

$con->close();
?>
</div>

</div>

</div>
</div>

<div>

</div>
</body>
</html>
