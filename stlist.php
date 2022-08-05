<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","dbpro");


?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="afteradmit.css">
    <title>Students Lists</title>
</head>
<body>
    <div class="ad"><h1 align="center">List Of Students</h1><button><a href="admin.php">Back</a></button></div>
<table align="center">
    <tr>
<th>Roll #</th>
<th>Name</th>
<th>Father Name</th>
<th>Class</th>
<th>Gender</th>
<th>cnic</th>
<th>Email</th>

<?php
for($i=1;$i<11;$i++){
$tablename="studentid$i";
$sql="select * from $tablename";
$qury=mysqli_query($con,$sql);

while($result=$qury->fetch_array()){
echo "<tr>
    <td>$result[rollno]</td>
    <td>$result[name]</td>
    <td>$result[fname]</td>
    <td>$result[class]</td>
    <td>$result[gender]</td>
    <td>$result[cnic]</td>
    <td>$result[email]</td>
    </tr>";

}
}



?>


       

    </table>




</body>
</html>