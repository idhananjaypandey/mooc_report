<?php
include 'conn.php';
if(isset($_POST['submit']))
{ 

$conn= mysqli_connect('localhost','root','','lpu');
if (!$conn) {
	die("connection failed".mysqli_error());
	}

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$mobile_no = $_POST['mobile_no'];
$address = $_POST['address'];

$query = "INSERT INTO users (name, email,password,mobile_no,address) VALUES ('".$name."', '".$email."','".$password."', '".$mobile_no."', '".$address."')";

if(mysqli_query($conn,$query))
{
//echo "Data Sent successfully";
}
else
{
echo "Login failed". mysqli_error($conn);
} 
}
?>


<h2 style="text-align:center"><?php echo "Hello ".$name." Welcome To Your Web Page!";?></h2>

