<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","dbpro");
if($con){
	
}
else{
	echo "Not Connected</br>";
}
session_start();
$id=$_POST['id'];
$pass=$_POST['pass'];

if(isset($id,$pass)){
	if($id=="admin" && $pass="admin"){
		header("Location: admin.php?id=".$id);
		session_destroy();
	}
	else{
	if($id>=1000){
		$arr=str_split($id,1);
		$t="$arr[0]$arr[1]";	
	}

	else{
		$arr=str_split($id,1);	
		$t="$arr[0]";
}

$tablename="studentid$t";
		$flage=null;
	$q=mysqli_query($con,"select rollno from $tablename where rollno=$id");
	while($res=$q->fetch_array()){
		$flage= $res[0];
	}
	if($flage){
		
	$q2=mysqli_query($con,"select date_format(dob,'%m%d%Y') from $tablename where rollno=$id");
	while($p=$q2->fetch_array()){
		$password= $p[0];

	}
			if($password==$pass){
				echo "Every Thing is Ok<br>";
				header("Location:student.php?roll=".$id);
			}
			else{
				echo "Password Does Not Match<br>";
				
				
			}
			
	}
	else{
		echo "Your Data does Not Exist<br>";
	}

}
}





?>



<html>
<title> sms.login </title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

<link rel="stylesheet" href="login.css">
<body> 

<div class="logo">
</div>

<div class="q" align="left">
<div class="r"><a href="Home.php">Home</a></div>
<div class="w"><a href="admission.php">Admission</a></div>
<div class="w"><a href="login.php">SMS</a></div>
<div class="w"><a href="Contact.php">Contact Us</a></div>
<div class="w"><a href="sign.php">SIGN IN</a></div>
<input type="text" placeholder="&#128269;search here" align="center" size="25"/>
</div>



<div class="box">
<div class="smallbox">
<div class="column1">
<div class="image"> 
<img src="login.png" class="image"> </img> 
</div>
</div>
  
  <div class="column2">
  <div class="sms">SMS Login</div>
  <div>
  <form action="" method="POST">
  <input class="loginid" name="id" type="text" placeholder=" LOGIN ID" required></input>
  </div>
  <div>
  <input class="password" name="pass" type="password" placeholder=" Password" required></input>
  </div>
  <div> <button class="btn" type="submit">Enter</button> </div>
  </div>
  </form>

</div>
</div> 



</body>
</html>