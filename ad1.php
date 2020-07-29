
<html>
<head>
<title>
TWO_WHLR_PARKING_SYSTEM
</title>
<style>
body{
//background-color:lightgreen;
background-image:url("ba.jpg");

}
H2{
FLOAT:RIGHT;
}
h1{
text-align:center;
color:RED;
font-size:50px;
margin-top:50px;
BORDER-STYLE:GROOVE;
border-width:20PX 30Px;
}
</style>
<body>
<H1><marquee scrollamount=20>TWO_WHLR_LOGIN_ID</marquee></H1>
<h2>
<button>
<A HREF="shb.php" class="button">EXIT_VEHICLES</A></button>


</h2>

</body>
</html>

<?PHP

//echo "<h1><U><I><MARK>TWO_WHLR_LOGIN_ID</MARK>/</I><U></h1>";
//if(isset($_POST["vehicle_no"])&&ISSET($_POST["company_name"])&&ISSET($_POST["owner_name"])&&ISSET($_POST["entry_time"])&&ISSET($_POST["exit_time"])&&ISSET($_POST["cost_per_min"]))
if(isset($_POST["username"])&&ISSET($_POST["password"]))

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
$username=$_POST["username"];
$password=$_POST["password"];

//$entry_time=$_POST["entry_time"];
//$exit_time=$_POST["exit_time"];
//$cost_per_min=$_POST["cost_per_min"];
$res=mysqli_query($con,"select * from two_whlr");
while($row=mysqli_fetch_assoc($res))
 {$pno = $row["pass_no"];
 }
 $pno=$pno+1;
 $sql="SELECT * FROM `admin` WHERE username='shivam' and password='shivam123'";
 
 /* $sql="INSERT INTO `vehicle`.`two_whlr` (`pass_no`, `vehicle_no`, `company_name`, `owner_name`, `entry_time`, `exit_time`, `cost_per _min`) VALUES 
 ('$pno', '$vehicle_no', '$company_name', '$owner_name', NOW(), NOW(), '$cost_per_min')";*/
 

if(mysqli_query($con,$sql))
{
echo "<br><H3><STRONG><u><mark>data inserted successfully</mark></u></STRONG></H3>";
 echo "<h4><MARK>right passwprd</MARK></H4>";

}
else {
echo " oops!! something  wrong ";
}
}
}

?>


<html>
<BODY>
<style>
form{
TEXT-ALIGN:CENTER;
background-color:pink;
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


<form action="AD11.php" method="post">

USERNAME:<br><INPUT TYPE="VARCHAR" PLACEHOLDER=" eg.UP78 EC4219"  NAME="vehicle_no" required><br>
PASSWORD:<br><INPUT TYPE="PASSWORD" PLACEHOLDER="eg.TVS STARCITY+" NAME="company_name" required><br>




<BR>
<input type="submit" value="Submit">


</FORM>

<BR>
<BR>
<BR>
<button>
<A HREF="a2.php" class="button">SHOW_ENTRY_OF_TWO_WHELERS</A></button>
</BODY>
</html>



