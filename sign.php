<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","dbpro");
if(!$con){
	die(mysqli_connect-error());
}
else{
	
}

$cnic=$_POST['cnic'];
$password=$_POST['password'];
if(isset($cnic,$password)){
$sql="select cnic from  admission where cnic=$cnic";
$s=mysqli_query($con,$sql);
$c=null;
while($res=$s->fetch_array()){
	$c=$res[0];
}

$sl="select date_format(dob, '%m%d%Y') from  admission where cnic=$c";
		$sq=mysqli_query($con,$sl);
		while($result=$sq->fetch_array()){
		$pass=$result[0];
		
		}

if($c!=null){
	echo "Is in the record<br>";
		if($password==$pass){
			echo "SIGN In Successfully<br>";
			header("Location: beforeplogin.php?cn=".$c);

		}
		else{
			echo "The Password Does not Match.<br>";
		}
		
	
}
else{
	echo "Is Not in the record<br>";
}
}
else{
	echo "Please Sign With Your CNIC<br>";
}



$con->close();

?>


<html>
<title> SIGN.login </title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

<link rel="stylesheet" href="sign.css">
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
  <div class="sms">Sign IN</div>
  <div>
  <form action="sign.php" method="POST">
  <input class="loginid" type="text" placeholder=" Enter CNIC(without '-')" maxlength="13" pattern="[0-9]{13}" name="cnic" required/>
  </div>
  <div>
  <input class="password" type="password" placeholder=" Password" name="password" required/>
  </div>
  <div> <button class="btn" type="submit">Enter</button> </div>
  </form>
  </div>

</div>
</div> 



</body>
</html>