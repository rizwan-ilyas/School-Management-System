<?php

$con=mysqli_connect("localhost","root","","dbpro");
if($con){
	echo "conected Successfully<br>";
}
else{
	echo "Not Connected</br>";
}

$name=101;
$arr=str_split($name);
echo "$arr[0]<br>";
echo "$arr[1]<br>";
echo "$arr[2]<br>";
echo "$arr[0]$arr[1]";
$i="id";
$n="student$i";

$sql="select * from $n";
$r=mysqli_query($con,$sql);
while($res=$r->fetch_array()){

}




?>

