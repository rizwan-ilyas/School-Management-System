<?php
 
 error_reporting(0);
 
$con=mysqli_connect("localhost","root","","dbpro");
if($con){
	echo "connectd successfuly<br>";
}
else{
	echo "Not Connected<br>";
}

echo "<button><a href='admin.php'>Back</a></button><br>";


$name="The General School System";
$remail="rizwan.mdk.018@gmail.com";
$subject=$_POST['subject'];
$message=$_POST['msg'];
$message.="\n\n\nRegards, \n$name \n$semail";
$message=wordwrap($message,70);
$remail="rizwan.mdk.018@gmail.com";

$class1=$_POST['class1'];
$class2=$_POST['class2'];
$class3=$_POST['class3'];
$class4=$_POST['class4'];
$class5=$_POST['class5'];
$class6=$_POST['class6'];
$class7=$_POST['class7'];
$class8=$_POST['class8'];
$class9=$_POST['class9'];
$class10=$_POST['class10'];

$enter=$_POST['enter'];


if(isset($_POST['enter'])){
session_start();
if(isset($class1)){

$tablename="studentid$class1";
$m=mysqli_query($con,"select email from $tablename");
while($res=$m->fetch_array()){
	$ml=mail($res['email'],$subject,$message);
}
if($ml){
	echo "Notification Has send to Class First<br>";
}
else{
	echo "Notification Has not send to Class First<br>";
}
}

if(isset($class2)){

$tablename="studentid$class2";
$m=mysqli_query($con,"select email from $tablename");
while($res=$m->fetch_array()){
	$ml=mail($res['email'],$subject,$message);
}
if($ml){
	echo "Notification Has send to Class Second<br>";
}
else{
	echo "Notification Has not send to Class Second<br>";
}
}

if(isset($class3)){

$tablename="studentid$class3";
$m=mysqli_query($con,"select email from $tablename");
while($res=$m->fetch_array()){
	$ml=mail($res['email'],$subject,$message);
}
if($ml){
	echo "Notification Has send to Class Third<br>";
}
else{
	echo "Notification Has not send to Class Third<br>";
}
}

if(isset($class4)){

$tablename="studentid$class4";
$m=mysqli_query($con,"select email from $tablename");
while($res=$m->fetch_array()){
	$ml=mail($res['email'],$subject,$message);
}
if($ml){
	echo "Notification Has send to Class Fourth<br>";
}
else{
	echo "Notification Has not send to Class Fourth<br>";
}
}

if(isset($class5)){

$tablename="studentid$class5";
$m=mysqli_query($con,"select email from $tablename");
while($res=$m->fetch_array()){
	$ml=mail($res['email'],$subject,$message);
}
if($ml){
	echo "Notification Has send to Class Fifth<br>";
}
else{
	echo "Notification Has not send to Class Fifth<br>";
}
}

if(isset($class6)){

$tablename="studentid$class6";
$m=mysqli_query($con,"select email from $tablename");
while($res=$m->fetch_array()){
	$ml=mail($res['email'],$subject,$message);
}
if($ml){
	echo "Notification Has send to Class Sixth<br>";
}
else{
	echo "Notification Has not send to Class Sixth<br>";
}
}

if(isset($class7)){

$tablename="studentid$class7";
$m=mysqli_query($con,"select email from $tablename");
while($res=$m->fetch_array()){
	$ml=mail($res['email'],$subject,$message);
}
if($ml){
	echo "Notification Has send to Class Seventh<br>";
}
else{
	echo "Notification Has not send to Class Seventh<br>";
}
}

if(isset($class8)){

$tablename="studentid$class8";
$m=mysqli_query($con,"select email from $tablename");
while($res=$m->fetch_array()){
	$ml=mail($res['email'],$subject,$message);
}
if($ml){
	echo "Notification Has send to Class Eighth<br>";
}
else{
	echo "Notification Has not send to Class Eighth<br>";
}
}

if(isset($class9)){

$tablename="studentid$class9";
$m=mysqli_query($con,"select email from $tablename");
while($res=$m->fetch_array()){
	$ml=mail($res['email'],$subject,$message);
}
if($ml){
	echo "Notification Has send to Class Ninth<br>";
}
else{
	echo "Notification Has not send to Class Ninth<br>";
}
}

if(isset($class10)){

$tablename="studentid$class10";
$m=mysqli_query($con,"select email from $tablename");
while($res=$m->fetch_array()){
	$ml=mail($res['email'],$subject,$message);
}
if($ml){
	echo "Notification Has send to Class Tenth<br>";
}
else{
	echo "Notification Has not send to Class Tenth<br>";
}
}

unset($enter);
}

else{
	echo "Not send<br>";
}




?>


<html>
<head>

</head>

<body>

<div>
<h2>Select Class to Send Notification</h2>
</div>
<form action="afternoti.php" method="POST">
<div align="left">

<input type="radio" name="class1" value="1"/>&nbsp&nbsp&nbsp Class One</br>
<input type="radio" name="class2" value="2"/>&nbsp&nbsp&nbsp Class Two</br>
<input type="radio" name="class3" value="3"/>&nbsp&nbsp&nbsp Class Three</br>
<input type="radio" name="class4" value="4"/>&nbsp&nbsp&nbsp Class Four</br>
<input type="radio" name="class5" value="5"/>&nbsp&nbsp&nbsp Class Five</br>
<input type="radio" name="class6" value="6"/>&nbsp&nbsp&nbsp Class Six</br>
<input type="radio" name="class7" value="7"/>&nbsp&nbsp&nbsp Class Seven</br>
<input type="radio" name="class8" value="8"/>&nbsp&nbsp&nbsp Class Eight</br>
<input type="radio" name="class9" value="9"/>&nbsp&nbsp&nbsp Class Nine</br>
<input type="radio" name="class10" value="10"/>&nbsp&nbsp&nbsp Class Ten</br>
</div>
</br></br>
Subject</br></br>
<input type="text" size="40%" name="subject" required/></br></br>
Message</br></br>
<textarea cols="80" rows="20" name="msg" required></textarea></br></br></br>
<button type="submit" name="enter" required>Enter</button></br></br></br>
</form>


</body>
</html>




