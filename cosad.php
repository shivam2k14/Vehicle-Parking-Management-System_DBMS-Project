<?php
if(isset($_POST["cost"]))
{
$host="Localhost";
$user="root";
$pass="";
$db="vehicle";

$con=mysqli_connect($host,$user,$pass,$db);
if(!$con)
echo "<b><u> NOT connected succcessfully to database</u><b><br>";
else
{
//$sql2=mysqli_query($con,"SELECT pass_no FROM two_whlr");




$cost=$_POST["cost"];
//$sql2="SELECT `pass_no`, `exit_time`, `cost_per _min` FROM `two_whlr` WHERE pass_no='$pass_no';";
//if(mysqli_query($con,$sql2)&&($pass_no==$sql2))
/*$result=mysqli_query($con,"SELECT*FROM two_whlr");
echo "<table border='8' bordercolor='red' bgcolor='yellow'>
<tr>
<th>PASS_NO</th>
<th>VEHICLE_NU</th>
<th>COMPANY_NAME</th>
<th>OWNER_NAME</th>
<th>ENTRY_TIME</th>
<th>EXIT_TIME</th>
<th>COST_PER_MIN</th>
</tr>";

while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['pass_no']."</td>";
echo "<td>".$row['vehicle_no']."</td>";

echo "<td>".$row['company_name']."</td>";
echo "<td>".$row['owner_name']."</td>";
echo "<td>".$row['entry_time']."</td>";
echo "<td>".$row['exit_time']."</td>";
echo "<td>".$row['cost_per _min']."</td>";

echo "</tr>";
}
echo "</table>";*/









$sql="UPDATE `two_whlr` SET `cost`='$cost' ;";


if(mysqli_query($con,$sql))
{
echo "<mark>set</mark>";
}
else
 echo "<mark> not </mark>";
/*
echo "<br><H3><STRONG><u><mark>data updated successfully</mark></u></STRONG></H3>";

$result=mysqli_query($con,"SELECT `pass_no`, `vehicle_no`, `company_name`, `owner_name`, `entry_time`, `exit_time`, `cost` FROM `two_whlr` WHERE pass_no='$pass_no';");
echo "<table border='9' bordercolor='red' bgcolor='yellow'>
<tr>
<th>PASS_NO</th>
<th>VEHICLE_NU</th>
<th>COMPANY_NAME</th>
<th>OWNER_NAME</th>
<th>ENTRY_TIME</th>
<th>EXIT_TIME</th>
<th>COST</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['pass_no']."</td>";
echo "<td>".$row['vehicle_no']."</td>";

echo "<td>".$row['company_name']."</td>";
echo "<td>".$row['owner_name']."</td>";
echo "<td>".$row['entry_time']."</td>";
echo "<td>".$row['exit_time']."</td>";
echo "<td>".$row['cost']."</td>";

echo "</tr>";
}
echo "</table>";
}
else{
echo "<mark>OOPS!tell right pass_no</mark>";
}
*/
}
}
?>




<html>
<body>
<style>
body{
background-color:lightgreen;
background-image:url("TT.jpg");
}
form{
TEXT-ALIGN:center;
background-color:pink;

font-size:44px;
WIDTH:300PX;
HEIGHT:175PX;
}
h2{
text-align:center;
color:RED;
font-size:70px;
margin-top:30px;
BORDER-STYLE:GROOVE;
border-width:20PX 30Px;
}
</style>
<h2>
<form action="cosad.php" method="post">

NEW_COST:<br><INPUT TYPE="FLOAT" ID="pass_no"  NAME="COST" ><br><br>
<input type="submit" value="Submit">
</form>
</h2>
</body>
</html>




