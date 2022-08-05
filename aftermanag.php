<?php
$con=mysqli_connect("localhost","root","","dbpro");
error_reporting(0);

$q=mysqli_query($con,"select file from management;");
while($res=$q->fetch_array()){
	$nfile=$res[0];
}


$file=$_FILES['file']['tmp_name'];
$nfile=$_FILES['file']['name'];

if($file!=null){
	$d=unlink("management/$nfile");
	if($d){
		echo "Previous File Deleted</br>";
	}
	else{
		echo "Not Deleted<br>";
	}
	$sql=mysqli_query($con,"UPDATE `management` SET `file`= '$nfile';");
	if($sql){
	$m=move_uploaded_file($_FILES['file']['tmp_name'],"management/$nfile");
	if($m){
		echo "Updated Successfully<br>";
	}
	else{
		echo "Not Updated<br>";
	}
	}
	else{
		echo "Query Not Run<br>";
	}
	
}
else{
	$sq=mysqli_query($con,"select file from management;");
while($res=$sq->fetch_array()){
	$nfile=$res[0];
}
	
}



?>


<html>
<button><a href="admin.php">BACK</a></button>
<h2 align="center">Input the File to Renew the Time table</h2>
<?php echo "<iframe style='margin:auto;display:block;' width='90%' height='70%' src='management/$nfile'></iframe>"; ?>
<form action="aftermanag.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file" />
</br></br></br>
<button type="submit" name="upd">UPDATE</button>
</form>




</html>