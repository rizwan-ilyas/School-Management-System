<html>

<title>plogin</title>
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



</body>
</html>



<?php
error_reporting(0);

$con=mysqli_connect("localhost","root","","dbpro");

if($con){
	
	
}
else{
	echo "Not Connected</br>";
}
$cn=$_GET['id'];

$sl=mysqli_query($con,"select * from admission where cnic=$cn");
if($sl){
	
}
while($res=$sl->fetch_array()){
	 $name=$res['name'];
	 $gender=$res['gender'];
	 $fname=$res['fname'];
	 $class=$res['class'];
	 $address=$res['address'];
	 $psn=$res['psn'];
	 $rec=$res['record'];
	 $nimg=$res['img'];
}

echo "

<div class='box'>

<div class='smallbox'>
<div class='head'>


<h1>Online Addmission Application </h1>



<div class='a'>
<form action='' method='POST' enctype='multipart/form-data'>


Name</br></br> <input class='name' name='name' value='$name' /></br></br>";
if($gender=='male'){
echo "Gender </br></br>Male <input type='radio' name='gender' checked='checked' value='male'/>
   Female <input type='radio' name='gender' value='female' /></br></br>";
}
else{
echo "Gender </br></br>Male <input type='radio' name='gender' value='male'/>   
Female <input type='radio' name='gender' checked='checked' value='female' /></br></br>";
}
echo "
Father Name </br></br><input class='fname' name='fname' value='$fname' /></br></br>
Select Class <input type='number' name='class' value='$class'/></br></br>

Address </br></br><textarea type='text' name='address' cols='30' rows='5' class='address' value='$address'>$address</textarea></br></br>
</div>
<div class='pic'>

<div class='picbox'>
<img src='uploads/$nimg' width='100%' height='100%'/>
</div>
<input type='file' name='img' accept='image/gif, image/jpeg, image/jpg, image/png' /></br></br></br>
<div class='b'>
Acdamic Record</br></br><input type='text' class='rec' name='rec' placeholder='X CGPA / total %age' value='$rec'/></br></br>
Previous School Name </br></br><textarea type='text' name='psn' cols='30' rows='5' class='address' value='$psn'>$psn</textarea></br></br>
<div class='submit' align='center'><button type='submit' class='submitb'>UPDATE</button>
</div>

</div>

</form>

</div>

</div>

</div>




</div>";






$name=$_POST['name'];
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$class=$_POST['class'];
$rec=$_POST['rec'];
$psn=$_POST['psn'];
$address=$_POST['address'];
$img=$_FILES['img']['tmp_name'];
$nimg=$_FILES['img']['name'];
if(isset($name,$fname,$class,$rec,$psn,$address)){
	if($nimg!=null){
		$sql="UPDATE `admission` SET `name` = '$name', `gender` = '$gender', `fname` = '$fname', `class` = '$class',
  `img` = '$nimg',`record` = '$rec', `psn` = '$psn', `address` = '$address' WHERE `admission`.`cnic` = $cn;";
	}
	else{
		$sql="UPDATE `admission` SET `name` = '$name', `gender` = '$gender', `fname` = '$fname', `class` = '$class',
  `record` = '$rec', `psn` = '$psn', `address` = '$address' WHERE `admission`.`cnic` = $cn;";
	}
	
if($con->query($sql)){
	if($nimg!=null){
	$file=move_uploaded_file($img,"uploads/$nimg");
	echo "Updated f<br>";
	header("Location: beforeplogin.php?cn=".$cn);
	}
	else{
	echo "Updated<br>";
	header("Location: beforeplogin.php?cn=".$cn);
	}
}
else{
	echo "Not updated<br>";
}

}

else{
	echo "ERROR! Fill Complete form first<br>";
}


$con->close();
?>
