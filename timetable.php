<?php
$con=mysqli_connect("localhost","root","","dbpro");
$sql=mysqli_query($con,"select file from management;");
while($res=$sql->fetch_array()){
	$nfile=$res[0];
}

echo "
	<div width='100%' height='100%'>
	<img style='margin:auto; display:block; width:auto; height:auto;' align='center' width='auto' src='management/$nfile'>


	</img>
</div>
";



?>