<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","dbpro");
	
echo "<br><br>";
echo "Enter the Correct Date for verification</br>
<form action='' method='POST' >
<input type='date' name='date' /required>
<button type='submit' name='submit'>Enter</button>
</form>
";
echo "<button style='width:10%;'><a href='admin.php'>GO BACK</a></button>";
echo "<br><br><br>";
$dat=$_POST['date'];

	$d=date("Y-m-d");
		if($d==$dat){
			for($i=1;$i<11;$i++){
				$tablename="studentid$i";
			$f=mysqli_query($con,"update $tablename set fee='NOT PAID'; ");
			if($f){
				echo "Fee Status of class $i has been Updated<br>";
			}
			else{
				echo "Not Run";
			}
			}
			
			
		}
		else{
			echo "Not Updated ! </br> Please Enter Correct Date</br>";
			
			
		}
	



?>