 <HTML>
 <HEAD>
 <STYLE>
 
 body{
//background-color:lightgreen;
background-image:url("ext.jpg");
}
h1{
text-align:center;
color:grey;
font-size:50px;
margin-top:50px;
BORDER-STYLE:GROOVE;
border-width:20PX 30Px;

BORDER-COLOR:grey;
}

H2{
text-align:center;
color:red;
font-size:50px;
margin-top:50px;

border-width:20PX 30Px;
}

</STYLE>
<h1><b><u><MARK>EXTRACT DATA FROM DATABASE</MARK></U></B></H1>
 </HEAD>
 <BODY>
 </BODY>
 </HTML>
<?php
//echo "<h1><b><u>EXTRACT DATA FROM DATABASE</U></B></H1>";
$con=mysqli_connect("Localhost","root","","vehicle");

$result=mysqli_query($con,"SELECT*FROM two_whlr");
echo "<table border='8' bordercolor='grey' bgcolor='yellow'>
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

//mysqli_close($con);




echo "</table>";



if($con)
{
$sum=0;

$result=mysqli_query($con,"SELECT sum(cost)as total FROM two_whlr");

$row1=mysqli_fetch_assoc($result);
$sum +=$row1['total'];
echo "<h2> <MARK>TOTAL PARKING_CHARGES OF TWO_WHLRS IS.... $sum </MARK></H2>";
}

else{
echo "0resul;t";
}
?>
