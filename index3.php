
<html>
<head>
<title>
<p1>four_WHLR_PARKING_SYSTEM</p1>
</title>
<style>

body
{
//background-color:lightgreen;
background-image:url("carami.jpg");

background-position:center;
}
H2{
FLOAT:RIGHT;
}
h1{
text-align:center;
color:RED;
font-size:65px;
margin-top:50px;
BORDER-STYLE:GROOVE;
border-width:20PX 30Px;
}
p1
{
background-color:lightpink;
}
</style>
<body>
<H1><i><b>FOUR_WHLR_LOGIN_ID</b></i></H1>
<h2>
<button>
<A HREF="shc.php" class="button">EXIT_VEHICLES</A></button>


</h2>

</body>
</html>

<?PHP

//echo "<h1><U><I><MARK>TWO_WHLR_LOGIN_ID</MARK>/</I><U></h1>";
//if(isset($_POST["vehicle_no"])&&ISSET($_POST["company_name"])&&ISSET($_POST["owner_name"])&&ISSET($_POST["entry_time"])&&ISSET($_POST["exit_time"])&&ISSET($_POST["cost_per_min"]))
if(isset($_POST["vehicle_no"])&&ISSET($_POST["company_name"])&&ISSET($_POST["owner_name"]))

{

//echo $_POST["vehicle_no"];
//echo"<br>vehicle_no inserted<br>";

//echo $_POST["company_name"];
//echo"<br>company_name inserted<br>";

//echo $_POST["owner_name"];
//echo"<br>owner_name inserted<br>";

//echo"<br>entry_time inserted<br>";

//echo $_POST["exit_time"];
//echo"<br>exit_time inserted<br>";

//echo $_POST["cost_per_min"];
//echo"<br>cost_pr_min inserted<br>";

//echo "not found data <br>";

$host="Localhost";
$user="root";
$pass="";
$db="vehicle";
$pno=0;
$con=mysqli_connect($host,$user,$pass,$db);
if(!$con)
echo "<b><u> NOT connected succcessfully to database</u><b><br>";
else
{
$vehicle_no=$_POST["vehicle_no"];
$company_name=$_POST["company_name"];
$owner_name=$_POST["owner_name"];
//$entry_time=$_POST["entry_time"];
//$exit_time=$_POST["exit_time"];
//$cost_per_min=$_POST["cost_per_min"];
$res=mysqli_query($con,"select * from 4_whlr");
while($row=mysqli_fetch_assoc($res))
 {$pno = $row["pass_no"];
 }
 $pno=$pno+1;
 $sql="INSERT INTO `vehicle`.`4_whlr` (`pass_no`, `vehicle_no`, `company_name`, `owner_name`, `entry_time`) VALUES 
 ('$pno', '$vehicle_no', '$company_name', '$owner_name', NOW())";
 
 /* $sql="INSERT INTO `vehicle`.`two_whlr` (`pass_no`, `vehicle_no`, `company_name`, `owner_name`, `entry_time`, `exit_time`, `cost_per _min`) VALUES 
 ('$pno', '$vehicle_no', '$company_name', '$owner_name', NOW(), NOW(), '$cost_per_min')";*/
 

if(mysqli_query($con,$sql))
{
echo "<br><H3><STRONG><u><mark>data inserted successfully</mark></u></STRONG></H3>";
 echo "<h4><MARK>YOUR_PASS_NO_IS $pno</MARK></H4>";

}
else {
echo " oops!! something  wrong not inserted";
}
}
}

?>


<html>
<BODY>
<style>
form{
TEXT-ALIGN:CENTER;
background-color:grey;
font-size:24px;
WIDTH:350PX;
HEIGHT:210PX;
}
.button{
backgound-color:grey;
border:red;
color:black;
//padding:35px 42px;
//text-align:center;
//text-decoration:red;
display:inline-block;
font-size:36px;
margin:14px 12px;
//curser:pointer;
}

</style>


<form action="index3.php" method="post">
VEHICLE_NO:<br><INPUT TYPE="VARCHAR" PLACEHOLDER=" eg.UP78 EC4219"  NAME="vehicle_no" required><br>
COMPANY_NAME:<br><INPUT TYPE="VARCHAR" PLACEHOLDER="eg.TVS STARCITY+" NAME="company_name" required><br>

OWNER_NAME:<br><INPUT TYPE="VARCHAR" PLACEHOLDER="EG.SHIVAM MAURYA" NAME="owner_name"  required><br>






<BR>
<input type="submit" value="Submit">


</FORM>

<BR>
<BR>
<BR>
<button>
<A HREF="a3.php" class="button">SHOW_ENTRY_OF_four_WHELERS</A></button>
</BODY>
</html>



