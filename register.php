 <?php
$server_name="localhost";
$username="root";
$password="";
$database_name="register";


$con=mysqli_connect($server_name,$username,$password,$database_name);
if(!$con)
{
	die("Connection Failed" . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	$first_name = $_POST['first_name'];   
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$dob = $_POST['dob'];
	$phone = $_POST['phone'];
	$bloodgroup = $_POST['bloodgroup'];
	$donate = $_POST['donate'];
	$address = $_POST['address'];
	$file = $_POST['file'];

	$sql_query = "INSERT INTO register (first_name,last_name,email,age,dob,phone,bloodgroup,donate,address,file)
	VALUES ('$first_name','$last_name','$email','$age','$dob','$phone','$bloodgroup','$donate','$address','$file')";

	if(mysqli_query($con,$sql_query))
	{
	echo '<script type="text/javascript"> alert("Data Successfully Registered ") </script>';
	header("refresh:2; url=Donor Registration.html");
	}
	else
	{
	echo "Error:" . $sql . "" . mysqli_error($con);
	}
	mysqli_close($con);
	}
?>