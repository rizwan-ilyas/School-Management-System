<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","dbpro");

$d=$_POST['app'];
echo "$d"; 


?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="afteradmit.css">
    <title>after admission</title>
</head>
<body>
    <div class="ad"><h1 align="center">Admission Applications</h1><button><a href="admin.php">Back</a></button></div>
<table align="center">
    <tr>
<th>Class</th>
<th>Name</th>
<th>Gender</th>
<th>cnic</th>
<th>Date Of Birth</th>
<th>Email</th>
<th>Record/CGPA</th>
<th>Old School Name</th>
<th>Address</th>

<?php


$sql="select * from admission";
$qury=mysqli_query($con,$sql);

while($result=$qury->fetch_array()){
echo "<tr>
    <td>$result[6]</td>
    <td>$result[1]</td>
    <td>$result[2]</td>
    <td>$result[3]</td>
    <td>$result[5]</td>
    <td>$result[7]</td>
    <td>$result[9]</td>
    <td>$result[10]</td>
    <td>$result[11]</td>
	<td><button name='app'><a href='approve.php?cni=$result[3]'>Approve</a></button></td>
	<td><button name='del'><a href='delete.php?id=$result[3]'>Delete</a></button></td>
    
    </tr>";

}




?>


       

    </table>




</body>
</html>