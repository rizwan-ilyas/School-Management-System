




<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","dbpro");




?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="afteradmit.css">
    <title>after admission</title>
</head>
<body>
    <div class="ad"><h1 align="center">NOT PAID Fee status List</h1><button><a href="admin.php">Back</a></button></div>
<table align="center">
    <tr>
<th>Roll #</th>	
<th>Name</th>
<th>class</th>
<th>Email</th>

<?php

for($i=1;$i<11;$i++){
$tablename="studentid$i";
$sql="select rollno,name,class,email from $tablename where fee='' or fee='NOT PAID'";
$qury=mysqli_query($con,$sql);
if($qury){
while($result=$qury->fetch_array()){
echo "<tr>
    <td>$result[rollno]</td>
    <td>$result[name]</td>
    <td>$result[class]</td>
    <td>$result[email]</td>    
    </tr>";

}
}
else{
	echo "Not Run";
}
}



?>


       

    </table>



</body>
</html>