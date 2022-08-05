
<?php
error_reporting(0); 
$con=mysqli_connect("localhost","root","");
if($con){
	
}
else{
	echo "Not Connected<br>";
}
$name=$_POST['name'];
$semail=$_POST['email'];


$subject=$_POST['subject'];
$message=$_POST['msg'];
$message.="\n\n\nRegards, \n$name \n$semail";


$message=wordwrap($message,70);

$remail="rizwan.mdk.018@gmail.com";

$check=null;

if(isset($semail,$name)){
	
$r=mail($remail,$subject,$message);
$s=mail($semail,$subject,"Thank You for connected.\nWe will reply you Very Soon\n\n\n\n\nRegards, \nThe General School System \n$remail");
if($r==true & $s==true){
	$check=true;
	echo "Sent<br>";
	unlink($semil,$name);

}
else{
	$check=false;
}

$con->close();
}



else{
	echo "Not sent<br>";
	$con->close();
}

?>

<html>

<link rel="stylesheet" href="Contact.css">

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
<?php
  if($check==true)	{
	  echo '<h3 align="center" type="red">Email has been Sent Successfuly<br></h3>';
  }
  else{
	  echo '<h3 align="center" type="red">Yet Not Sent<br></h3>';
  }
  ?>
<div class="image"> 
<img src="msg.png" class="image"> </img> 
</div>
</div>
  
  <div class="column2">
    
  <form action="contact.php" method="POST">
  
  <div class="msg">

  Get in touch</div>
  <div>
  <input class="name" type="text" name="name" placeholder=" Name" required></input>
  </div>
  <div>
  <input class="email" type="email" name="email" placeholder=" Email" required></input>
  </div>
  <div>
  <input class="subject" type="text" name="subject" placeholder=" Subject" required></input>
  </div>
  <div>
  <textarea rows=9 cols=40 type="text" name="msg" placeholder=" Message" class="mesage"></textarea>
  </div>
  <div> <button class="btn" name="enter" type="submit">Enter</button> </div>
  
  </form>
  </div>

</div>
</div> 



</body>
</html>