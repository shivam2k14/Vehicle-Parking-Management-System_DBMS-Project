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
echo "</table>";
mysqli_close($con);

?>
